<x-layout_backend :user="$user">
<style>
    /* Payment Card Header */
    .payment-card-header {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }

    .crypto-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #22c55e, #16a34a);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        box-shadow: 0 4px 15px rgba(34,197,94,0.3);
    }

    .crypto-icon i {
        font-size: 24px;
        color: white;
    }

    .payment-title h3 {
        font-size: 24px;
        font-weight: 700;
        color: #22c55e;
        margin: 0 0 5px 0;
    }

    .payment-title p {
        font-size: 14px;
        color: rgba(255,255,255,0.6);
        margin: 0;
        font-family: monospace;
    }

    /* Payment Grid Layout */
    .payment-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
        margin-bottom: 30px;
    }

    /* Payment Sections */
    .payment-section {
        margin-bottom: 0;
    }

    .section-label {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
        font-weight: 600;
        color: rgba(255,255,255,0.9);
        font-size: 14px;
    }

    .section-label i {
        margin-right: 8px;
        color: #22c55e;
        width: 16px;
    }

    /* Amount Display */
    .amount-display {
        background: rgba(34,197,94,0.1);
        border: 2px solid rgba(34,197,94,0.3);
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }

    .amount-value {
        font-size: 18px;
        font-weight: 600;
        color: #22c55e;
        font-family: monospace;
    }

    .amount-currency {
        font-size: 14px;
        font-weight: 500;
        color: rgba(255,255,255,0.8);
        background: rgba(34,197,94,0.2);
        padding: 6px 12px;
        border-radius: 6px;
    }

    /* Address Container */
    .address-container {
        background: rgba(0,0,0,0.2);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 12px;
        padding: 15px;
    }

    .address-input {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .address-input input {
        flex: 1;
        background: transparent;
        border: none;
        color: rgba(255,255,255,0.9);
        font-family: monospace;
        font-size: 14px;
        padding: 10px;
        outline: none;
        word-break: break-all;
    }

    .copy-btn {
        background: rgba(34,197,94,0.2);
        border: 1px solid rgba(34,197,94,0.3);
        color: #22c55e;
        padding: 10px 15px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        min-width: 45px;
    }

    .copy-btn:hover {
        background: rgba(34,197,94,0.3);
        transform: translateY(-2px);
    }

    .copy-btn.copied {
        background: #22c55e;
        color: white;
    }

    /* QR Code */
    .qr-container {
        text-align: center;
    }

    .qr-code {
        background: white;
        padding: 20px;
        border-radius: 12px;
        display: inline-block;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .qr-code img {
        max-width: 200px;
        height: auto;
    }

    .qr-text {
        margin-top: 15px;
        color: rgba(255,255,255,0.7);
        font-size: 14px;
    }

    /* QR Loading */
    .qr-loading {
        text-align: center;
        padding: 40px;
        background: rgba(0,0,0,0.2);
        border-radius: 12px;
        border: 1px solid rgba(255,255,255,0.1);
    }

    .loading-spinner {
        font-size: 32px;
        color: #22c55e;
        margin-bottom: 15px;
    }

    .qr-loading p {
        color: rgba(255,255,255,0.7);
        margin-bottom: 20px;
    }

    .refresh-btn {
        background: rgba(34,197,94,0.2);
        border: 1px solid rgba(34,197,94,0.3);
        color: #22c55e;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .refresh-btn:hover {
        background: rgba(34,197,94,0.3);
        transform: translateY(-2px);
    }

    /* Status Info */
    .status-info {
        background: rgba(0,0,0,0.2);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 12px;
        padding: 20px;
    }

    .status-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        color: rgba(255,255,255,0.8);
    }

    .status-item:last-child {
        margin-bottom: 0;
    }

    .status-item i {
        margin-right: 12px;
        color: #22c55e;
        width: 16px;
    }
    /* Payment Notice */
    .payment-notice {
        background: rgba(251,191,36,0.1);
        border: 1px solid rgba(251,191,36,0.3);
        border-radius: 12px;
        padding: 20px;
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-top: 25px;
    }

    .notice-icon {
        color: #f59e0b;
        font-size: 20px;
        margin-top: 2px;
    }

    .notice-content h4 {
        color: #f59e0b;
        font-size: 16px;
        font-weight: 600;
        margin: 0 0 8px 0;
    }

    .notice-content p {
        color: rgba(255,255,255,0.8);
        margin: 0;
        font-size: 14px;
        line-height: 1.5;
    }

    /* Payment Progress */
    .payment-progress {
        background: rgba(0,0,0,0.2);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 12px;
        padding: 25px;
    }

    .progress-steps {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        position: relative;
    }

    .step:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 20px;
        right: -50%;
        width: 100%;
        height: 2px;
        background: rgba(255,255,255,0.2);
        z-index: 1;
    }

    .step.active:not(:last-child)::after {
        background: linear-gradient(90deg, #22c55e, rgba(34,197,94,0.3));
    }

    .step-icon {
        width: 40px;
        height: 40px;
        background: rgba(255,255,255,0.1);
        border: 2px solid rgba(255,255,255,0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        transition: all 0.3s ease;
        z-index: 2;
        position: relative;
    }

    .step.active .step-icon {
        background: rgba(34,197,94,0.2);
        border-color: #22c55e;
        color: #22c55e;
    }

    .step-label {
        font-size: 12px;
        color: rgba(255,255,255,0.6);
        text-align: center;
        font-weight: 500;
    }

    .step.active .step-label {
        color: #22c55e;
        font-weight: 600;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .success-container,
        .payment-container {
            padding: 15px;
        }
        
        .success-header {
            padding: 20px;
        }
        
        .success-icon {
            font-size: 48px;
        }
        
        .success-title h2 {
            font-size: 24px;
        }
        
        .success-title p {
            font-size: 16px;
        }
        
        .success-card {
            padding: 20px;
        }
        
        .success-card-header {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }
        
        .success-card-header .crypto-icon {
            margin-right: 0;
        }
        
        /* Mobile: Stack success grid items vertically */
        .success-grid {
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .success-section {
            margin-bottom: 0;
        }
        
        .success-amount {
            flex-direction: column;
            gap: 10px;
        }
        
        .success-amount .amount-value {
            font-size: 20px;
        }
        
        .success-amount .amount-currency {
            font-size: 16px;
        }
        
        .success-actions {
            flex-direction: column;
            gap: 10px;
        }
        
        .success-progress .progress-steps {
            flex-direction: column;
            gap: 20px;
        }
        
        .payment-card {
            padding: 20px;
        }
        
        .payment-card-header {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }
        
        .crypto-icon {
            margin-right: 0;
        }
        
        /* Mobile: Stack grid items vertically */
        .payment-grid {
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .payment-section {
            margin-bottom: 0;
        }
        
        .amount-display {
            flex-direction: column;
            gap: 10px;
        }
        
        .amount-value {
            font-size: 16px;
        }
        
        .amount-currency {
            font-size: 12px;
        }
        
        .address-input {
            flex-direction: column;
            gap: 10px;
        }
        
        .address-input input {
            text-align: center;
            font-size: 12px;
        }
        
        .progress-steps {
            flex-direction: column;
            gap: 20px;
        }
        
        .step:not(:last-child)::after {
            display: none;
        }
        
        .payment-notice {
            flex-direction: column;
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .page-title {
            font-size: 22px;
        }
        
        .payment-title h3 {
            font-size: 20px;
        }
        
        .amount-value {
            font-size: 20px;
        }
        
        .qr-code {
            padding: 15px;
        }
        
        .qr-code img {
            max-width: 150px;
        }
    }
    </style>
    <div class="container" style="margin-top: 24px; margin-bottom: 24px;">
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="calc-card">
                    <div class="calc-header">
                        <h3 class="calc-title">Confirm Purchase</h3>
                    </div>
                    <div class="calc-body">
                        <p class="muted">You're just one step away from increasing your mining power.</p>
                        <!-- Regular Payment Page -->
                        <div class="payment-container">
                            <!-- Page Header -->
                            <div class="page-header">
                                <div class="page-title">
                                    <i class="fa fa-wallet"></i>
                                    <span>Payment Invoice</span>
                                </div>
                                <div class="page-subtitle">
                                    Complete your cryptocurrency payment to activate mining
                                </div>
                            </div>

                            <!-- Payment Card -->
                            <div class="payment-card">
                                <div class="payment-card-header">
                                    <div class="crypto-icon">
                                        <i class="fa-coins"></i>
                                    </div>
                                    <div class="payment-title">
                                        <h3>TRX Payment</h3>
                                        <p>Invoice #05O1TlIaL8NSSVJM</p>
                                    </div>
                                </div>

                                <div class="payment-card-body">
                                    <!-- Payment Grid: Amount and Address -->
                                    <div class="payment-grid">
                                        <!-- Amount Section -->
                                        <div class="payment-section">
                                            <div class="section-label">
                                                <i class="fa fa-dollar-sign"></i>
                                                <span>Amount to Pay</span>
                                            </div>
                                            <div class="amount-display">
                                                <div class="amount-value">31.500000000000000</div>
                                                <div class="amount-currency">TRX</div>
                                            </div>
                                        </div>

                                        <!-- Address Section -->
                                        <div class="payment-section">
                                            <div class="section-label">
                                                <i class="fa fa-map-marker-alt"></i>
                                                <span>Payment Address</span>
                                            </div>
                                            <div class="address-container">
                                                <div class="address-input">
                                                    <input type="text" id="paymentAddress" value="TBxSn6tKPHGxzpUoejmPdBptzVMm9cQy1t" readonly="" />
                                                    <button class="copy-btn" onclick="copyAddress()" title="Copy Address">
                                                        <i class="fa fa-copy"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- QR Code Section -->
                                    <div class="payment-section">
                                        <div class="section-label">
                                            <i class="fa fa-qrcode"></i>
                                            <span>QR Code</span>
                                        </div>
                                        <div class="qr-container">
                                            <div class="qr-code">
                                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&amp;data=trx%3ATBxSn6tKPHGxzpUoejmPdBptzVMm9cQy1t%3Famount%3D31.50000000" alt="Payment QR Code" />
                                            </div>
                                            <p class="qr-text">Scan with your wallet app</p>
                                        </div>
                                    </div>

                                    <!-- Status Section -->
                                    <div class="payment-section">
                                        <div class="section-label">
                                            <i class="fa fa-info-circle"></i>
                                            <span>Payment Status</span>
                                        </div>
                                        <div class="status-info">
                                            <div class="status-item">
                                                <i class="fa fa-spinner fa-spin"></i>
                                                <span>Awaiting blockchain confirmation</span>
                                            </div>
                                            <div class="status-item">
                                                <i class="fa fa-shield-alt"></i>
                                                <span>Automatic processing upon confirmation</span>
                                            </div>
                                            <div class="status-item">
                                                <i class="fa fa-info-circle"></i>
                                                <span>Confirmation time: 1-60 minutes depending on network</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Important Notice -->
                                <div class="payment-notice">
                                    <div class="notice-icon">
                                        <i class="fa fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="notice-content">
                                        <h4>Payment Instructions</h4>
                                        <p>Please send exactly <strong>31.500000000000000 TRX</strong> to the payment address above. Sending any other amount may result in delayed or failed processing.</p>
                                    </div>
                                </div>
                            </div>


                            <!-- Payment Progress -->
                            <div class="payment-progress">
                                <div class="progress-steps">
                                    <div class="step active">
                                        <div class="step-icon">
                                            <i class="fa fa-wallet"></i>
                                        </div>
                                        <div class="step-label">Payment</div>
                                    </div>
                                    <div class="step">
                                        <div class="step-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="step-label">Confirmation</div>
                                    </div>
                                    <div class="step">
                                        <div class="step-icon">
                                            <i class="fa fa-microchip"></i>
                                        </div>
                                        <div class="step-label">Mining Active</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calc-body" style="padding-top: 0;">
                        <p class="muted">If you've already sent the payment, please wait a few minutes while our system detects it automatically. This can take from <strong>1 minute to 1 hour</strong> depending on network confirmations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout_backend>