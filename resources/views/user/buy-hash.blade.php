<x-layout_backend :user="$user">

    <div class="container">
        <div class="buy-hash-container">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <i class="fa fa-microchip"></i>
                    <span>Buy Hashpower</span>
                </div>
                <div class="page-subtitle">
                    Purchase mining plans to start earning rewards
                </div>
            </div>

            <!-- Mining Plans Grid -->
            <div class="plans-container">
                <div class="plans-header">
                    <h3>Available Mining Plans</h3>
                    <p>Choose a plan that fits your investment goals</p>
                </div>

                <div class="plans-grid">

                    <div class="plan-card tier-1" data-plan="starter">
                        <div class="tier-badge tier-success">
                            <i class="fa fa-rocket"></i>
                            Tier 1
                        </div>

                        <!-- Mining Particles Effect -->
                        <div class="mining-particles">
                            <div class="mining-particle" style="animation-delay: 0s; animation-duration: 3s;"></div>
                            <div class="mining-particle" style="animation-delay: 0.2s; animation-duration: 3s;"></div>
                            <div class="mining-particle" style="animation-delay: 0.4s; animation-duration: 3s;"></div>
                            <div class="mining-particle" style="animation-delay: 0.6s; animation-duration: 3s;"></div>
                            <div class="mining-particle" style="animation-delay: 0.8s; animation-duration: 3s;"></div>
                        </div>
                        <div class="plan-header">
                            <div class="plan-icon">
                                <img
                                    src="https://ucarecdn.com/d298d590-9ab6-41b3-bc68-81b510264a2e/starterplan.png"
                                    alt="Starter Plan"
                                    class="plan-image"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                />
                                <i class="fa fa-rocket"></i>
                            </div>
                            <div class="plan-title">Starter Tier</div>
                            <div class="plan-subtitle">Perfect for beginners</div>
                        </div>
                        <div class="plan-features">
                            <div class="feature" style="--feature-index: 0;">
                                <i class="fa fa-server"></i>
                                <span>Range: 1-499 GH/s</span>
                            </div>
                            <div class="feature" style="--feature-index: 1;">
                                <i class="fa fa-calendar-alt text-warning"></i>
                                <span>30 Days Duration</span>
                            </div>
                            <div class="feature roi-feature" style="--feature-index: 2;">
                                <i class="fa fa-chart-line text-success"></i>
                                <span>140.0% ROI</span>
                            </div>
                            <div class="feature" style="--feature-index: 3;">
                                <i class="fa fa-check"></i>
                                <span>Instant Activation</span>
                            </div>
                            <div class="feature" style="--feature-index: 4;">
                                <i class="fa fa-shield-alt text-success"></i>
                                <span>24/7 Mining Operation</span>
                            </div>
                            <div class="feature" style="--feature-index: 5;">
                                <i class="fa fa-chart-line text-primary"></i>
                                <span>Real-time Profit Tracking</span>
                            </div>
                        </div>

                        <div class="plan-customizer">
                            <div class="range-slider-container">
                                <label for="hashpower_starter" class="range-label"> Customize Hashpower: <span id="hashpower_value_starter">1</span> GH/s </label>
                                <input type="range" id="hashpower_starter" class="hashpower-range" min="1" max="499" step="1" value="1" />
                                <div class="range-labels">
                                    <span>1</span>
                                    <span>499</span>
                                </div>
                            </div>
                            <div class="custom-price-display">
                                <div class="price-info">
                                    <div class="info-label">Price:</div>
                                    <div class="info-value" id="custom_price_starter">0.500 TRX</div>
                                </div>
                                <div class="profit-info">
                                    <div class="info-label">Daily Profit:</div>
                                    <div class="info-value" id="custom_daily_profit_starter">0.023 TRX</div>
                                </div>
                                <div class="return-info">
                                    <div class="info-label">Return:</div>
                                    <div class="info-value" id="custom_total_return_starter">0.700 TRX</div>
                                </div>
                            </div>
                        </div>

                        <form action="https://tronx.site/buy-hash" method="POST" class="purchase-form">
                            <input type="hidden" name="hashpower" id="hidden_hashpower_starter" value="1" />
                            <input type="hidden" name="payment_method" id="hidden_payment_method_starter" value="faucetpay" />
                            <button type="button" class="btn btn-primary btn-block buy-plan-btn" data-plan="starter" data-price="0.5" onclick="openPaymentModal('starter', 0.5, 1)">
                                <i class="fa fa-shopping-cart"></i>
                                Buy Now
                            </button>
                        </form>

                    </div>

                    <div class="plan-card featured tier-2" data-plan="professional">
                        <div class="tier-badge tier-warning">
                            <i class="fa fa-crown"></i>
                            Tier 2
                        </div>

                        <!-- Mining Particles Effect -->
                        <div class="mining-particles">
                            <div class="mining-particle" style="animation-delay: 0s; animation-duration: 3s;"></div>
                            <div class="mining-particle" style="animation-delay: 0.2s; animation-duration: 3s;"></div>
                            <div class="mining-particle" style="animation-delay: 0.4s; animation-duration: 3s;"></div>
                            <div class="mining-particle" style="animation-delay: 0.6s; animation-duration: 3s;"></div>
                            <div class="mining-particle" style="animation-delay: 0.8s; animation-duration: 3s;"></div>
                        </div>
                        <div class="plan-header">
                            <div class="plan-icon">
                                <img
                                    src="https://ucarecdn.com/55d6a78d-c03d-4a5b-a119-bc65b763d3e6/professionalplan.png"
                                    alt="Professional Plan"
                                    class="plan-image"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                />
                                <i class="fa fa-crown" style="display: none;"></i>
                            </div>
                            <div class="plan-title">Professional Tier</div>
                            <div class="plan-subtitle">Best value for money</div>
                        </div>
                        <div class="plan-features">
                            <div class="feature" style="--feature-index: 0;">
                                <i class="fa fa-server"></i>
                                <span>Range: 500-1999 GH/s</span>
                            </div>
                            <div class="feature" style="--feature-index: 1;">
                                <i class="fa fa-calendar-alt text-warning"></i>
                                <span>30 Days Duration</span>
                            </div>
                            <div class="feature roi-feature" style="--feature-index: 2;">
                                <i class="fa fa-chart-line text-success"></i>
                                <span>154.0% ROI</span>
                            </div>
                            <div class="feature" style="--feature-index: 3;">
                                <i class="fa fa-check"></i>
                                <span>Priority Support</span>
                            </div>
                            <div class="feature" style="--feature-index: 4;">
                                <i class="fa fa-shield-alt text-success"></i>
                                <span>24/7 Mining Operation</span>
                            </div>
                            <div class="feature" style="--feature-index: 5;">
                                <i class="fa fa-chart-line text-primary"></i>
                                <span>Real-time Profit Tracking</span>
                            </div>
                        </div>

                        <div class="plan-customizer">
                            <div class="range-slider-container">
                                <label for="hashpower_professional" class="range-label"> Customize Hashpower: <span id="hashpower_value_professional">500</span> GH/s </label>
                                <input type="range" id="hashpower_professional" class="hashpower-range" min="500" max="1999" step="1" value="500" />
                                <div class="range-labels">
                                    <span>500</span>
                                    <span>1999</span>
                                </div>
                            </div>
                            <div class="custom-price-display">
                                <div class="price-info">
                                    <div class="info-label">Price:</div>
                                    <div class="info-value" id="custom_price_professional">250.000 TRX</div>
                                </div>
                                <div class="profit-info">
                                    <div class="info-label">Daily Profit:</div>
                                    <div class="info-value" id="custom_daily_profit_professional">12.835 TRX</div>
                                </div>
                                <div class="return-info">
                                    <div class="info-label">Return:</div>
                                    <div class="info-value" id="custom_total_return_professional">385.050 TRX</div>
                                </div>
                            </div>
                        </div>

                        <form action="https://tronx.site/buy-hash" method="POST" class="purchase-form">
                            <input type="hidden" name="hashpower" id="hidden_hashpower_professional" value="500" />
                            <input type="hidden" name="payment_method" id="hidden_payment_method_professional" value="faucetpay" />
                            <button type="button" class="btn btn-primary btn-block buy-plan-btn" data-plan="professional" data-price="250" onclick="openPaymentModal('professional', 250, 500)">
                                <i class="fa fa-shopping-cart"></i>
                                Buy Now
                            </button>
                        </form>
                    </div>

                    <div class="plan-card tier-3" data-plan="enterprise">
                        <div class="tier-badge tier-primary">
                            <i class="fa fa-gem"></i>
                            Tier 3
                        </div>

                        <!-- Mining Particles Effect -->
                        <div class="mining-particles">
                            <div class="mining-particle"></div>
                            <div class="mining-particle"></div>
                            <div class="mining-particle"></div>
                            <div class="mining-particle"></div>
                            <div class="mining-particle"></div>
                        </div>
                        <div class="plan-header">
                            <div class="plan-icon">
                                <img
                                    src="https://ucarecdn.com/895bf228-856c-480f-9d1a-149fd71bea71/enterpriseplan.png"
                                    alt="Enterprise Plan"
                                    class="plan-image"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                />
                                <i class="fa fa-gem" style="display: none;"></i>
                            </div>
                            <div class="plan-title">Enterprise Tier</div>
                            <div class="plan-subtitle">For serious miners</div>
                        </div>
                        <div class="plan-features">
                            <div class="feature" style="--feature-index: 0;">
                                <i class="fa fa-server"></i>
                                <span>Range: 2000-10000 GH/s</span>
                            </div>
                            <div class="feature" style="--feature-index: 1;">
                                <i class="fa fa-calendar-alt text-warning"></i>
                                <span>30 Days Duration</span>
                            </div>
                            <div class="feature roi-feature" style="--feature-index: 2;">
                                <i class="fa fa-chart-line text-success"></i>
                                <span>174.0% ROI</span>
                            </div>
                            <div class="feature" style="--feature-index: 3;">
                                <i class="fa fa-check"></i>
                                <span>VIP Support</span>
                            </div>
                            <div class="feature" style="--feature-index: 4;">
                                <i class="fa fa-shield-alt text-success"></i>
                                <span>24/7 Mining Operation</span>
                            </div>
                            <div class="feature" style="--feature-index: 5;">
                                <i class="fa fa-chart-line text-primary"></i>
                                <span>Real-time Profit Tracking</span>
                            </div>
                        </div>

                        <div class="plan-customizer">
                            <div class="range-slider-container">
                                <label for="hashpower_enterprise" class="range-label"> Customize Hashpower: <span id="hashpower_value_enterprise">2000</span> GH/s </label>
                                <input type="range" id="hashpower_enterprise" class="hashpower-range" min="2000" max="10000" step="1" value="2000" />
                                <div class="range-labels">
                                    <span>2000</span>
                                    <span>10000</span>
                                </div>
                            </div>
                            <div class="custom-price-display">
                                <div class="price-info">
                                    <div class="info-label">Price:</div>
                                    <div class="info-value" id="custom_price_enterprise">1000.000 TRX</div>
                                </div>
                                <div class="profit-info">
                                    <div class="info-label">Daily Profit:</div>
                                    <div class="info-value" id="custom_daily_profit_enterprise">58.000 TRX</div>
                                </div>
                                <div class="return-info">
                                    <div class="info-label">Return:</div>
                                    <div class="info-value" id="custom_total_return_enterprise">1740.000 TRX</div>
                                </div>
                            </div>
                        </div>

                        <form action="https://tronx.site/buy-hash" method="POST" class="purchase-form">
                            <input type="hidden" name="hashpower" id="hidden_hashpower_enterprise" value="2000" />
                            <input type="hidden" name="payment_method" id="hidden_payment_method_enterprise" value="faucetpay" />
                            <button type="button" class="btn btn-primary btn-block buy-plan-btn" data-plan="enterprise" data-price="1000" onclick="openPaymentModal('enterprise', 1000, 2000)">
                                <i class="fa fa-shopping-cart"></i>
                                Buy Now
                            </button>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Purchase History -->
            <div class="purchase-history">
                <div class="history-header">
                    <h3>Recent Purchases</h3>
                </div>
                <div class="history-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Plan</th>
                                <th>Hashpower</th>
                                <th>Cost</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-center">No purchases yet</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Payment Method Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">
                        <i class="fa fa-credit-card"></i>
                        Choose Payment Method
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="payment-method-selection">
                        <label class="form-label">
                            <i class="fa fa-credit-card"></i>
                            Select Payment Method
                        </label>
                        <div class="payment-method-options">

                            {{-- FaucetPay Option --}}
                            <div class="payment-method-option">
                                <input type="radio" id="modal_payment_faucetpay" name="modal_payment_method" value="faucetpay" class="payment-method-radio" checked />
                                <label for="modal_payment_faucetpay" class="payment-method-label">
                                    <div class="payment-method-icon">
                                        <i class="fa fa-coins"></i>
                                    </div>
                                    <div class="payment-method-info">
                                        <div class="payment-method-name">FaucetPay</div>
                                        <div class="payment-method-desc">Pay with any FaucetPay account</div>
                                    </div>
                                </label>
                            </div>

                            {{-- Onchain Payment Option --}}
                            <div class="payment-method-option" style="opacity: 1; cursor: pointer;">
                                <input type="radio" id="modal_payment_nowpayments" name="modal_payment_method" value="nowpayments" class="payment-method-radio" />
                                <label for="modal_payment_nowpayments" class="payment-method-label">
                                    <div class="payment-method-icon">
                                        <i class="fa fa-wallet"></i>
                                    </div>
                                    <div class="payment-method-info">
                                        <div class="payment-method-name">Direct Wallet</div>
                                        <div class="payment-method-desc">Pay with cryptocurrency</div>
                                    </div>
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- Purchase Summary for FaucetPay -->
                    <div class="purchase-summary mb-4" id="faucetpayPurchaseSummary">
                        <h6><i class="fa fa-shopping-cart"></i> Purchase Summary</h6>
                        <div class="summary-details">
                            <div class="detail-item">
                                <span>Plan:</span>
                                <span id="modalPlanNameFaucetpay">Starter Tier</span>
                            </div>
                            <div class="detail-item">
                                <span>Hashpower:</span>
                                <span id="modalHashpowerFaucetpay">1 GH/s</span>
                            </div>
                            <div class="detail-item">
                                <span>Amount:</span>
                                <span id="modalAmountFaucetpay">0.50000000 TRX</span>
                            </div>
                        </div>
                    </div>

                    <!-- Cryptocurrency Selection (shown when Direct Wallet is selected) -->
                    <div class="cryptocurrency-selection" id="cryptoSelection" style="display: none;">
                        <label class="form-label">
                            <i class="fa fa-coins"></i>
                            Select Cryptocurrency
                        </label>
                        <div class="crypto-grid" id="cryptoGrid" style="display: grid;">
                            <div class="crypto-option" data-crypto="TRX">
                                <input type="radio" id="crypto_trx" name="selected_crypto" value="TRX" class="crypto-radio" checked />
                                <label for="crypto_trx" class="crypto-label">
                                    <div class="crypto-icon">
                                        <img src="https://assets.coingecko.com/coins/images/1094/large/tron-logo.png" alt="TRON" class="crypto-image" style="opacity: 1;" />
                                    </div>
                                    <div class="crypto-info">
                                        <div class="crypto-name">TRON</div>
                                        <div class="crypto-symbol">TRX</div>
                                    </div>
                                    <div class="crypto-amount" id="trx_amount">0.500000</div>
                                </label>
                            </div>
                            <div class="crypto-option" data-crypto="BTC">
                                <input type="radio" id="crypto_btc" name="selected_crypto" value="BTC" class="crypto-radio" />
                                <label for="crypto_btc" class="crypto-label">
                                    <div class="crypto-icon">
                                        <img src="https://assets.coingecko.com/coins/images/1/large/bitcoin.png" alt="Bitcoin" class="crypto-image" style="opacity: 1;" />
                                    </div>
                                    <div class="crypto-info">
                                        <div class="crypto-name">Bitcoin</div>
                                        <div class="crypto-symbol">BTC</div>
                                    </div>
                                    <div class="crypto-amount" id="btc_amount">0.00000135</div>
                                </label>
                            </div>
                            <div class="crypto-option" data-crypto="ETH">
                                <input type="radio" id="crypto_eth" name="selected_crypto" value="ETH" class="crypto-radio" />
                                <label for="crypto_eth" class="crypto-label">
                                    <div class="crypto-icon">
                                        <img src="https://assets.coingecko.com/coins/images/279/large/ethereum.png" alt="Ethereum" class="crypto-image" style="opacity: 1;" />
                                    </div>
                                    <div class="crypto-info">
                                        <div class="crypto-name">Ethereum</div>
                                        <div class="crypto-symbol">ETH</div>
                                    </div>
                                    <div class="crypto-amount" id="eth_amount">0.00003994</div>
                                </label>
                            </div>
                            <div class="crypto-option" data-crypto="LTC">
                                <input type="radio" id="crypto_ltc" name="selected_crypto" value="LTC" class="crypto-radio" />
                                <label for="crypto_ltc" class="crypto-label">
                                    <div class="crypto-icon">
                                        <img src="https://assets.coingecko.com/coins/images/2/large/litecoin.png" alt="Litecoin" class="crypto-image" style="opacity: 1;" />
                                    </div>
                                    <div class="crypto-info">
                                        <div class="crypto-name">Litecoin</div>
                                        <div class="crypto-symbol">LTC</div>
                                    </div>
                                    <div class="crypto-amount" id="ltc_amount">0.001625</div>
                                </label>
                            </div>
                            <div class="crypto-option" data-crypto="DOGE">
                                <input type="radio" id="crypto_doge" name="selected_crypto" value="DOGE" class="crypto-radio" />
                                <label for="crypto_doge" class="crypto-label">
                                    <div class="crypto-icon">
                                        <img src="https://assets.coingecko.com/coins/images/5/large/dogecoin.png" alt="Dogecoin" class="crypto-image" style="opacity: 1;" />
                                    </div>
                                    <div class="crypto-info">
                                        <div class="crypto-name">Dogecoin</div>
                                        <div class="crypto-symbol">DOGE</div>
                                    </div>
                                    <div class="crypto-amount" id="doge_amount">0.862268</div>
                                </label>
                            </div>
                        </div>

                        <div class="crypto-rate-info">
                            <div class="rate-display">
                                <span class="rate-label">Current Rate:</span>
                                <span class="rate-value" id="currentRate">1 TRX = $0.28</span>
                            </div>
                        </div>

                        <div class="purchase-summary mb-4">
                            <h6><i class="fa fa-shopping-cart"></i> Purchase Summary</h6>
                            <div class="summary-details">
                                <div class="detail-item">
                                    <span>Plan:</span>
                                    <span id="modalPlanName">Starter Tier</span>
                                </div>
                                <div class="detail-item">
                                    <span>Hashpower:</span>
                                    <span id="modalHashpower">1 GH/s</span>
                                </div>
                                <div class="detail-item">
                                    <span>Amount:</span>
                                    <span id="modalAmount">0.50000000 TRX</span>
                                </div>
                                <div class="detail-item" id="cryptoAmountItem" style="display: flex;">
                                    <span>Pay with:</span>
                                    <span id="modalCryptoAmount">0.500000 TRX</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fa fa-times"></i>
                        Cancel
                    </button>
                    <button type="button" class="btn btn-primary" id="confirmPurchaseBtn" onclick="confirmPurchase()">
                        <i class="fa fa-check"></i>
                        Confirm Purchase
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dailyRate = 0.023340000000000;
            const exchangeRate = 1;
            const currencyCode = 'TRX';
            const hashpowerUnit = 'GH';
            const hashpowerPrice = 0.50000000;
            const defaultPeriod = 30;
            const purchaseMin = 1;
            const tierSystemEnabled = 'enabled' === 'enabled';

            // Global variables for modal
            let currentPlanKey = '';
            let currentHashpower = 0;
            let currentAmount = 0;
            let isCustomPlan = false;

            // Make these variables globally accessible
            window.currentPlanKey = currentPlanKey;
            window.currentHashpower = currentHashpower;
            window.currentAmount = currentAmount;
            window.isCustomPlan = isCustomPlan;

            // Enhanced Mining Animations
            function initMiningAnimations() {
                const planCards = document.querySelectorAll('.plan-card');
                
                planCards.forEach((card, index) => {
                    // Add staggered entrance animation
                    card.style.animationDelay = `${index * 0.2}s`;
                    
                    // Add mining working effect on hover
                    card.addEventListener('mouseenter', function() {
                        this.style.setProperty('--mining-intensity', '1');
                        this.querySelectorAll('.mining-particle').forEach((particle, pIndex) => {
                            particle.style.animationDelay = `${pIndex * 0.2}s`;
                            particle.style.animationDuration = '2s';
                        });
                    });
                    
                    card.addEventListener('mouseleave', function() {
                        this.style.setProperty('--mining-intensity', '0');
                        this.querySelectorAll('.mining-particle').forEach(particle => {
                            particle.style.animationDuration = '3s';
                        });
                    });
                });
            }

            // Initialize mining animations
            initMiningAnimations();

            // Plan configurations from server
            const plans = {"starter":{"name":"Starter Tier","subtitle":"Perfect for beginners","icon":"fa-rocket","hashpower":100,"hashpower_range":"1-499","duration":"30","daily_profit_rate":"0.02334","support_level":"Standard Support","features":["Instant Activation"],"tier_level":1,"tier_color":"success","roi_percentage":5,"price":50,"daily_profit":2.334,"total_profit":70.02,"calculated_roi":140.04},"professional":{"name":"Professional Tier","subtitle":"Best value for money","icon":"fa-crown","hashpower":1000,"hashpower_range":"500-1999","duration":"30","daily_profit_rate":"0.02567","support_level":"Priority Support","features":["Priority Support"],"featured":true,"tier_level":2,"tier_color":"warning","roi_percentage":7.5,"price":500,"daily_profit":25.669999999999998,"total_profit":770.0999999999999,"calculated_roi":154.01999999999998},"enterprise":{"name":"Enterprise Tier","subtitle":"For serious miners","icon":"fa-gem","hashpower":10000,"hashpower_range":"2000-10000","duration":"30","daily_profit_rate":"0.029","support_level":"VIP Support","features":["VIP Support"],"tier_level":3,"tier_color":"primary","roi_percentage":10,"price":5000,"daily_profit":290,"total_profit":8700,"calculated_roi":174}};

            // Tier configurations for client-side calculations
            const tierConfig = {
                enabled: tierSystemEnabled,
                tiers: [
                    {
                        min: 1,
                        max: 499,
                        rate: 0.02334,
                        name: 'Starter Tier',
                        level: 1
                    },
                    {
                        min: 500,
                        max: 1999,
                        rate: 0.02567,
                        name: 'Professional Tier',
                        level: 2
                    },
                    {
                        min: 2000,
                        max: 10000,
                        rate: 0.029,
                        name: 'Enterprise Tier',
                        level: 3
                    }
                ]
            };
            
            // Function to get tier-based daily profit rate
            function getTierDailyRate(hashpower) {
                if (!tierConfig.enabled) {
                    return dailyRate;
                }
                
                for (let tier of tierConfig.tiers) {
                    if (hashpower >= tier.min && hashpower <= tier.max) {
                        return tier.rate;
                    }
                }
                
                return dailyRate;
            }
            
            // Function to get tier info
            function getTierInfo(hashpower) {
                if (!tierConfig.enabled) {
                    return { name: 'Standard Plan', level: 0 };
                }
                
                for (let tier of tierConfig.tiers) {
                    if (hashpower >= tier.min && hashpower <= tier.max) {
                        return { name: tier.name, level: tier.level };
                    }
                }
                
                return { name: 'Standard Plan', level: 0 };
            }

            // Function to update plan calculations
            function updatePlanCalculations(planKey, hashpower) {
                const tierDailyRate = getTierDailyRate(hashpower);
                const planDuration = 30;
                
                const newPrice = hashpower * hashpowerPrice;
                const newDailyProfit = hashpower * tierDailyRate;
                const newTotalReturn = newDailyProfit * planDuration;
                
                // Update displays safely
                const priceEl = document.getElementById(`custom_price_${planKey}`);
                const profitEl = document.getElementById(`custom_daily_profit_${planKey}`);
                const returnEl = document.getElementById(`custom_total_return_${planKey}`);
                
                if (priceEl) priceEl.textContent = newPrice.toFixed(3) + ' TRX';
                if (profitEl) profitEl.textContent = newDailyProfit.toFixed(3) + ' TRX';
                if (returnEl) returnEl.textContent = newTotalReturn.toFixed(3) + ' TRX';
                
                // Update button data-price attribute
                const btn = document.querySelector(`[data-plan="${planKey}"]`);
                if (btn) {
                    btn.setAttribute('data-price', newPrice);
                }
            }

            // Range slider functionality for plan customization
            document.querySelectorAll('.hashpower-range').forEach(slider => {
                slider.addEventListener('input', function() {
                    const planKey = this.id.replace('hashpower_', '');
                    const hashpower = parseInt(this.value);
                    
                    const valueEl = document.getElementById(`hashpower_value_${planKey}`);
                    const hiddenEl = document.getElementById(`hidden_hashpower_${planKey}`);
                    
                    if (valueEl) valueEl.textContent = hashpower;
                    if (hiddenEl) hiddenEl.value = hashpower;
                    
                    updatePlanCalculations(planKey, hashpower);
                });
                
                // Initialize
                const planKey = slider.id.replace('hashpower_', '');
                const initialHashpower = parseInt(slider.value);
                
                const valueEl = document.getElementById(`hashpower_value_${planKey}`);
                const hiddenEl = document.getElementById(`hidden_hashpower_${planKey}`);
                
                if (valueEl) valueEl.textContent = initialHashpower;
                if (hiddenEl) hiddenEl.value = initialHashpower;
                
                updatePlanCalculations(planKey, initialHashpower);
            });

            // Initialize cryptocurrency functionality
            initializeCryptoSelection();
        });

        // Cryptocurrency functionality
        let cryptoRates = {};
        let selectedCrypto = 'TRX';

        // Comprehensive cryptocurrency database
        const cryptoDatabase = {
            'BTC': {
                name: 'Bitcoin',
                symbol: 'BTC',
                image: 'https://assets.coingecko.com/coins/images/1/large/bitcoin.png',
                coinGeckoId: 'bitcoin'
            },
            'ETH': {
                name: 'Ethereum',
                symbol: 'ETH',
                image: 'https://assets.coingecko.com/coins/images/279/large/ethereum.png',
                coinGeckoId: 'ethereum'
            },
            'USDT': {
                name: 'Tether',
                symbol: 'USDT',
                image: 'https://assets.coingecko.com/coins/images/325/large/Tether.png',
                coinGeckoId: 'tether'
            },
            'TRX': {
                name: 'TRON',
                symbol: 'TRX',
                image: 'https://assets.coingecko.com/coins/images/1094/large/tron-logo.png',
                coinGeckoId: 'tron'
            },
            'SOL': {
                name: 'Solana',
                symbol: 'SOL',
                image: 'https://assets.coingecko.com/coins/images/4128/large/solana.png',
                coinGeckoId: 'solana'
            },
            'LTC': {
                name: 'Litecoin',
                symbol: 'LTC',
                image: 'https://assets.coingecko.com/coins/images/2/large/litecoin.png',
                coinGeckoId: 'litecoin'
            },
            'DOGE': {
                name: 'Dogecoin',
                symbol: 'DOGE',
                image: 'https://assets.coingecko.com/coins/images/5/large/dogecoin.png',
                coinGeckoId: 'dogecoin'
            },
            'ADA': {
                name: 'Cardano',
                symbol: 'ADA',
                image: 'https://assets.coingecko.com/coins/images/975/large/cardano.png',
                coinGeckoId: 'cardano'
            },
            'BNB': {
                name: 'BNB',
                symbol: 'BNB',
                image: 'https://assets.coingecko.com/coins/images/825/large/bnb-icon2_2x.png',
                coinGeckoId: 'binancecoin'
            },
            'XRP': {
                name: 'XRP',
                symbol: 'XRP',
                image: 'https://assets.coingecko.com/coins/images/44/large/xrp-symbol-white-128.png',
                coinGeckoId: 'ripple'
            },
            'MATIC': {
                name: 'Polygon',
                symbol: 'MATIC',
                image: 'https://assets.coingecko.com/coins/images/4713/large/matic-token-icon.png',
                coinGeckoId: 'matic-network'
            },
            'AVAX': {
                name: 'Avalanche',
                symbol: 'AVAX',
                image: 'https://assets.coingecko.com/coins/images/12559/large/Avalanche_Circle_RedWhite_Trans.png',
                coinGeckoId: 'avalanche-2'
            },
            'DOT': {
                name: 'Polkadot',
                symbol: 'DOT',
                image: 'https://assets.coingecko.com/coins/images/12171/large/polkadot.png',
                coinGeckoId: 'polkadot'
            },
            'LINK': {
                name: 'Chainlink',
                symbol: 'LINK',
                image: 'https://assets.coingecko.com/coins/images/877/large/chainlink-new-logo.png',
                coinGeckoId: 'chainlink'
            },
            'UNI': {
                name: 'Uniswap',
                symbol: 'UNI',
                image: 'https://assets.coingecko.com/coins/images/12504/large/uniswap-uni.png',
                coinGeckoId: 'uniswap'
            },
            'ATOM': {
                name: 'Cosmos',
                symbol: 'ATOM',
                image: 'https://assets.coingecko.com/coins/images/1481/large/cosmos_hub.png',
                coinGeckoId: 'cosmos'
            },
            'FTM': {
                name: 'Fantom',
                symbol: 'FTM',
                image: 'https://assets.coingecko.com/coins/images/4001/large/Fantom_round.png',
                coinGeckoId: 'fantom'
            },
            'NEAR': {
                name: 'NEAR Protocol',
                symbol: 'NEAR',
                image: 'https://assets.coingecko.com/coins/images/10365/large/near.jpg',
                coinGeckoId: 'near'
            },
            'ALGO': {
                name: 'Algorand',
                symbol: 'ALGO',
                image: 'https://assets.coingecko.com/coins/images/4380/large/download.png',
                coinGeckoId: 'algorand'
            },
            'VET': {
                name: 'VeChain',
                symbol: 'VET',
                image: 'https://assets.coingecko.com/coins/images/116/large/VeChain-Logo-768x768.png',
                coinGeckoId: 'vechain'
            },
            'SHIB': {
                name: 'Shiba Inu',
                symbol: 'SHIB',
                image: 'https://assets.coingecko.com/coins/images/11939/large/shiba.png',
                coinGeckoId: 'shiba-inu'
            }
        };

        function initializeCryptoSelection() {
            // Handle payment method change
            document.querySelectorAll('input[name="modal_payment_method"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    const cryptoSelection = document.getElementById('cryptoSelection');
                    const cryptoAmountItem = document.getElementById('cryptoAmountItem');
                    const faucetpayPurchaseSummary = document.getElementById('faucetpayPurchaseSummary');
                    
                    if (this.value === 'nowpayments') {
                        if (cryptoSelection) cryptoSelection.style.display = 'block';
                        if (cryptoAmountItem) cryptoAmountItem.style.display = 'flex';
                        if (faucetpayPurchaseSummary) faucetpayPurchaseSummary.style.display = 'none';
                        
                        loadCryptoRates().then(() => {
                            updateCryptoAmounts();
                            updatePurchaseSummaryAmount();
                        });
                    } else {
                        if (cryptoSelection) cryptoSelection.style.display = 'none';
                        if (cryptoAmountItem) cryptoAmountItem.style.display = 'none';
                        if (faucetpayPurchaseSummary) faucetpayPurchaseSummary.style.display = 'block';
                        
                        updateFaucetpayPurchaseSummary();
                        
                        const amountElement = document.getElementById('modalAmount');
                        if (amountElement && window.currentAmount) {
                            amountElement.textContent = window.currentAmount.toFixed(8) + ' TRX';
                        }
                    }
                });
            });
            
            initializeCryptoEventListeners();
            
            setInterval(function() {
                console.log('Auto-refreshing crypto rates');
                loadCryptoRates();
            }, 600000);
            
            initializeCryptoImages();
        }

        function initializeCryptoImages() {
            const cryptoImages = document.querySelectorAll('.crypto-image');
            
            cryptoImages.forEach(img => {
                img.addEventListener('error', function() {
                    console.warn('Failed to load crypto image:', this.src);
                    this.style.display = 'none';
                    
                    const fallbackIcon = document.createElement('i');
                    fallbackIcon.className = 'fa fa-coins';
                    fallbackIcon.style.color = '#22c55e';
                    fallbackIcon.style.fontSize = '20px';
                    
                    this.parentNode.insertBefore(fallbackIcon, this.nextSibling);
                });
                
                img.addEventListener('load', function() {
                    this.style.opacity = '1';
                });
                
                img.style.opacity = '0.7';
            });
        }

        async function loadCryptoRates() {
            try {
                console.log('Loading cryptocurrency rates...');
                
                const response = await fetch('https://tronx.site/api/crypto-rates', {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });
                
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                
                const data = await response.json();
                
                if (data.success && data.rates) {
                    cryptoRates = data.rates;
                    
                    if (data.supported_currencies) {
                        updateSupportedCurrencies(data.supported_currencies);
                    }
                    
                    console.log('Crypto rates loaded:', cryptoRates);
                    
                    updateCryptoAmounts();
                    updateCurrentRate();
                    showCryptoSelection();
                    enablePurchaseButton();
                    
                    return true;
                    
                } else {
                    console.warn('No real-time rates available:', data.message);
                    hideCryptoSelection();
                    showRateError(data.message || 'Rates unavailable');
                    disablePurchaseButton();
                    return false;
                }
                
            } catch (error) {
                console.error('Failed to load crypto rates:', error);
                hideCryptoSelection();
                showRateError('Unable to fetch cryptocurrency rates');
                disablePurchaseButton();
                return false;
            }
        }

        function hideCryptoSelection() {
            const cryptoSection = document.getElementById('cryptoSelection');
            const cryptoGrid = document.getElementById('cryptoGrid');
            
            if (cryptoSection) cryptoSection.style.display = 'none';
            if (cryptoGrid) cryptoGrid.style.display = 'none';
        }

        function showRateError(message) {
            const currentRate = document.getElementById('currentRate');
            if (currentRate) {
                currentRate.textContent = 'Unavailable';
                currentRate.style.color = '#ff6b6b';
            }
            
            const cryptoSelection = document.getElementById('cryptoSelection');
            if (cryptoSelection) {
                cryptoSelection.innerHTML = `
                    <div class="alert alert-danger" style="margin: 10px 0; padding: 15px; border-radius: 8px; background: rgba(255, 107, 107, 0.1); border: 1px solid rgba(255, 107, 107, 0.3);">
                        <i class="fa fa-exclamation-triangle" style="color: #ff6b6b; margin-right: 8px;"></i>
                        <strong>Rates unavailable</strong><br>
                        <small style="color: #666;">${message}</small>
                    </div>
                `;
            }
        }

        function disablePurchaseButton() {
            const cryptoPaymentMethods = document.querySelectorAll('input[name="modal_payment_method"][value="nowpayments"]');
            cryptoPaymentMethods.forEach(radio => {
                radio.disabled = true;
                if (radio.parentElement) {
                    radio.parentElement.style.opacity = '0.5';
                    radio.parentElement.style.cursor = 'not-allowed';
                }
            });
        }

        function enablePurchaseButton() {
            const cryptoPaymentMethods = document.querySelectorAll('input[name="modal_payment_method"][value="nowpayments"]');
            cryptoPaymentMethods.forEach(radio => {
                radio.disabled = false;
                if (radio.parentElement) {
                    radio.parentElement.style.opacity = '1';
                    radio.parentElement.style.cursor = 'pointer';
                }
            });
        }

        function showCryptoSelection() {
            const cryptoSection = document.getElementById('cryptoSelection');
            const cryptoGrid = document.getElementById('cryptoGrid');
            
            if (cryptoSection) cryptoSection.style.display = 'block';
            if (cryptoGrid) cryptoGrid.style.display = 'grid';
        }

        function generateCryptoOptions(supportedCurrencies) {
            console.log('Generating crypto options:', supportedCurrencies);
            
            const cryptoGrid = document.getElementById('cryptoGrid');
            if (!cryptoGrid) return;
            
            cryptoGrid.innerHTML = '';
            
            supportedCurrencies.forEach((cryptoSymbol, index) => {
                const cryptoData = cryptoDatabase[cryptoSymbol];
                if (!cryptoData) {
                    console.warn('Crypto data not found:', cryptoSymbol);
                    return;
                }
                
                const cryptoOption = document.createElement('div');
                cryptoOption.className = 'crypto-option';
                cryptoOption.dataset.crypto = cryptoSymbol;
                
                cryptoOption.innerHTML = `
                    <input type="radio" id="crypto_${cryptoSymbol.toLowerCase()}" name="selected_crypto" value="${cryptoSymbol}" class="crypto-radio" ${index === 0 ? 'checked' : ''}>
                    <label for="crypto_${cryptoSymbol.toLowerCase()}" class="crypto-label">
                        <div class="crypto-icon">
                            <img src="${cryptoData.image}" alt="${cryptoData.name}" class="crypto-image">
                        </div>
                        <div class="crypto-info">
                            <div class="crypto-name">${cryptoData.name}</div>
                            <div class="crypto-symbol">${cryptoData.symbol}</div>
                        </div>
                        <div class="crypto-amount" id="${cryptoSymbol.toLowerCase()}_amount">-</div>
                    </label>
                `;
                
                cryptoGrid.appendChild(cryptoOption);
            });
            
            initializeCryptoEventListeners();
            initializeCryptoImages();
            
            if (supportedCurrencies.length > 0) {
                selectedCrypto = supportedCurrencies[0];
                updateCryptoAmounts();
                updateCurrentRate();
                updatePurchaseSummaryAmount();
            }
        }

        function initializeCryptoEventListeners() {
            document.querySelectorAll('input[name="selected_crypto"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    selectedCrypto = this.value;
                    updateCryptoAmounts();
                    updateCurrentRate();
                    updatePurchaseSummaryAmount();
                });
            });
        }
            
        function updateSupportedCurrencies(supportedCurrencies) {
            console.log('Updating supported currencies:', supportedCurrencies);
            generateCryptoOptions(supportedCurrencies);
            
            const cryptoSelection = document.getElementById('cryptoSelection');
            if (cryptoSelection) {
                cryptoSelection.style.display = supportedCurrencies.length > 0 ? 'block' : 'none';
            }
        }

        function updateCryptoAmounts() {
            if (!window.currentAmount || Object.keys(cryptoRates).length === 0) return;
            
            console.log('Updating crypto amounts for:', window.currentAmount);
            
            const trxRate = cryptoRates['TRX'] || 0.08;
            const usdAmount = window.currentAmount * trxRate;
            
            console.log('TRX to USD:', {
                trxAmount: window.currentAmount,
                trxRate: trxRate,
                usdAmount: usdAmount
            });
            
            Object.keys(cryptoRates).forEach(crypto => {
                const cryptoRate = cryptoRates[crypto];
                const cryptoAmount = usdAmount / cryptoRate;
                const element = document.getElementById(`${crypto.toLowerCase()}_amount`);
                
                if (element) {
                    if (crypto === 'BTC' || crypto === 'ETH') {
                        element.textContent = cryptoAmount.toFixed(8);
                    } else if (crypto === 'USDT') {
                        element.textContent = cryptoAmount.toFixed(2);
                    } else {
                        element.textContent = cryptoAmount.toFixed(6);
                    }
                }
            });
        }

        function updateCurrentRate() {
            if (!selectedCrypto || !cryptoRates[selectedCrypto]) return;
            
            const rate = cryptoRates[selectedCrypto];
            const rateElement = document.getElementById('currentRate');
            
            if (rateElement) {
                rateElement.textContent = `1 ${selectedCrypto} = ${rate.toLocaleString()}`;
            }
        }

        function updateFaucetpayPurchaseSummary() {
            const planNameEl = document.getElementById('modalPlanName');
            const hashpowerEl = document.getElementById('modalHashpower');
            const amountEl = document.getElementById('modalAmount');
            
            const planNameFPEl = document.getElementById('modalPlanNameFaucetpay');
            const hashpowerFPEl = document.getElementById('modalHashpowerFaucetpay');
            const amountFPEl = document.getElementById('modalAmountFaucetpay');
            
            if (planNameEl && planNameFPEl) planNameFPEl.textContent = planNameEl.textContent;
            if (hashpowerEl && hashpowerFPEl) hashpowerFPEl.textContent = hashpowerEl.textContent;
            if (amountEl && amountFPEl) amountFPEl.textContent = amountEl.textContent;
        }

        function updatePurchaseSummaryAmount() {
            const selectedPaymentMethod = document.querySelector('input[name="modal_payment_method"]:checked');
            if (!selectedPaymentMethod || selectedPaymentMethod.value !== 'nowpayments') return;
            
            const selectedCryptoEl = document.querySelector('input[name="selected_crypto"]:checked');
            if (!selectedCryptoEl) return;
            
            if (!cryptoRates || Object.keys(cryptoRates).length === 0) {
                const cryptoAmountElement = document.getElementById('modalCryptoAmount');
                if (cryptoAmountElement) cryptoAmountElement.textContent = 'Loading...';
                return;
            }
            
            if (!cryptoRates[selectedCryptoEl.value]) return;
            
            const trxRate = cryptoRates['TRX'] || 0.08;
            const usdAmount = window.currentAmount * trxRate;
            
            const cryptoRate = cryptoRates[selectedCryptoEl.value];
            const cryptoAmount = usdAmount / cryptoRate;
            
            let formattedAmount;
            if (selectedCryptoEl.value === 'BTC' || selectedCryptoEl.value === 'ETH') {
                formattedAmount = cryptoAmount.toFixed(8);
            } else if (selectedCryptoEl.value === 'USDT') {
                formattedAmount = cryptoAmount.toFixed(2);
            } else {
                formattedAmount = cryptoAmount.toFixed(6);
            }
            
            const amountElement = document.getElementById('modalAmount');
            if (amountElement && window.currentAmount) {
                amountElement.textContent = window.currentAmount.toFixed(8) + ' TRX';
            }
            
            const cryptoAmountElement = document.getElementById('modalCryptoAmount');
            if (cryptoAmountElement) {
                cryptoAmountElement.textContent = `${formattedAmount} ${selectedCryptoEl.value}`;
            }
        }

        function openPaymentModal(planKey, amount, hashpower) {
            window.currentPlanKey = planKey;
            window.isCustomPlan = false;
            
            const sliderEl = document.getElementById(`hashpower_${planKey}`);
            const currentHashpowerValue = sliderEl ? parseInt(sliderEl.value) : hashpower;
            const hashpowerPrice = 0.50000000;
            const calculatedAmount = currentHashpowerValue * hashpowerPrice;
            
            window.currentAmount = calculatedAmount;
            window.currentHashpower = currentHashpowerValue;
            
            console.log('Opening modal:', {
                planKey: planKey,
                hashpower: currentHashpowerValue,
                amount: calculatedAmount
            });
            
            const planCard = document.querySelector(`[data-plan="${planKey}"]`);
            const planName = planCard ? planCard.closest('.plan-card').querySelector('.plan-title').textContent : 'Plan';
            
            const planNameEl = document.getElementById('modalPlanName');
            const hashpowerEl = document.getElementById('modalHashpower');
            const amountEl = document.getElementById('modalAmount');
            
            if (planNameEl) planNameEl.textContent = planName;
            if (hashpowerEl) hashpowerEl.textContent = currentHashpowerValue + ' GH/s';
            if (amountEl) amountEl.textContent = calculatedAmount.toFixed(8) + ' TRX';
            
            const faucetpayRadio = document.getElementById('modal_payment_faucetpay');
            if (faucetpayRadio) faucetpayRadio.checked = true;
            
            const cryptoSelection = document.getElementById('cryptoSelection');
            const cryptoAmountItem = document.getElementById('cryptoAmountItem');
            const faucetpayPurchaseSummary = document.getElementById('faucetpayPurchaseSummary');
            
            if (cryptoSelection) cryptoSelection.style.display = 'none';
            if (cryptoAmountItem) cryptoAmountItem.style.display = 'none';
            if (faucetpayPurchaseSummary) faucetpayPurchaseSummary.style.display = 'block';
            
            updateFaucetpayPurchaseSummary();
            
            const modal = $('#paymentModal');
            if (modal && modal.modal) {
                modal.modal('show');
            }
            
            if (Object.keys(cryptoRates).length > 0) {
                updateCryptoAmounts();
                updatePurchaseSummaryAmount();
            }
        }

        function confirmPurchase() {
            const selectedPaymentMethodEl = document.querySelector('input[name="modal_payment_method"]:checked');
            const selectedCryptoEl = document.querySelector('input[name="selected_crypto"]:checked');
            
            const selectedPaymentMethod = selectedPaymentMethodEl ? selectedPaymentMethodEl.value : 'faucetpay';
            const selectedCryptoValue = selectedCryptoEl ? selectedCryptoEl.value : 'TRX';
            
            console.log('Confirm Purchase:', {
                paymentMethod: selectedPaymentMethod,
                crypto: selectedCryptoValue,
                planKey: window.currentPlanKey,
                hashpower: window.currentHashpower,
                amount: window.currentAmount
            });
            
            const modal = $('#paymentModal');
            if (modal && modal.modal) {
                modal.modal('hide');
            }
            
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = 'https://tronx.site/buy-hash';
            
            const csrfToken = document.querySelector('input[name="_token"]');
            if (csrfToken) {
                const csrf = document.createElement('input');
                csrf.type = 'hidden';
                csrf.name = '_token';
                csrf.value = csrfToken.value;
                form.appendChild(csrf);
            }
            
            const hashpowerInput = document.createElement('input');
            hashpowerInput.type = 'hidden';
            hashpowerInput.name = 'hashpower';
            hashpowerInput.value = window.currentHashpower;
            form.appendChild(hashpowerInput);
            
            const paymentMethodInput = document.createElement('input');
            paymentMethodInput.type = 'hidden';
            paymentMethodInput.name = 'payment_method';
            paymentMethodInput.value = selectedPaymentMethod;
            form.appendChild(paymentMethodInput);
            
            if (selectedPaymentMethod === 'nowpayments') {
                const cryptoInput = document.createElement('input');
                cryptoInput.type = 'hidden';
                cryptoInput.name = 'selected_crypto';
                cryptoInput.value = selectedCryptoValue;
                form.appendChild(cryptoInput);
            }
            
            document.body.appendChild(form);
            console.log('Submitting form:', {
                hashpower: window.currentHashpower,
                payment_method: selectedPaymentMethod,
                selected_crypto: selectedCryptoValue
            });
            form.submit();
        }
    </script>

</x-layout_backend>