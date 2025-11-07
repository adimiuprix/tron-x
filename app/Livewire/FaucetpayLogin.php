<?php

namespace App\Livewire;

use Livewire\Component;

class FaucetpayLogin extends Component
{
    public $email;

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        // proses login kamu sendiri

        return redirect()->route('account');
    }

    public function render()
    {
        return view('livewire.faucetpay-login');
    }
}
