<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Plans;
use App\Models\Transaction;
use App\Models\UserMiningPower;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function account()
    {
        $user = User::find(session('user'));

        $balance = $this->getUserBalance();
        $curval = '800000.00029';
        $hashrate = '10';
        
        return view('user.account', [
            'user' => $user,
            'username' => $user->email ?? $user->wallet,
            'balance' => $balance,
            'dailyProfit' => '0.000000',
            'curval' => $curval,
            'hashrate' => $hashrate,
            'referrals' => 0,
            'tot_deposits' => 0,
            'tot_withdrawals' => 0,
            'curr_balance' => $balance,
        ]);
    }

    function getUserBalance()
    {
        $user = User::find(session('user'));
        if (! $user) {
            return null;
        }

        $userID = $user->id;

        $user_plans = UserMiningPower::where('user_id', $userID)
            ->where('status', 'active')
            ->get();

        $expired_plans = UserMiningPower::where('user_id', $userID)
            ->where('status', 'expired')
            ->whereRaw('last_sum != expire_date')
            ->get();

        // ambil dari setting jika tersedia, fallback ke 50
        $dailyProfit = 50.0;
        $profit_per_second = (float) $dailyProfit / 86400.0;

        $earning = 0.0;
        $now = Carbon::now();

        DB::transaction(function () use (
            $userID,
            $user_plans,
            $expired_plans,
            $profit_per_second,
            $now,
            &$earning
        ) {
            // aktif
            if ($user_plans->isNotEmpty()) {
                foreach ($user_plans as $plan) {
                    $start = $plan->last_sum ? Carbon::parse($plan->last_sum) : Carbon::parse($plan->created_at);
                    $seconds = max(0, $start->diffInSeconds($now));
                    $planEarn = $seconds * ($profit_per_second * (float) $plan->power);
                    $earning += $planEarn;
                    // update last_sum ke sekarang (format datetime)
                    $plan->update(['last_sum' => $now->toDateTimeString()]);
                }
            }

            // expired (hitung sampai expire_date)
            if ($expired_plans->isNotEmpty()) {
                foreach ($expired_plans as $plan) {
                    $start = $plan->last_sum ? Carbon::parse($plan->last_sum) : Carbon::parse($plan->created_at);
                    $expire = Carbon::parse($plan->expire_date);
                    $seconds = max(0, $start->diffInSeconds($expire));
                    $planEarn = $seconds * ($profit_per_second * (float) $plan->power);
                    $earning += $planEarn;
                    // tandai sudah dihitung sampai expire_date
                    $plan->update(['last_sum' => $expire->toDateTimeString()]);
                }
            }

            // kalau ada earning, increment saldo user di DB atomik
            if ($earning > 0) {
                DB::table('users')->where('id', $userID)->increment('balance', $earning);
            }
        });

        // refresh model supaya balance yang dikembalikan up-to-date
        $user->refresh();

        // kembalikan dalam format yang sama seperti sebelumnya
        return $user->balance;
    }

    public function buyHash()
    {
        $user = User::find(session('user'));
        
        // Ambil semua plans yang aktif
        $plans = Plans::where('is_active', true)->get();
        
        // Kelompokkan plans berdasarkan tier untuk kemudahan akses di blade
        $groupedPlans = [
            'starter' => $plans->where('tier_label', 'Starter')->first(),
            'professional' => $plans->where('tier_label', 'Professional')->first(),
            'enterprise' => $plans->where('tier_label', 'Enterprise')->first(),
        ];
        
        // Hitung base rate dari ROI percentage (asumsi per hari)
        $baseRate = 0.00029; // Default rate jika tidak ada data
        
        return view('user.buy-hash', [
            'user' => $user,
            'plans' => $plans,
            'groupedPlans' => $groupedPlans,
            'baseRate' => $baseRate,
        ]);
    }

    public function purchase($hash)
    {
        $user = User::find(session('user'));

        $transaction = Transaction::where('hash_invoice', $hash)->firstOrFail();
        
        return view('user.purchase', [
            'user' => $user,
            'tx' => $transaction,
        ]);
    }

    public function miningMetrics()
    {
        $user = User::find(session('user'));
        
        return view('user.mining-metrics', [
            'user' => $user,
        ]);
    }

    public function history()
    {
        $user = User::find(session('user'));

        return view('user.history', [
            'user' => $user,
        ]);
    }

    public function deposits()
    {
        $user = User::find(session('user'));

        return view('user.deposits', [
            'user' => $user,
        ]);
    }

    public function withdrawals()
    {
        $user = User::find(session('user'));

        return view('user.withdrawals', [
            'user' => $user,
        ]);
    }

    public function referrals()
    {
        $user = User::find(session('user'));

        return view('user.referrals', [
            'user' => $user,
        ]);
    }

    public function profitCalculator()
    {
        $user = User::find(session('user'));

        return view('user.profit-calculator', [
            'user' => $user,
        ]);
    }

    public function news()
    {
        $user = User::find(session('user'));

        return view('user.news', [
            'user' => $user,
        ]);
    }

    public function tickets()
    {
        $user = User::find(session('user'));

        return view('user.tickets', [
            'user' => $user,
        ]);
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('home');
    }
}
