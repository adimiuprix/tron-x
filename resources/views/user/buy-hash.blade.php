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
                                />
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

                        <form action="" method="post" class="purchase-form">
                            <input type="hidden" name="hashpower" id="hidden_hashpower_starter" value="" />
                            <button type="button" class="btn btn-primary btn-block buy-plan-btn" data-plan="starter" data-price="0.5" data-tier="1">
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
                                />
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

                        <form action="" method="POST" class="purchase-form">
                            <input type="hidden" name="hashpower" id="hidden_hashpower_professional" value="" />
                            <button type="button" class="btn btn-primary btn-block buy-plan-btn" data-plan="professional" data-price="250" data-tier="2">
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
                                />
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

                        <form action="" method="POST" class="purchase-form">
                            <input type="hidden" name="hashpower" id="hidden_hashpower_enterprise" value="" />
                            <button type="button" class="btn btn-primary btn-block buy-plan-btn" data-plan="enterprise" data-price="1000" data-tier="3">
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
                        <i class="fa fa-wallet"></i>
                        Choose Cryptocurrency
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <!-- Loading State -->
                    <div id="loadingState" class="text-center py-4" style="display: none;">
                        <i class="fa fa-spinner fa-spin fa-3x mb-3"></i>
                        <p>Loading cryptocurrency rates...</p>
                    </div>

                    <!-- Error State -->
                    <div id="errorState" class="alert alert-danger" style="display: none;">
                        <i class="fa fa-exclamation-triangle"></i>
                        <span id="errorMessage">Unable to load rates</span>
                    </div>
                    
                    <!-- Cryptocurrency Selection -->
                    <div class="cryptocurrency-selection" id="cryptoSelection">
                        <label class="form-label">
                            <i class="fa fa-coins"></i>
                            Select Cryptocurrency
                        </label>
                        <div class="crypto-grid" id="cryptoGrid" style="display: grid;">
                            <!-- Crypto options will be generated here -->
                        </div>

                        <div class="crypto-rate-info">
                            <div class="rate-display">
                                <span class="rate-label">Current Rate:</span>
                                <span class="rate-value" id="currentRate">Loading...</span>
                            </div>
                            <small class="text-muted d-block mt-2">
                                <i class="fa fa-clock"></i>
                                Last updated: <span id="lastUpdated">-</span>
                            </small>
                        </div>

                        <div class="purchase-summary mb-4">
                            <h6><i class="fa fa-shopping-cart"></i> Purchase Summary</h6>
                            <div class="summary-details">
                                <div class="detail-item">
                                    <span>Plan:</span>
                                    <span id="modalPlanName">Starter Tier</span>
                                </div>
                                <div class="detail-item">
                                    <span>Tier:</span>
                                    <span id="modalTierLevel">Tier 1</span>
                                </div>
                                <div class="detail-item">
                                    <span>Hashpower:</span>
                                    <span id="modalHashpower">1 GH/s</span>
                                </div>
                                <div class="detail-item">
                                    <span>Duration:</span>
                                    <span id="modalDuration">30 Days</span>
                                </div>
                                <div class="detail-item">
                                    <span>Daily Profit:</span>
                                    <span id="modalDailyProfit">0.023 TRX</span>
                                </div>
                                <div class="detail-item">
                                    <span>Total Return:</span>
                                    <span id="modalTotalReturn">0.700 TRX</span>
                                </div>
                                <div class="detail-item">
                                    <span>ROI:</span>
                                    <span id="modalROI">140.0%</span>
                                </div>
                                <hr>
                                <div class="detail-item font-weight-bold">
                                    <span>Price (TRX):</span>
                                    <span id="modalAmount">0.50000000 TRX</span>
                                </div>
                                <div class="detail-item font-weight-bold" id="cryptoAmountItem">
                                    <span>Pay with:</span>
                                    <span id="modalCryptoAmount">Loading...</span>
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
                    <button type="button" class="btn btn-primary" id="confirmPurchaseBtn" disabled>
                        <i class="fa fa-check"></i>
                        <span id="confirmBtnText">Confirm Purchase</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Global State Management
        const AppState = {
            // Configuration
            config: {
                dailyRate: 0.023340000000000,
                exchangeRate: 1,
                currencyCode: 'TRX',
                hashpowerUnit: 'GH',
                hashpowerPrice: 0.50000000,
                defaultPeriod: 30,
                purchaseMin: 1,
                tierSystemEnabled: true
            },
            
            // Current Purchase Data
            purchase: {
                planKey: '',
                planName: '',
                tierLevel: 0,
                tierRate: 0,
                hashpower: 0,
                amount: 0,
                dailyProfit: 0,
                totalReturn: 0,
                roi: 0,
                duration: 30
            },
            
            // Cryptocurrency Data
            crypto: {
                rates: {},
                selected: 'TRX',
                database: {},
                lastUpdated: null,
                supportedCurrencies: []
            },
            
            // UI State
            ui: {
                modalOpen: false,
                ratesLoading: false,
                ratesLoaded: false
            },
            
            // Plan configurations
            plans: {
                "starter": {
                    "name": "Starter Tier",
                    "icon": "fa-rocket",
                    "hashpower_min": 1,
                    "hashpower_max": 499,
                    "hashpower_default": 1,
                    "hashpower_range": "1-499",
                    "duration": 30,
                    "daily_profit_rate": 0.02334,
                    "support_level": "Standard Support",
                    "features": ["Instant Activation"],
                    "tier_level": 1,
                    "tier_color": "success",
                    "roi_percentage": 140.04
                },
                "professional": {
                    "name": "Professional Tier",
                    "icon": "fa-crown",
                    "hashpower_min": 500,
                    "hashpower_max": 1999,
                    "hashpower_default": 500,
                    "hashpower_range": "500-1999",
                    "duration": 30,
                    "daily_profit_rate": 0.02567,
                    "support_level": "Priority Support",
                    "features": ["Priority Support"],
                    "featured": true,
                    "tier_level": 2,
                    "tier_color": "warning",
                    "roi_percentage": 154.02
                },
                "enterprise": {
                    "name": "Enterprise Tier",
                    "icon": "fa-gem",
                    "hashpower_min": 2000,
                    "hashpower_max": 10000,
                    "hashpower_default": 2000,
                    "hashpower_range": "2000-10000",
                    "duration": 30,
                    "daily_profit_rate": 0.029,
                    "support_level": "VIP Support",
                    "features": ["VIP Support"],
                    "tier_level": 3,
                    "tier_color": "primary",
                    "roi_percentage": 174
                }
            },
            
            // Tier configurations
            tierConfig: {
                enabled: true,
                tiers: [
                    { min: 1, max: 499, rate: 0.02334, name: 'Starter Tier', level: 1, roi: 140.04 },
                    { min: 500, max: 1999, rate: 0.02567, name: 'Professional Tier', level: 2, roi: 154.02 },
                    { min: 2000, max: 10000, rate: 0.029, name: 'Enterprise Tier', level: 3, roi: 174 }
                ]
            }
        };

        // Utility Functions
        const Utils = {
            formatNumber(num, decimals = 3) {
                return parseFloat(num).toFixed(decimals);
            },
            
            formatCrypto(amount, crypto) {
                const decimals = {
                    'BTC': 8,
                    'ETH': 8,
                    'USDT': 2,
                    'USDC': 2,
                    'SHIB': 0,
                    'TRX': 6,
                    'DOGE': 6,
                    'LTC': 6
                };
                return this.formatNumber(amount, decimals[crypto] || 6);
            },
            
            getCurrentTimestamp() {
                return new Date().toLocaleString('en-US', {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                });
            },
            
            showNotification(message, type = 'info') {
                console.log(`[${type.toUpperCase()}] ${message}`);
                // Implement toast notification here if needed
            }
        };

        // Tier Management
        const TierManager = {
            getTierDailyRate(hashpower) {
                if (!AppState.config.tierSystemEnabled) {
                    return AppState.config.dailyRate;
                }
                
                const tier = AppState.tierConfig.tiers.find(t => 
                    hashpower >= t.min && hashpower <= t.max
                );
                
                return tier ? tier.rate : AppState.config.dailyRate;
            },
            
            getTierInfo(hashpower) {
                if (!AppState.config.tierSystemEnabled) {
                    return { name: 'Standard Plan', level: 0, roi: 0 };
                }
                
                const tier = AppState.tierConfig.tiers.find(t => 
                    hashpower >= t.min && hashpower <= t.max
                );
                
                return tier ? { 
                    name: tier.name, 
                    level: tier.level,
                    roi: tier.roi 
                } : { name: 'Standard Plan', level: 0, roi: 0 };
            },
            
            calculateProfits(hashpower, duration = 30) {
                const dailyRate = this.getTierDailyRate(hashpower);
                const price = hashpower * AppState.config.hashpowerPrice;
                const dailyProfit = hashpower * dailyRate;
                const totalReturn = dailyProfit * duration;
                const roi = (totalReturn / price) * 100;
                
                return {
                    price,
                    dailyProfit,
                    totalReturn,
                    roi,
                    dailyRate
                };
            }
        };

        // Plan Management
        const PlanManager = {
            updatePlanCalculations(planKey, hashpower) {
                const calculations = TierManager.calculateProfits(hashpower);
                
                // Update UI elements
                const elements = {
                    price: document.getElementById(`custom_price_${planKey}`),
                    profit: document.getElementById(`custom_daily_profit_${planKey}`),
                    return: document.getElementById(`custom_total_return_${planKey}`)
                };
                
                if (elements.price) elements.price.textContent = `${Utils.formatNumber(calculations.price)} TRX`;
                if (elements.profit) elements.profit.textContent = `${Utils.formatNumber(calculations.dailyProfit)} TRX`;
                if (elements.return) elements.return.textContent = `${Utils.formatNumber(calculations.totalReturn)} TRX`;
                
                // Update button data
                const btn = document.querySelector(`button[data-plan="${planKey}"]`);
                if (btn) {
                    btn.setAttribute('data-price', calculations.price);
                }
                
                return calculations;
            },
            
            initializeSliders() {
                document.querySelectorAll('.hashpower-range').forEach(slider => {
                    // Initial update
                    const planKey = slider.id.replace('hashpower_', '');
                    const initialHashpower = parseInt(slider.value);
                    this.updateSliderDisplay(planKey, initialHashpower);
                    this.updatePlanCalculations(planKey, initialHashpower);
                    
                    // Add input listener
                    slider.addEventListener('input', (e) => {
                        const hashpower = parseInt(e.target.value);
                        this.updateSliderDisplay(planKey, hashpower);
                        this.updatePlanCalculations(planKey, hashpower);
                    });
                });
            },
            
            updateSliderDisplay(planKey, hashpower) {
                const valueEl = document.getElementById(`hashpower_value_${planKey}`);
                const hiddenEl = document.getElementById(`hidden_hashpower_${planKey}`);
                
                if (valueEl) valueEl.textContent = hashpower;
                if (hiddenEl) hiddenEl.value = hashpower;
            },
            
            initializeBuyButtons() {
                document.querySelectorAll('.buy-plan-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const planKey = this.getAttribute('data-plan');
                        const tierLevel = this.getAttribute('data-tier');
                        ModalManager.openPaymentModal(planKey, tierLevel);
                    });
                });
            }
        };

        // Crypto Management
        const CryptoManager = {
            async loadDatabase() {
                try {
                    const response = await fetch('https://tron-x.fun/api/crypto-databases');
                    const data = await response.json();
                    AppState.crypto.database = data;
                    console.log('Crypto database loaded:', Object.keys(data).length, 'currencies');
                    return true;
                } catch (error) {
                    console.error('Failed to load crypto database:', error);
                    return false;
                }
            },
            
            async loadRates() {
                if (AppState.ui.ratesLoading) {
                    console.log('Rates already loading...');
                    return false;
                }
                
                AppState.ui.ratesLoading = true;
                UIManager.showLoadingState();
                
                try {
                    const response = await fetch('https://tron-x.fun/api/crypto-rates', {
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
                        AppState.crypto.rates = data.rates;
                        AppState.crypto.lastUpdated = Utils.getCurrentTimestamp();
                        AppState.ui.ratesLoaded = true;
                        
                        if (data.supported_currencies) {
                            AppState.crypto.supportedCurrencies = data.supported_currencies;
                            this.generateCryptoOptions(data.supported_currencies);
                        }
                        
                        console.log('Crypto rates loaded:', Object.keys(data.rates).length, 'currencies');
                        
                        UIManager.hideLoadingState();
                        UIManager.showCryptoSelection();
                        this.updateAllDisplays();
                        UIManager.enablePurchaseButton();
                        
                        return true;
                    } else {
                        throw new Error(data.message || 'No rates available');
                    }
                    
                } catch (error) {
                    console.error('Failed to load crypto rates:', error);
                    UIManager.showErrorState(error.message);
                    UIManager.disablePurchaseButton();
                    return false;
                } finally {
                    AppState.ui.ratesLoading = false;
                }
            },
            
            generateCryptoOptions(supportedCurrencies) {
                const cryptoGrid = document.getElementById('cryptoGrid');
                if (!cryptoGrid) return;
                
                cryptoGrid.innerHTML = '';
                
                supportedCurrencies.forEach((cryptoSymbol, index) => {
                    const cryptoData = AppState.crypto.database[cryptoSymbol];
                    if (!cryptoData) {
                        console.warn('Crypto data not found for:', cryptoSymbol);
                        return;
                    }
                    
                    const option = document.createElement('div');
                    option.className = 'crypto-option';
                    option.dataset.crypto = cryptoSymbol;
                    
                    option.innerHTML = `
                        <input type="radio" 
                               id="crypto_${cryptoSymbol.toLowerCase()}" 
                               name="selected_crypto" 
                               value="${cryptoSymbol}" 
                               class="crypto-radio" 
                               ${index === 0 ? 'checked' : ''}>
                        <label for="crypto_${cryptoSymbol.toLowerCase()}" class="crypto-label">
                            <div class="crypto-icon">
                                <img src="${cryptoData.image}" 
                                     alt="${cryptoData.name}" 
                                     class="crypto-image"
                                     loading="lazy">
                            </div>
                            <div class="crypto-info">
                                <div class="crypto-name">${cryptoData.name}</div>
                                <div class="crypto-symbol">${cryptoData.symbol}</div>
                            </div>
                            <div class="crypto-amount" id="${cryptoSymbol.toLowerCase()}_amount">
                                <i class="fa fa-spinner fa-spin"></i>
                            </div>
                        </label>
                    `;
                    
                    cryptoGrid.appendChild(option);
                });
                
                // Initialize event listeners for new options
                this.initializeEventListeners();
                
                // Set default selected crypto
                if (supportedCurrencies.length > 0) {
                    AppState.crypto.selected = supportedCurrencies[0];
                }
            },
            
            initializeEventListeners() {
                document.querySelectorAll('input[name="selected_crypto"]').forEach(radio => {
                    radio.addEventListener('change', (e) => {
                        AppState.crypto.selected = e.target.value;
                        console.log('Cryptocurrency changed to:', AppState.crypto.selected);
                        this.updateCurrentRate();
                        this.updatePurchaseSummaryAmount();
                    });
                });
            },
            
            calculateCryptoAmount(trxAmount, targetCrypto) {
                if (!AppState.crypto.rates['TRX'] || !AppState.crypto.rates[targetCrypto]) {
                    console.error('Missing rates for conversion');
                    return null;
                }
                
                // Convert TRX to USD
                const usdAmount = trxAmount * AppState.crypto.rates['TRX'];
                
                // Convert USD to target crypto
                const cryptoAmount = usdAmount / AppState.crypto.rates[targetCrypto];
                
                return cryptoAmount;
            },
            
            updateAllDisplays() {
                this.updateCryptoAmounts();
                this.updateCurrentRate();
                this.updatePurchaseSummaryAmount();
                this.updateLastUpdated();
            },
            
            updateCryptoAmounts() {
                if (!AppState.purchase.amount || Object.keys(AppState.crypto.rates).length === 0) {
                    return;
                }
                
                Object.keys(AppState.crypto.rates).forEach(crypto => {
                    const cryptoAmount = this.calculateCryptoAmount(AppState.purchase.amount, crypto);
                    const element = document.getElementById(`${crypto.toLowerCase()}_amount`);
                    
                    if (element && cryptoAmount !== null) {
                        element.innerHTML = Utils.formatCrypto(cryptoAmount, crypto);
                        element.style.color = '';
                    }
                });
            },
            
            updateCurrentRate() {
                const rate = AppState.crypto.rates[AppState.crypto.selected];
                const rateElement = document.getElementById('currentRate');
                
                if (rateElement && rate) {
                    const decimals = ['BTC', 'ETH'].includes(AppState.crypto.selected) ? 2 : 4;
                    rateElement.textContent = `1 ${AppState.crypto.selected} = ${Utils.formatNumber(rate, decimals)} USD`;
                    rateElement.style.color = '';
                }
            },
            
            updatePurchaseSummaryAmount() {
                const cryptoAmount = this.calculateCryptoAmount(
                    AppState.purchase.amount, 
                    AppState.crypto.selected
                );
                
                const element = document.getElementById('modalCryptoAmount');
                if (element && cryptoAmount !== null) {
                    element.textContent = `${Utils.formatCrypto(cryptoAmount, AppState.crypto.selected)} ${AppState.crypto.selected}`;
                    element.style.color = '';
                }
            },
            
            updateLastUpdated() {
                const element = document.getElementById('lastUpdated');
                if (element && AppState.crypto.lastUpdated) {
                    element.textContent = AppState.crypto.lastUpdated;
                }
            }
        };

        // Modal Management
        const ModalManager = {
            openPaymentModal(planKey, tierLevel) {
                // Get current slider value
                const slider = document.getElementById(`hashpower_${planKey}`);
                const hashpower = slider ? parseInt(slider.value) : AppState.plans[planKey].hashpower_default;
                
                // Get plan configuration
                const plan = AppState.plans[planKey];
                
                // Calculate all values
                const calculations = TierManager.calculateProfits(hashpower, plan.duration);
                const tierInfo = TierManager.getTierInfo(hashpower);
                
                // Update AppState
                AppState.purchase = {
                    planKey: planKey,
                    planName: plan.name,
                    tierLevel: tierInfo.level,
                    tierRate: calculations.dailyRate,
                    hashpower: hashpower,
                    amount: calculations.price,
                    dailyProfit: calculations.dailyProfit,
                    totalReturn: calculations.totalReturn,
                    roi: tierInfo.roi,
                    duration: plan.duration
                };
                
                console.log('Opening modal with purchase data:', AppState.purchase);
                
                // Update modal display
                this.updateModalDisplay();
                
                // Load crypto rates if not loaded
                if (!AppState.ui.ratesLoaded) {
                    CryptoManager.loadRates();
                } else {
                    CryptoManager.updateAllDisplays();
                }
                
                // Show modal
                const modal = $('#paymentModal');
                if (modal && modal.modal) {
                    modal.modal('show');
                    AppState.ui.modalOpen = true;
                }
            },
            
            updateModalDisplay() {
                const elements = {
                    planName: document.getElementById('modalPlanName'),
                    tierLevel: document.getElementById('modalTierLevel'),
                    hashpower: document.getElementById('modalHashpower'),
                    duration: document.getElementById('modalDuration'),
                    dailyProfit: document.getElementById('modalDailyProfit'),
                    totalReturn: document.getElementById('modalTotalReturn'),
                    roi: document.getElementById('modalROI'),
                    amount: document.getElementById('modalAmount')
                };
                
                if (elements.planName) elements.planName.textContent = AppState.purchase.planName;
                if (elements.tierLevel) elements.tierLevel.textContent = `Tier ${AppState.purchase.tierLevel}`;
                if (elements.hashpower) elements.hashpower.textContent = `${AppState.purchase.hashpower} GH/s`;
                if (elements.duration) elements.duration.textContent = `${AppState.purchase.duration} Days`;
                if (elements.dailyProfit) elements.dailyProfit.textContent = `${Utils.formatNumber(AppState.purchase.dailyProfit)} TRX`;
                if (elements.totalReturn) elements.totalReturn.textContent = `${Utils.formatNumber(AppState.purchase.totalReturn)} TRX`;
                if (elements.roi) elements.roi.textContent = `${Utils.formatNumber(AppState.purchase.roi, 2)}%`;
                if (elements.amount) elements.amount.textContent = `${Utils.formatNumber(AppState.purchase.amount, 8)} TRX`;
            },
            
            confirmPurchase() {
                if (!AppState.ui.ratesLoaded) {
                    Utils.showNotification('Please wait for rates to load', 'warning');
                    return;
                }
                
                // Get selected cryptocurrency
                const selectedCryptoEl = document.querySelector('input[name="selected_crypto"]:checked');
                const selectedCrypto = selectedCryptoEl ? selectedCryptoEl.value : 'TRX';
                
                // Calculate crypto amount
                const cryptoAmount = CryptoManager.calculateCryptoAmount(
                    AppState.purchase.amount,
                    selectedCrypto
                );
                
                console.log('Confirming purchase:', {
                    plan: AppState.purchase.planKey,
                    planName: AppState.purchase.planName,
                    tierLevel: AppState.purchase.tierLevel,
                    hashpower: AppState.purchase.hashpower,
                    amount: AppState.purchase.amount,
                    dailyProfit: AppState.purchase.dailyProfit,
                    totalReturn: AppState.purchase.totalReturn,
                    roi: AppState.purchase.roi,
                    duration: AppState.purchase.duration,
                    selectedCrypto: selectedCrypto,
                    cryptoAmount: cryptoAmount,
                    cryptoRate: AppState.crypto.rates[selectedCrypto]
                });
                
                // Close modal
                const modal = $('#paymentModal');
                if (modal && modal.modal) {
                    modal.modal('hide');
                }
                
                // Create and submit form
                this.submitPurchaseForm(selectedCrypto, cryptoAmount);
            },
            
            submitPurchaseForm(selectedCrypto, cryptoAmount) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = "{{ route('hash.store') }}";
                
                // Add CSRF token
                const csrfToken = document.querySelector('meta[name="csrf-token"]');
                if (csrfToken) {
                    const csrf = document.createElement('input');
                    csrf.type = 'hidden';
                    csrf.name = '_token';
                    csrf.value = csrfToken.content;
                    form.appendChild(csrf);
                }
                
                // Add all purchase data
                const formData = {
                    // User data would be handled server-side via session/authentication
                    user_id: '{{ session("user") }}',

                    // Plan Information
                    plan_key: AppState.purchase.planKey,
                    plan_name: AppState.purchase.planName,
                    tier_level: AppState.purchase.tierLevel,
                    
                    // Hashpower Details
                    hashpower: AppState.purchase.hashpower,
                    hashpower_unit: AppState.config.hashpowerUnit,
                    
                    // Financial Details
                    amount: AppState.purchase.amount,
                    daily_profit: AppState.purchase.dailyProfit,
                    total_return: AppState.purchase.totalReturn,
                    roi: AppState.purchase.roi,
                    daily_rate: AppState.purchase.tierRate,

                    // Duration
                    duration: AppState.purchase.duration,
                    
                    // Payment Details
                    payment_method: 'wallet',
                    selected_crypto: selectedCrypto,
                    crypto_amount: cryptoAmount,
                    crypto_rate: AppState.crypto.rates[selectedCrypto],
                    trx_rate: AppState.crypto.rates['TRX'],
                    
                    // Metadata
                    purchase_timestamp: new Date().toISOString(),
                    rates_timestamp: AppState.crypto.lastUpdated,

                };
                
                // Add each field to form
                Object.keys(formData).forEach(key => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = key;
                    input.value = formData[key];
                    form.appendChild(input);
                });
                
                // Submit form
                document.body.appendChild(form);
                console.log('Submitting purchase form with data:', formData);
                form.submit();
            }
        };

        // UI Management
        const UIManager = {
            showLoadingState() {
                const loading = document.getElementById('loadingState');
                const crypto = document.getElementById('cryptoSelection');
                const error = document.getElementById('errorState');
                
                if (loading) loading.style.display = 'block';
                if (crypto) crypto.style.display = 'none';
                if (error) error.style.display = 'none';
            },
            
            hideLoadingState() {
                const loading = document.getElementById('loadingState');
                if (loading) loading.style.display = 'none';
            },
            
            showCryptoSelection() {
                const crypto = document.getElementById('cryptoSelection');
                if (crypto) crypto.style.display = 'block';
            },
            
            showErrorState(message) {
                const error = document.getElementById('errorState');
                const errorMsg = document.getElementById('errorMessage');
                const loading = document.getElementById('loadingState');
                const crypto = document.getElementById('cryptoSelection');
                
                if (error) error.style.display = 'block';
                if (errorMsg) errorMsg.textContent = message;
                if (loading) loading.style.display = 'none';
                if (crypto) crypto.style.display = 'none';
            },
            
            enablePurchaseButton() {
                const btn = document.getElementById('confirmPurchaseBtn');
                if (btn) {
                    btn.disabled = false;
                    btn.style.opacity = '1';
                    btn.style.cursor = 'pointer';
                }
            },
            
            disablePurchaseButton() {
                const btn = document.getElementById('confirmPurchaseBtn');
                if (btn) {
                    btn.disabled = true;
                    btn.style.opacity = '0.5';
                    btn.style.cursor = 'not-allowed';
                }
            },
            
            initMiningAnimations() {
                const planCards = document.querySelectorAll('.plan-card');
                
                planCards.forEach((card, index) => {
                    card.style.animationDelay = `${index * 0.2}s`;
                    
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
        };

        // Application Initialization
        document.addEventListener('DOMContentLoaded', async function() {
            console.log('Initializing Buy Hash application...');
            
            // Initialize UI
            UIManager.initMiningAnimations();
            
            // Initialize Plans
            PlanManager.initializeSliders();
            PlanManager.initializeBuyButtons();
            
            // Load crypto database
            await CryptoManager.loadDatabase();
            
            // Setup confirm button
            const confirmBtn = document.getElementById('confirmPurchaseBtn');
            if (confirmBtn) {
                confirmBtn.addEventListener('click', () => {
                    ModalManager.confirmPurchase();
                });
            }
            
            // Auto-refresh rates every 5 minutes
            setInterval(() => {
                if (AppState.ui.modalOpen) {
                    console.log('Auto-refreshing crypto rates...');
                    CryptoManager.loadRates();
                }
            }, 300000);
            
            // Handle modal close
            $('#paymentModal').on('hidden.bs.modal', function() {
                AppState.ui.modalOpen = false;
            });
            
            console.log('Application initialized successfully');
        });
    </script>
</x-layout_backend>