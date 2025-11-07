<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use CryptoAddressValidator\Facades\CryptoAddressValidator;
use Takuya\RandomString\RandomString;

class WalletLogin extends Component
{
    public $wallet = '';

    public function submit()
    {
        // Validate wallet address format
        $this->validate([
            'wallet' => 'required|min:15|max:50'
        ]);

        // Use CryptoAddressValidator to validate TRON address
        $isValid = CryptoAddressValidator::validate($this->wallet, 'trx');
        if (!$isValid) {
            $this->addError('wallet', 'Please enter a valid TRON wallet address (should start with T and be 34 characters).');
            return;
        }

        // Find or create user by wallet address
        $user = User::firstOrCreate([
            'wallet' => $this->wallet,
            'balance' => 0.00000000,
            'referral_code' => RandomString::gen(8,RandomString::ALPHA_NUM),
            'referred_by' => null,
            'is_admin' => false,
            'is_banned' => false,
        ]);

        // Log the user in by storing their ID in session
        session([
            'user' => $user->id,
        ]);

        return redirect()->route('account');
    }

    public function render()
    {
        return view('livewire.wallet-login');
    }
}
