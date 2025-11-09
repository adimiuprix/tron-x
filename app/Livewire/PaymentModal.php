<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class PaymentModal extends Component
{
    public $showModal = false;
    public $planKey = '';
    public $planName = '';
    public $hashpower = 0;
    public $amount = 0;
    public $paymentMethod = 'faucetpay';
    public $selectedCrypto = 'TRX';
    public $cryptoRates = [];
    public $supportedCurrencies = [];
    public $loading = false;
    public $ratesError = null;

    protected $listeners = ['openPaymentModal'];

    protected $cryptoDatabase = [
        'BTC' => ['name' => 'Bitcoin', 'symbol' => 'BTC', 'image' => 'https://assets.coingecko.com/coins/images/1/large/bitcoin.png', 'decimals' => 8],
        'ETH' => ['name' => 'Ethereum', 'symbol' => 'ETH', 'image' => 'https://assets.coingecko.com/coins/images/279/large/ethereum.png', 'decimals' => 8],
        'USDT' => ['name' => 'Tether', 'symbol' => 'USDT', 'image' => 'https://assets.coingecko.com/coins/images/325/large/Tether.png', 'decimals' => 2],
        'TRX' => ['name' => 'TRON', 'symbol' => 'TRX', 'image' => 'https://assets.coingecko.com/coins/images/1094/large/tron-logo.png', 'decimals' => 6],
        'SOL' => ['name' => 'Solana', 'symbol' => 'SOL', 'image' => 'https://assets.coingecko.com/coins/images/4128/large/solana.png', 'decimals' => 6],
        'LTC' => ['name' => 'Litecoin', 'symbol' => 'LTC', 'image' => 'https://assets.coingecko.com/coins/images/2/large/litecoin.png', 'decimals' => 6],
        'DOGE' => ['name' => 'Dogecoin', 'symbol' => 'DOGE', 'image' => 'https://assets.coingecko.com/coins/images/5/large/dogecoin.png', 'decimals' => 6],
        'ADA' => ['name' => 'Cardano', 'symbol' => 'ADA', 'image' => 'https://assets.coingecko.com/coins/images/975/large/cardano.png', 'decimals' => 6],
        'BNB' => ['name' => 'BNB', 'symbol' => 'BNB', 'image' => 'https://assets.coingecko.com/coins/images/825/large/bnb-icon2_2x.png', 'decimals' => 6],
        'XRP' => ['name' => 'XRP', 'symbol' => 'XRP', 'image' => 'https://assets.coingecko.com/coins/images/44/large/xrp-symbol-white-128.png', 'decimals' => 6],
        'MATIC' => ['name' => 'Polygon', 'symbol' => 'MATIC', 'image' => 'https://assets.coingecko.com/coins/images/4713/large/matic-token-icon.png', 'decimals' => 6],
    ];

    public function mount()
    {
        $this->loadCryptoRates();
    }

    public function openPaymentModal($planKey, $amount, $hashpower, $planName)
    {
        $this->planKey = $planKey;
        $this->planName = $planName;
        $this->hashpower = $hashpower;
        $this->amount = $amount;
        $this->paymentMethod = 'faucetpay';
        $this->selectedCrypto = 'TRX';
        $this->showModal = true;
        
        if (empty($this->cryptoRates)) {
            $this->loadCryptoRates();
        }
    }

    public function closeModal()
    {
        $this->reset(['paymentMethod', 'selectedCrypto', 'formattedCryptoAmount', 'currentRate', 'ratesError', 'loading']);
        $this->showModal = false;
    }

    public function loadCryptoRates()
    {
        $this->loading = true;
        $this->ratesError = null;

        try {
            $response = Http::withoutVerifying()->timeout(10)->get(route('api.crypto-rates'));
            
            if ($response->successful()) {
                $data = $response->json();
                
                if (($data['success'] ?? false) && !empty($data['rates'])) {
                    $this->cryptoRates = $data['rates'];
                    $this->supportedCurrencies = $data['supported_currencies'] ?? array_keys($this->cryptoRates);
                    $this->selectedCrypto = $this->supportedCurrencies[0] ?? 'TRX';
                } else {
                    // jangan matikan semua — tetap lanjut tapi tampilkan pesan
                    $this->ratesError = $data['message'] ?? 'Rates unavailable, showing cached data.';
                    if (empty($this->cryptoRates)) {
                        $this->cryptoRates = ['TRX' => 0.08, 'BTC' => 70000, 'ETH' => 3500];
                        $this->supportedCurrencies = array_keys($this->cryptoRates);
                    }
                }
            } else {
                $this->ratesError = 'Unable to fetch cryptocurrency rates';
            }
        } catch (\Exception $e) {
            $this->ratesError = 'Connection error. Please try again.';
            Log::error('Crypto rates loading failed: ' . $e->getMessage());
        } finally {
            $this->loading = false;
        }
    }

    public function getCryptoAmountProperty()
    {
        if (empty($this->cryptoRates) || !isset($this->cryptoRates[$this->selectedCrypto])) {
            return 0;
        }

        $trxRate = $this->cryptoRates['TRX'] ?? 0.08;
        $usdAmount = $this->amount * $trxRate;
        $cryptoRate = $this->cryptoRates[$this->selectedCrypto];
        
        return $usdAmount / $cryptoRate;
    }

    public function getFormattedCryptoAmountProperty()
    {
        $amount = $this->cryptoAmount;
        $decimals = $this->cryptoDatabase[$this->selectedCrypto]['decimals'] ?? 6;
        
        return number_format($amount, $decimals, '.', '');
    }

    public function getCurrentRateProperty()
    {
        if (empty($this->cryptoRates) || !isset($this->cryptoRates[$this->selectedCrypto])) {
            return 'Loading...';
        }

        $rate = $this->cryptoRates[$this->selectedCrypto];
        return "1 {$this->selectedCrypto} = $" . number_format($rate, 2);
    }

    public function confirmPurchase()
    {
        $this->validate([
            'hashpower' => 'required|integer|min:1',
            'amount' => 'required|numeric|min:0',
            'paymentMethod' => 'required|in:faucetpay,nowpayments',
            'selectedCrypto' => 'required_if:paymentMethod,nowpayments',
        ]);

        $this->emit('purchaseConfirmed', [
            'hashpower' => $this->hashpower,
            'payment_method' => $this->paymentMethod,
            'selected_crypto' => $this->paymentMethod === 'nowpayments' ? $this->selectedCrypto : null,
        ]);

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.payment-modal');
    }
}