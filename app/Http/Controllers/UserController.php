<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function account()
    {
        $user = User::find(session('user'));
        $balance = $user->balance;
        $curval = '0.00029';
        $hashrate = '10';
        
        return view('user.account', [
            'user' => $user,
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

    public function buyHash()
    {
        $user = User::find(session('user'));
        
        return view('user.buy-hash', [
            'user' => $user,
        ]);
    }

    public function purchase()
    {
        $user = User::find(session('user'));
        
        return view('user.purchase', [
            'user' => $user,
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
