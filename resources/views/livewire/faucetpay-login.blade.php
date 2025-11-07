<div>
    <!-- FaucetPay Email Form -->
    <div class="login-form" id="hero-faucetpay-form">
        <div class="form-input-group">
            <div class="input-wrapper">
                <span class="input-prefix">@</span>
                <input 
                    type="email" 
                    wire:model="email" 
                    placeholder="Enter FaucetPay email" 
                    class="login-input"
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
                style="display: none;"
                wire:loading
                disabled
            >
                <i class="fas fa-spinner fa-spin"></i>
            </button>
        </div>
    </div>
</div>
