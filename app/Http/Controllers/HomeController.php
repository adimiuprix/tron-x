<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $minners = 10;
        $tot_deposit = 1000.00000000;
        $tot_withdraw = 500.00000000;
        $running_day = 30;

        return view('home', [
            'minners' => $minners,
            'tot_deposit' => $tot_deposit,
            'tot_withdraw' => $tot_withdraw,
            'running_day' => $running_day,
        ]);
    }

    public function paymentProofs()
    {
        return view('payment-proofs');
    }
}
