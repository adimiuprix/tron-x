<div>
    <!-- Payment Method Modal -->
    <div class="modal fade {{ $showModal ? 'show' : '' }}" 
         id="paymentModal" 
         tabindex="-1" 
         role="dialog" 
         aria-labelledby="paymentModalLabel" 
         aria-modal="true"
         style="display: {{ $showModal ? 'block' : 'none' }};"
    >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">
                        <i class="fa fa-credit-card"></i>
                        Choose Payment Method
                    </h5>
                    <button type="button" class="close" wire:click="closeModal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- Cryptocurrency Selection -->
                    <div class="cryptocurrency-selection" id="cryptoSelection">
                        <label class="form-label">
                            <i class="fa fa-coins"></i>
                            Select Cryptocurrency
                        </label>
                        <div class="crypto-grid" id="cryptoGrid">
                            @foreach($supportedCurrencies as $crypto)
                            <div class="crypto-option" data-crypto="{{ $crypto }}">
                                <input type="radio" id="crypto_{{ strtolower($crypto) }}" 
                                        wire:model="selectedCrypto" 
                                        value="{{ $crypto }}" 
                                        class="crypto-radio" />
                                <label for="crypto_{{ strtolower($crypto) }}" class="crypto-label">
                                    <div class="crypto-icon">
                                        <img src="" 
                                                alt="" 
                                                class="crypto-image" />
                                        <i class="fa fa-coins" style="display: none; color: #22c55e; font-size: 20px;"></i>
                                    </div>
                                    <div class="crypto-info">
                                        <div class="crypto-name">...</div>
                                        <div class="crypto-symbol">...</div>
                                    </div>
                                    <div class="crypto-amount">...</div>
                                </label>
                            </div>
                            @endforeach
                        </div>

                        <div class="crypto-rate-info">
                            <div class="rate-display">
                                <span class="rate-label">Current Rate:</span>
                                <span class="rate-value">...</span>
                            </div>
                        </div>

                        <div class="purchase-summary mb-4">
                            <h6><i class="fa fa-shopping-cart"></i> Purchase Summary</h6>
                            <div class="summary-details">
                                <div class="detail-item">
                                    <span>Plan:</span>
                                    <span>{{ $planName }}</span>
                                </div>
                                <div class="detail-item">
                                    <span>Hashpower:</span>
                                    <span>{{ $hashpower }} GH/s</span>
                                </div>
                                <div class="detail-item">
                                    <span>Amount:</span>
                                    <span>{{ number_format($amount, 8) }} TRX</span>
                                </div>
                                <div class="detail-item">
                                    <span>Pay with:</span>
                                    <span>...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal">
                        <i class="fa fa-times"></i>
                        Cancel
                    </button>
                    <button type="button" 
                            class="btn btn-primary" 
                            id="confirmPurchaseBtn" 
                            wire:click="confirmPurchase"
                            {{ ($paymentMethod === 'nowpayments' && ($loading || $ratesError)) ? 'disabled' : '' }}>
                        <i class="fa fa-check"></i>
                        Confirm Purchase
                    </button>
                </div>

            </div>
        </div>
    </div>

    @if($showModal)
        <div class="modal-backdrop fade show"></div>
    @endif
</div>