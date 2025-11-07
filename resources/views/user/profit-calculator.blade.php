<x-layout_backend :user="$user">
    <div class="container" style="margin-top: 24px; margin-bottom: 24px;">
    <div class="row">
        <div class="col-12">
            <!-- Modern Profit Calculator -->
            <div class="modern-profit-calculator">
                <!-- Hero Section -->
                <div class="calculator-hero">
                    <div class="hero-content">
                        <div class="hero-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h1 class="hero-title">Profit Calculator</h1>
                        <p class="hero-subtitle">Calculate your mining profits with precision and style</p>
                    </div>
                    <div class="hero-decoration">
                        <div class="floating-shape shape-1"></div>
                        <div class="floating-shape shape-2"></div>
                        <div class="floating-shape shape-3"></div>
                    </div>
                </div>

                <!-- Main Calculator Container -->
                <div class="calculator-container">
                    <!-- Input Panel -->
                    <div class="input-panel">
                        <div class="panel-header">
                            <h3><i class="fas fa-sliders-h"></i> Configuration</h3>
                        </div>

                        <div class="input-group">
                            <label class="input-label">
                                <i class="fas fa-microchip"></i>
                                Hashpower (GH/s)
                            </label>
                            <div class="input-wrapper">
                                <input type="number" id="modernHashpowerInput" placeholder="Enter hashpower amount" value="0" min="0.00000001" max="1000000000" step="0.00000001" oninput="modernValidateInput(this)" />
                                <div class="input-decoration"></div>
                            </div>
                        </div>

                        <!-- Quick Presets -->
                        <div class="presets-section">
                            <label class="presets-label">
                                <i class="fas fa-bolt"></i>
                                Quick Presets
                            </label>
                            <div class="presets-grid">
                                <button class="preset-button" data-value="1">1</button>
                                <button class="preset-button" data-value="5">5</button>
                                <button class="preset-button" data-value="10">10</button>
                                <button class="preset-button" data-value="100">100</button>
                                <button class="preset-button" data-value="1000">1K</button>
                                <button class="preset-button" data-value="10000">10K</button>
                            </div>
                        </div>

                        <div class="cost-display">
                            <div class="cost-label">
                                <i class="fas fa-coins"></i>
                                Investment Cost
                            </div>
                            <div class="cost-value" id="modernCostDisplay">
                                <span class="cost-amount">0.00000000</span>
                                <span class="cost-currency">TRX</span>
                            </div>
                        </div>
                    </div>

                    <!-- Results Panel -->
                    <div class="results-panel">
                        <div class="results-header">
                            <h3><i class="fas fa-chart-line"></i> Profit Analysis</h3>
                            <div class="time-selector">
                                <button class="time-btn active" data-period="1">1D</button>
                                <button class="time-btn" data-period="7">1W</button>
                                <button class="time-btn" data-period="30">1M</button>
                                <button class="time-btn" data-period="365">1Y</button>
                            </div>
                        </div>

                        <div class="results-grid">
                            <div class="result-card profit-card">
                                <div class="card-icon">
                                    <i class="fas fa-coins"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-label">Total Profit</div>
                                    <div class="card-value" id="modernTotalProfit">0.00000000 TRX</div>
                                    <div class="card-subtitle" id="modernTotalProfitUSD">--</div>
                                </div>
                                <div class="card-glow"></div>
                            </div>

                            <div class="result-card roi-card">
                                <div class="card-icon">
                                    <i class="fas fa-percentage"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-label">ROI</div>
                                    <div class="card-value" id="modernROI">0.00%</div>
                                    <div class="card-subtitle" id="modernROIDetails">Daily: 0.00%</div>
                                </div>
                                <div class="card-glow"></div>
                            </div>

                            <div class="result-card daily-card">
                                <div class="card-icon">
                                    <i class="fas fa-calendar-day"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-label">Daily Rate</div>
                                    <div class="card-value" id="modernDailyRate">2.33%</div>
                                    <div class="card-subtitle" id="modernDailyDetails">Daily profit rate</div>
                                </div>
                                <div class="card-glow"></div>
                            </div>

                            <div class="result-card efficiency-card">
                                <div class="card-icon">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-label">Efficiency</div>
                                    <div class="card-value" id="modernEfficiency">0.00x</div>
                                    <div class="card-subtitle" id="modernEfficiencyDetails">Profit multiplier</div>
                                </div>
                                <div class="card-glow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <style>
            /* Modern Profit Calculator Styles */
            .modern-profit-calculator {
                background: linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(30, 41, 59, 0.9) 50%, rgba(51, 65, 85, 0.85) 100%);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 24px;
                margin: 20px 0;
                overflow: hidden;
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(255, 255, 255, 0.05), inset 0 1px 0 rgba(255, 255, 255, 0.1);
                position: relative;
            }

            /* Hero Section */
            .calculator-hero {
                background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(168, 85, 247, 0.1) 50%, rgba(236, 72, 153, 0.1) 100%);
                padding: 25px 20px;
                text-align: center;
                position: relative;
                overflow: hidden;
            }

            .hero-content {
                position: relative;
                z-index: 2;
            }

            .hero-icon {
                width: 60px;
                height: 60px;
                margin: 0 auto 15px;
                background: linear-gradient(135deg, #6366f1, #8b5cf6);
                border-radius: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 24px;
                color: white;
                box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
                animation: float 6s ease-in-out infinite;
            }

            .hero-title {
                font-size: 1.8rem;
                font-weight: 800;
                background: linear-gradient(135deg, #ffffff, #a1a1aa);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                margin: 0 0 8px 0;
                letter-spacing: -0.02em;
            }

            .hero-subtitle {
                font-size: 0.9rem;
                color: rgba(255, 255, 255, 0.7);
                margin: 0;
                font-weight: 400;
            }

            .hero-decoration {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                pointer-events: none;
            }

            .floating-shape {
                position: absolute;
                border-radius: 50%;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
                animation: float 8s ease-in-out infinite;
            }

            .shape-1 {
                width: 60px;
                height: 60px;
                top: 20%;
                left: 10%;
                animation-delay: 0s;
            }

            .shape-2 {
                width: 40px;
                height: 40px;
                top: 60%;
                right: 15%;
                animation-delay: 2s;
            }

            .shape-3 {
                width: 80px;
                height: 80px;
                bottom: 20%;
                left: 20%;
                animation-delay: 4s;
            }

            /* Calculator Container */
            .calculator-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
                padding: 25px;
            }

            /* Input Panel */
            .input-panel {
                background: rgba(255, 255, 255, 0.03);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 16px;
                padding: 20px;
                backdrop-filter: blur(10px);
            }

            .panel-header {
                margin-bottom: 20px;
            }

            .panel-header h3 {
                font-size: 1.2rem;
                font-weight: 700;
                color: #ffffff;
                margin: 0;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .panel-header h3 i {
                color: #6366f1;
                font-size: 1.1rem;
            }

            .input-group {
                margin-bottom: 18px;
            }

            .input-label {
                display: flex;
                align-items: center;
                gap: 8px;
                font-size: 0.9rem;
                font-weight: 600;
                color: rgba(255, 255, 255, 0.9);
                margin-bottom: 12px;
            }

            .input-label i {
                color: #10b981;
                font-size: 1rem;
            }

            .input-wrapper {
                position: relative;
            }

            .input-wrapper input {
                width: 100%;
                padding: 12px 16px;
                background: rgba(255, 255, 255, 0.05);
                border: 2px solid rgba(255, 255, 255, 0.1);
                border-radius: 10px;
                color: #ffffff;
                font-size: 0.9rem;
                font-weight: 500;
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
            }

            .input-wrapper input:focus {
                outline: none;
                border-color: #6366f1;
                background: rgba(99, 102, 241, 0.1);
                box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
            }

            .input-wrapper input::placeholder {
                color: rgba(255, 255, 255, 0.5);
            }

            .input-decoration {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                border-radius: 12px;
                background: linear-gradient(135deg, transparent, rgba(99, 102, 241, 0.1));
                opacity: 0;
                transition: opacity 0.3s ease;
                pointer-events: none;
            }

            .input-wrapper input:focus + .input-decoration {
                opacity: 1;
            }

            /* Presets Section */
            .presets-section {
                margin-bottom: 18px;
            }

            .presets-label {
                display: flex;
                align-items: center;
                gap: 8px;
                font-size: 0.9rem;
                font-weight: 600;
                color: rgba(255, 255, 255, 0.9);
                margin-bottom: 15px;
            }

            .presets-label i {
                color: #f59e0b;
                font-size: 1rem;
            }

            .presets-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 10px;
            }

            .preset-button {
                padding: 8px 12px;
                background: rgba(255, 255, 255, 0.05);
                border: 2px solid rgba(255, 255, 255, 0.1);
                border-radius: 8px;
                color: rgba(255, 255, 255, 0.8);
                font-size: 0.8rem;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
                text-align: center;
                backdrop-filter: blur(10px);
            }

            .preset-button:hover {
                background: rgba(99, 102, 241, 0.2);
                border-color: rgba(99, 102, 241, 0.5);
                transform: translateY(-2px);
                box-shadow: 0 8px 20px rgba(99, 102, 241, 0.2);
            }

            .preset-button:active {
                transform: translateY(0) scale(0.98);
            }

            .preset-button.active {
                background: linear-gradient(135deg, #6366f1, #8b5cf6);
                border-color: #6366f1;
                color: white;
                box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
            }

            /* Cost Display */
            .cost-display {
                background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(16, 185, 129, 0.05) 100%);
                border: 1px solid rgba(16, 185, 129, 0.2);
                border-radius: 10px;
                padding: 15px;
                text-align: center;
            }

            .cost-label {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                font-size: 0.9rem;
                font-weight: 600;
                color: rgba(255, 255, 255, 0.8);
                margin-bottom: 10px;
            }

            .cost-label i {
                color: #10b981;
            }

            .cost-value {
                display: flex;
                align-items: baseline;
                justify-content: center;
                gap: 8px;
            }

            .cost-amount {
                font-size: 1.4rem;
                font-weight: 800;
                color: #10b981;
            }

            .cost-currency {
                font-size: 1rem;
                color: rgba(255, 255, 255, 0.6);
                font-weight: 500;
            }

            /* Results Panel */
            .results-panel {
                background: rgba(255, 255, 255, 0.03);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 16px;
                padding: 20px;
                backdrop-filter: blur(10px);
            }

            .results-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
                flex-wrap: wrap;
                gap: 15px;
            }

            .results-header h3 {
                font-size: 1.2rem;
                font-weight: 700;
                color: #ffffff;
                margin: 0;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .results-header h3 i {
                color: #8b5cf6;
                font-size: 1.1rem;
            }

            .time-selector {
                display: flex;
                background: rgba(0, 0, 0, 0.3);
                border-radius: 12px;
                padding: 4px;
                gap: 4px;
            }

            .time-btn {
                padding: 8px 12px;
                background: transparent;
                border: none;
                border-radius: 6px;
                color: rgba(255, 255, 255, 0.6);
                font-size: 0.8rem;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
                min-width: 45px;
            }

            .time-btn:hover {
                background: rgba(255, 255, 255, 0.1);
                color: rgba(255, 255, 255, 0.9);
            }

            .time-btn.active {
                background: linear-gradient(135deg, #8b5cf6, #ec4899);
                color: white;
                box-shadow: 0 4px 12px rgba(139, 92, 246, 0.3);
            }

            /* Results Grid */
            .results-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .result-card {
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 12px;
                padding: 15px;
                position: relative;
                overflow: hidden;
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
            }

            .result-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            }

            .result-card::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 2px;
                background: linear-gradient(90deg, transparent, currentColor, transparent);
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .result-card:hover::before {
                opacity: 1;
            }

            .profit-card {
                border-color: rgba(16, 185, 129, 0.3);
            }

            .profit-card::before {
                background: linear-gradient(90deg, transparent, #10b981, transparent);
            }

            .roi-card {
                border-color: rgba(99, 102, 241, 0.3);
            }

            .roi-card::before {
                background: linear-gradient(90deg, transparent, #6366f1, transparent);
            }

            .daily-card {
                border-color: rgba(245, 158, 11, 0.3);
            }

            .daily-card::before {
                background: linear-gradient(90deg, transparent, #f59e0b, transparent);
            }

            .efficiency-card {
                border-color: rgba(236, 72, 153, 0.3);
            }

            .efficiency-card::before {
                background: linear-gradient(90deg, transparent, #ec4899, transparent);
            }

            .card-icon {
                width: 40px;
                height: 40px;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.2rem;
                color: white;
                margin-bottom: 12px;
            }

            .profit-card .card-icon {
                background: linear-gradient(135deg, #10b981, #059669);
            }

            .roi-card .card-icon {
                background: linear-gradient(135deg, #6366f1, #4f46e5);
            }

            .daily-card .card-icon {
                background: linear-gradient(135deg, #f59e0b, #d97706);
            }

            .efficiency-card .card-icon {
                background: linear-gradient(135deg, #ec4899, #db2777);
            }

            .card-content {
                flex: 1;
            }

            .card-label {
                font-size: 0.8rem;
                color: rgba(255, 255, 255, 0.6);
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 8px;
                font-weight: 600;
            }

            .card-value {
                font-size: 1.2rem;
                font-weight: 800;
                color: #ffffff;
                margin-bottom: 4px;
                line-height: 1.2;
            }

            .card-subtitle {
                font-size: 0.85rem;
                color: rgba(255, 255, 255, 0.5);
                font-weight: 500;
            }

            .card-glow {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                border-radius: 16px;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, transparent 50%, rgba(255, 255, 255, 0.05) 100%);
                opacity: 0;
                transition: opacity 0.3s ease;
                pointer-events: none;
            }

            .result-card:hover .card-glow {
                opacity: 1;
            }

            /* Animations */
            @keyframes float {
                0%,
                100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-10px);
                }
            }

            @keyframes pulse {
                0%,
                100% {
                    opacity: 1;
                }
                50% {
                    opacity: 0.7;
                }
            }

            /* Responsive Design */
            @media (max-width: 1024px) {
                .calculator-container {
                    grid-template-columns: 1fr;
                    gap: 15px;
                    padding: 20px;
                }

                .results-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width: 768px) {
                .modern-profit-calculator {
                    margin: 15px 0;
                    border-radius: 20px;
                }

                .calculator-hero {
                    padding: 30px 20px;
                }

                .hero-title {
                    font-size: 2rem;
                }

                .hero-subtitle {
                    font-size: 1rem;
                }

                .calculator-container {
                    padding: 20px;
                }

                .input-panel,
                .results-panel {
                    padding: 20px;
                }

                .results-grid {
                    grid-template-columns: 1fr;
                    gap: 15px;
                }

                .presets-grid {
                    grid-template-columns: repeat(2, 1fr);
                }

                .results-header {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 15px;
                }

                .time-selector {
                    width: 100%;
                    justify-content: space-between;
                }

                .time-btn {
                    flex: 1;
                    text-align: center;
                    padding: 12px 8px;
                }
            }

            @media (max-width: 480px) {
                .calculator-hero {
                    padding: 25px 15px;
                }

                .hero-icon {
                    width: 60px;
                    height: 60px;
                    font-size: 24px;
                }

                .hero-title {
                    font-size: 1.8rem;
                }

                .calculator-container {
                    padding: 15px;
                }

                .input-panel,
                .results-panel {
                    padding: 15px;
                }

                .card-value {
                    font-size: 1.3rem;
                }

                .cost-amount {
                    font-size: 1.5rem;
                }
            }

            /* Touch Device Enhancements */
            @media (hover: none) and (pointer: coarse) {
                .result-card:active {
                    transform: scale(0.98);
                    transition: all 0.1s ease;
                }

                .preset-button:active {
                    transform: scale(0.95);
                    transition: all 0.1s ease;
                }

                .time-btn:active {
                    transform: scale(0.95);
                    transition: all 0.1s ease;
                }

                .input-wrapper input {
                    font-size: 16px; /* Prevent zoom on iOS */
                }
            }
        </style>
</x-layout_backend>