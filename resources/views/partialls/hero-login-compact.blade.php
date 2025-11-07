{{-- Versi 1 menggunakan dua method login: Faucetpay dan Wallet --}}
{{-- <div class="hero-login-compact" x-data="{ method: 'faucetpay' }" x-transition x-cloak>

    <!-- Tabs -->
    <div class="login-method-tabs">
        <button 
            type="button"
            class="method-tab"
            :class="method === 'faucetpay' && 'active'"
            @click="method = 'faucetpay'"
        >
            <i class="fas fa-envelope"></i>
            <span>Email</span>
        </button>

        <button 
            type="button"
            class="method-tab"
            :class="method === 'wallet' && 'active'"
            @click="method = 'wallet'"
        >
            <i class="fas fa-wallet"></i>
            <span>Wallet</span>
        </button>
    </div>

    <!-- Forms -->
    <div x-show="method === 'faucetpay'" x-transition>
        <livewire:faucetpay-login />
    </div>

    <div x-show="method === 'wallet'" x-transition>
        <livewire:wallet-login />
    </div>

</div> --}}

{{-- Versi 2 hanya satu method --}}
<div class="hero-login-compact">

    <!-- Forms -->
    <livewire:wallet-login />

</div>
