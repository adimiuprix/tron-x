<div>
    <!-- TRON Wallet Form -->
    <div class="login-form" id="hero-wallet-form">
        <div class="form-input-group">
            <div class="input-wrapper">
                <span class="input-prefix">T</span>
                <input 
                    type="text" 
                    wire:model="wallet"
                    placeholder="TRON wallet address"
                    class="login-input"
                    style="font-family: monospace; font-size: 12px;"
                    required
                />
            </div>
            <button 
                type="button"
                class="login-btn"
                wire:click="submit"
                wire:loading.attr="disabled"
                wire:loading.remove
            >
                <i class="fas fa-rocket"></i>
                <span>Start</span>
            </button>
            <button 
                type="button"
                class="login-btn processing"
                wire:loading
                disabled
                style="display: none;"
            >
                <i class="fas fa-spinner fa-spin"></i>
            </button>
        </div>
    </div>
    @error('wallet')
    <!-- Error/Success Messages -->
    <div id="hero-message" class="hero-message">
        <i class="fas fa-exclamation-triangle"></i>
        <span id="hero-message-text">{{ $message }}</span>
    </div>
    @enderror
</div>
