<x-layout_frontend>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-bolt"></i>
                Futuristic TRX Cloud Mining
            </div>
    
            <h1 class="hero-title">
                <span
                    style="
                        background: linear-gradient(135deg, #ffffff, #f0f0f0, #ffe6e6, #ffcccc);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-clip: text;
                        text-shadow: 0 0 30px rgba(255, 255, 255, 0.8);
                    "
                >
                    Next-Generation
                </span>
                <br />
                <span
                    style="
                        background: linear-gradient(135deg, #ffffff, #f0f0f0, #ffe6e6, #ffcccc);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-clip: text;
                        text-shadow: 0 0 30px rgba(255, 255, 255, 0.8);
                    "
                >
                    TRON Mining
                </span>
            </h1>
            
            @if (!session()->has('user'))
            @include('partialls.hero-login-compact')
            @endif
    
            <!-- Small Trustpilot Widget below Login Card -->
            <div class="hero-trustpilot-widget">
                <a href="https://www.trustpilot.com/review/tronx.site" target="_blank" rel="noopener noreferrer" class="hero-trustpilot-link">
                    <div class="hero-trustpilot-content">
                        <div class="hero-trustpilot-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="hero-trustpilot-text">
                            <span class="hero-trustpilot-rating">4.9/5</span>
                            <span class="hero-trustpilot-reviews">Trustpilot</span>
                        </div>
                    </div>
                </a>
            </div>
    
            <!-- Dynamic TRON Coin Value Display -->
            <div class="tron-value-display">
                <div class="tron-grid">
                    <!-- Live TRON Value Grid -->
                    <div class="tron-value-grid">
                        <div class="tron-coin-icon">
                            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/tron-coin-3d-icon-png-download-4340991.png" alt="TRON Coin" class="coin-image" />
                        </div>
                        <div class="tron-value-content">
                            <div class="value-label">Live TRON Value</div>
                            <div class="value-amount" id="tronValue">$0.33773</div>
                            <div class="value-change" id="tronChange">+2.45%</div>
                        </div>
                    </div>
    
                    <!-- Mining Progress Grid -->
                    <div class="mining-progress-grid">
                        <div class="mining-icon">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <div class="mining-content">
                            <div class="mining-label">Mine Your TRX</div>
                            <div class="mining-amount" id="miningAmount">0.1050 TRX</div>
                            <div class="mining-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" id="progressFill"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <p class="hero-subtitle">
                Experience the future of TRX mining with our cutting-edge cloud infrastructure. Advanced algorithms, instant payouts, and maximum profitability await you.
            </p>

            <div class="hero-actions">
                {{-- Saat belum login --}}
                @if (!session()->has('user'))
                <button class="btn primary" onclick="openLoginModal()">
                    <i class="fas fa-rocket"></i>
                    Start Mining Now
                </button>
                <a href="#features" class="btn secondary">Explore Features</a>
                @else
                {{-- Saat sudah login --}}
                <a href="{{ route('account') }}" class="btn primary">
                    <i class="fas fa-tachometer-alt"></i>
                    Go to Dashboard
                </a>
                <a href="{{ route('buy.hash') }}" class="btn secondary">
                    <i class="fas fa-microchip"></i>
                    Buy Hashpower
                </a>
                @endif
            </div>

        </div>
    </section>
    
    <!-- Statistics Section -->
    <section class="stats-section" id="stats">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">{{ $minners }}+</div>
                    <div class="stat-label">Active Miners</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-wallet"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">{{ $tot_deposit }} {{ $crypto_code }}</div>
                    <div class="stat-label">TRX Deposited</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-coins"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">{{ $tot_withdraw }} {{ $crypto_code }}</div>
                    <div class="stat-label">TRX Withdrawn</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">{{ $running_day }}+</div>
                    <div class="stat-label">Days Online</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="section-header">
            <h2 class="section-title">Why Choose TRONMINER?</h2>
        </div>
    
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="feature-title">Lightning Fast</h3>
                <p class="feature-description">Experience instant mining with our high-performance infrastructure. Start earning TRX immediately with zero setup time.</p>
            </div>
    
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="feature-title">Cloud Powered</h3>
                <p class="feature-description">Leverage our distributed cloud infrastructure for maximum uptime and optimal mining performance.</p>
            </div>
    
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2" />
                        <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="feature-title">24/7 Mining</h3>
                <p class="feature-description">Our automated systems ensure continuous mining operations, maximizing your TRX earnings around the clock.</p>
            </div>
    
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
                <h3 class="feature-title">Secure & Reliable</h3>
                <p class="feature-description">Bank-grade security protocols protect your assets while ensuring maximum reliability and uptime.</p>
            </div>
    
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
                <h3 class="feature-title">Expert Support</h3>
                <p class="feature-description">Our dedicated team of mining experts is available 24/7 to assist you with any questions or concerns.</p>
            </div>
    
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </div>
                <h3 class="feature-title">Real-time Analytics</h3>
                <p class="feature-description">Monitor your mining performance with detailed real-time analytics and comprehensive reporting tools.</p>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Start Mining TRX?</h2>
            <p class="cta-description">Join thousands of miners already earning TRX with our advanced cloud mining platform. Start your mining journey today!</p>
            <div class="hero-actions">
                <button class="btn primary" onclick="openLoginModal()">
                    <i class="fas fa-rocket"></i>
                    Start Mining Now
                </button>
            </div>
        </div>
    </section>

</x-layout_frontend>
