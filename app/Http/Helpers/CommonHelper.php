<?php

use App\Models\UserMiningPower;
use Illuminate\Support\Facades\Cache;

//Fix for Cloudflare IPs
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}

if(!function_exists('currency_format')){
    /**
     * @param $amount
     * @param null $decimals
     * @return string
     */
    function currency_format($amount, $decimals = null)
    {
        return number_format($amount, $decimals ?? setting('currency_decimals'), '.', '');
    }
}

if (!function_exists('theme_detect')) {
    /**
     * Detect themes folders to use on admin->settings theme selector
     * @param string $type
     * @return array
     */
    function theme_detect($type = 'frontend')
    {
        $path = resource_path() . '/views/themes/'.$type.'/';
        $themes_dir = scandir($path);
        $themes = array();
        foreach ($themes_dir as $theme) {
            if ($theme === '.' || $theme === '..') {
                continue;
            }
            if (is_dir($path . $theme)) {
                $themes[] = $theme;
            }
        }
        return $themes;
    }
}

if (!function_exists('theme_asset')) {
    /**
     * Load theme assets from public/assets/themes/frontend
     * @param null $file
     * @return string
     */
    function theme_asset($file = null)
    {
        return asset('assets/themes/frontend/' . setting('frontend_theme') . '/' . $file);
    }
}

if (!function_exists('dashboard_assets')) {
    /**
     * Load theme assets from public/assets/themes/dashboard
     * @param null $file
     * @return string
     */
    function dashboard_assets($file = null)
    {
        return asset('assets/themes/dashboard/' . setting('dashboard_theme') . '/' . $file);
    }
}

if (!function_exists('install_status')) {
    /**
     * Check if script is installed
     * @return bool
     */
    function install_status()
    {
        if(file_exists(storage_path('installed'))){
            return true;
        }
        return false;
    }
}

if (!function_exists('protected_demo_field')) {
    /**
     * @param $value
     * @return mixed|string
     */
    function protected_demo_field($value)
    {
        if (config('smartyscripts.demo_mode') && config('app.env') === 'production'){
            return 'DISABLED IN DEMO';
        }
        return $value;
    }
}

if (!function_exists('fiat_currencies')) {
    /**
     * @return mixed|string
     * @throws JsonException
     */
    function fiat_currencies()
    {
        return json_decode(file_get_contents(resource_path('fiat_currencies.json')), false, 512, JSON_THROW_ON_ERROR)->data;
    }
}

if (!function_exists('currency_format')) {
    /**
     * @param $amount
     * @param $decimals
     * @return string
     */
    function currency_format($amount, $decimals = null)
    {
        return number_format($amount, $decimals ?? 0, '.', '');
    }
}

if (!function_exists('fiat_currency')) {
    /**
     * @param $amount
     * @param $decimals
     * @return string
     */
    function fiat_currency($amount, $decimals = null)
    {
        return currency_format($amount, $decimals). ' ' . setting('rates_api_currency');
    }
}

if (!function_exists('crypto_currency')) {
    /**
     * @param $amount
     * @param $decimals
     * @return string
     */
    function crypto_currency($amount, $decimals = 8)
    {
        return currency_format($amount, $decimals). ' ' . setting('currency_code');
    }
}

if (!function_exists('calculator_periods')) {
    /**
     * @return string
     */
    function calculator_periods()
    {
        $periods = explode(',', setting('calculator_periods'));
        return $periods;
    }
}

if (!function_exists('user_hashpower')) {
    /**
     * @return string
     */
    function user_hashpower()
    {
        //User Mining Power
        $user = auth()->user();
        $mining_power = Cache::remember('mining_power_user_'.$user->id, 3600, function() use ($user){
            return $user->hashpower();
        });
        return $mining_power;
    }
}

if (!function_exists('user_daily_profit')) {
    /**
     * @return string
     */
    function user_daily_profit()
    {
        return user_hashpower() * setting('daily_profit');
    }
}

if (!function_exists('getUserBalance')) {
    /**
     * @return string
     */
    function getUserBalance($decimals = null)
    {
        $userID = auth()->user()->id;
        $user_plans = UserMiningPower::where('user_id', $userID)->where('status', 'active')->get();
        $expired_plans = UserMiningPower::where('user_id', $userID)->where('status', 'expired')->whereRaw('last_sum != expire_date')->get();
        $profit_per_second = setting('daily_profit') / 86400; // coins per second
        $earning = 0;
        if ($user_plans) {
            foreach ($user_plans as $user_plan) {
                $seconds = \Carbon\Carbon::now()->diffInSeconds($user_plan->last_sum ?? $user_plan->created_at);
                $earning += ($seconds * ($profit_per_second * $user_plan->power));
                $user_plan->update(['last_sum' => now()]);
            }
        }
        if ($expired_plans) {
            foreach ($expired_plans as $user_expired_plan) {
                $seconds = \Carbon\Carbon::createFromTimeString($user_expired_plan->expire_date)->diffInSeconds($user_expired_plan->last_sum);
                $earning += ($seconds * ($profit_per_second * $user_expired_plan->power));
                $user_expired_plan->update(['last_sum' => $user_expired_plan->expire_date]);
            }
        }
        if($earning != 0){
            auth()->user()->increment('balance', $earning);
        }

        return currency_format(auth()->user()->balance, $decimals ?? setting('balance_decimals'));
    }
}

if (!function_exists('newUserLog')) {
    /**
     * @param null|int $user_id
     * @param string $type
     * @param string|array $data
     */
    function newUserLog($user_id, $type = 'deposit', $data)
    {
        $power = null;
        $expire_date = null;
        //Deposit
        if($type === 'deposit'){
            $power = $data['power'];
            $expire_date = $data['expire_date'];
            $description = 'You bought '.$data['power'].' '.setting('hashpower_unit').'\'s for '.$data['amount'].' '.setting('currency_code');
        }
        //Reinvest
        if($type === 'reinvest'){
            $power = $data['power'];
            $expire_date = $data['expire_date'];
            $amount = $data['amount'];
            $description = 'You converted '.$amount.' '.setting('currency_code').' to '.$power.' '.setting('hashpower_unit').'\'s';
        }
        //Withdrawal
        if($type === 'withdrawal'){
            $amount = $data;
            $description = 'You made a withdrawal of '.$amount.' '.setting('currency_code');
        }
        //Bonus
        if($type === 'bonus'){
            $amount = $data['amount'];
            $description = 'You received a bonus of '.$amount.' '.setting('currency_code'). '. Reason: '.$data['description'];
        }
        //Penalty
        if($type === 'penalty'){
            $amount = $data['amount'];
            $description = 'You received a penalty of '.$amount.' '.setting('currency_code'). '. Reason: '.$data['description'];
        }
        //Affiliate
        if($type === 'affiliate'){
            $amount = $data;
            $description = 'You received a commission of '.$amount.' '.setting('currency_code'). ' from one of your referrals.';
        }
        //Others
        if($type === 'others'){
            $description = $data;
        }
        //Create user log
        \App\Models\UserLog::create([
            'user_id' => $user_id,
            'type' => $type,
            'description' => $description,
            'power' => $power,
            'expire_date' => $expire_date
        ]);
    }
}

if (!function_exists('setting_field')) {
    /**
     * Hide sensitive data in demo mode
     * @param $key
     * @param $default
     * @return mixed|string
     */
    function setting_field($key, $default = null)
    {
        if(config('smartyscripts.demo_mode') && config('app.env') === 'production'){
            return 'DISABLED IN DEMO';
        }
        return setting($key, $default);
    }
}

if (!function_exists('payment_log')) {
    /**
     * @param string $type
     * @param $message
     * @param $entity
     * @param null $response
     */
    function payment_log($type = 'deposit', $message, $entity, $response = null)
    {
        \App\Models\ErrorLog::create([
            'type' => $type,
            'message' => $message,
            'deposit_id' => ($type === 'deposit') ? $entity->id : null,
            'withdrawal_id' => ($type === 'withdrawal') ? $entity->id : null,
            'user_id' => $entity->user_id ?? null,
            'response' => $response ? json_encode($response, JSON_PRETTY_PRINT) : null
        ]);
    }
}