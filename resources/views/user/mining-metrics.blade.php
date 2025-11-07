<x-layout_backend :user="$user">
<div class="container" style="margin-top: 24px; margin-bottom: 24px;">
    <div class="mining-metrics-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">
                <i class="fa fa-chart-line"></i>
                <span>Mining Performance Metrics</span>
            </div>
            <div class="page-subtitle">
                Comprehensive analysis of your mining operations
            </div>
        </div>

        <!-- Key Metrics Grid -->
        <div class="metrics-grid">
            <!-- Total Hashpower -->
            <div class="metric-card">
                <div class="metric-header">
                    <div class="metric-icon">
                        <i class="fa fa-microchip"></i>
                    </div>
                    <div class="metric-info">
                        <h4 class="metric-title">Total Hashpower</h4>
                        <div class="metric-label">Current Mining Power</div>
                    </div>
                </div>
                <div class="metric-value">0.00 GH/s</div>
                <div class="quick-stats">
                    <div class="quick-stat">
                        <div class="quick-stat-value">0</div>
                        <div class="quick-stat-label">Active Plans</div>
                    </div>
                    <div class="quick-stat">
                        <div class="quick-stat-value">0</div>
                        <div class="quick-stat-label">Avg/Plan</div>
                    </div>
                </div>
            </div>

            <!-- Mining Efficiency -->
            <div class="metric-card">
                <div class="metric-header">
                    <div class="metric-icon efficiency">
                        <i class="fa fa-tachometer-alt"></i>
                    </div>
                    <div class="metric-info">
                        <h4 class="metric-title">Mining Efficiency</h4>
                        <div class="metric-label">Performance Optimization</div>
                    </div>
                </div>
                <div class="efficiency-gauge">
                    <div class="gauge-circle">
                        <div class="gauge-center">0%</div>
                    </div>
                    <div class="metric-label">Efficiency Rating</div>
                </div>
            </div>

            <!-- Performance Score -->
            <div class="metric-card">
                <div class="metric-header">
                    <div class="metric-icon performance">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="metric-info">
                        <h4 class="metric-title">Performance Score</h4>
                        <div class="metric-label">Overall Mining Rating</div>
                    </div>
                </div>
                <div class="efficiency-gauge">
                    <div class="gauge-circle performance-gauge">
                        <div class="gauge-center">0</div>
                    </div>
                    <div class="metric-label">Score out of 100</div>
                </div>
            </div>
        </div>

        <!-- Revenue & Plans Row -->
        <div class="content-row">
            <!-- Estimated Monthly Revenue -->
            <div class="revenue-card">
                <div class="card-header">
                    <h3><i class="fa fa-coins"></i> Estimated Monthly Revenue</h3>
                    <p>Based on Current Hashpower</p>
                </div>
                <div class="card-content">
                    <div class="revenue-value">
                        0.00000000 TRX
                    </div>
                    <div class="revenue-breakdown">
                        <div class="breakdown-item">
                            <div class="breakdown-value">0.00000000</div>
                            <div class="breakdown-label">Daily</div>
                        </div>
                        <div class="breakdown-item">
                            <div class="breakdown-value">0.00000000</div>
                            <div class="breakdown-label">Yearly</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active Mining Plans -->
            <div class="plans-card">
                <div class="card-header">
                    <h3><i class="fa fa-list"></i> Active Mining Plans</h3>
                </div>
                <div class="card-content">
                    <div class="empty-state">
                        <div class="empty-icon">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="empty-title">No Active Mining Plans</div>
                        <div class="empty-description">Purchase a mining plan to start earning</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mining Rewards Chart -->
        <div class="chart-card">
            <div class="card-header">
                <h3><i class="fa fa-chart-area"></i> Mining Rewards History (Last 30 Days)</h3>
            </div>
            <div class="card-content">
                <div class="chart-container">
                    <canvas id="rewardsChart" width="577" height="360" style="display: block; box-sizing: border-box; height: 360px; width: 577px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Mining Metrics Page Styling - Matching Theme */
        .mining-metrics-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Page Header */
        .page-header {
            text-align: center;
            margin-bottom: 30px;
            padding: 30px 0;
        }

        .page-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 8px;
        }

        .page-title i {
            font-size: 28px;
            color: #22c55e;
        }

        .page-title span {
            font-size: 28px;
            font-weight: 800;
            color: var(--text);
            background: linear-gradient(45deg, #22c55e, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .page-subtitle {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 500;
        }

        /* Metrics Grid */
        .metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        /* Metric Cards */
        .metric-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 25px;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .metric-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
            opacity: 1;
        }

        .metric-card:hover {
            transform: translateY(-3px);
            border-color: rgba(34, 197, 94, 0.3);
            box-shadow: 0 15px 40px rgba(34, 197, 94, 0.1);
        }

        .metric-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .metric-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .metric-icon.efficiency {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .metric-icon.performance {
            background: rgba(236, 72, 153, 0.1);
            color: #ec4899;
            border: 1px solid rgba(236, 72, 153, 0.2);
        }

        .metric-info {
            flex: 1;
        }

        .metric-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
            margin: 0 0 4px 0;
        }

        .metric-label {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .metric-value {
            font-size: 32px;
            font-weight: 800;
            color: #22c55e;
            margin: 15px 0;
            text-align: center;
        }

        /* Quick Stats */
        .quick-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 20px;
        }

        .quick-stat {
            text-align: center;
            padding: 15px;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .quick-stat:hover {
            border-color: rgba(34, 197, 94, 0.3);
            background: rgba(34, 197, 94, 0.05);
        }

        .quick-stat-value {
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 5px;
        }

        .quick-stat-label {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Efficiency Gauge */
        .efficiency-gauge {
            text-align: center;
            padding: 20px 0;
        }

        .gauge-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 20px;
            position: relative;
            background: conic-gradient(#22c55e 0deg, #22c55e 0deg, rgba(255, 255, 255, 0.1) 0deg, rgba(255, 255, 255, 0.1) 360deg);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gauge-circle.performance-gauge {
            background: conic-gradient(#ec4899 0deg, #ec4899 0deg, rgba(255, 255, 255, 0.1) 0deg, rgba(255, 255, 255, 0.1) 360deg);
        }

        .gauge-center {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
        }

        /* Content Row */
        .content-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-bottom: 30px;
        }

        /* Revenue Card */
        .revenue-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .revenue-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #22c55e, #3b82f6);
            opacity: 1;
        }

        .card-header {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(59, 130, 246, 0.1));
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 20px 25px;
        }

        .card-header h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
            margin: 0 0 5px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card-header h3 i {
            color: #22c55e;
        }

        .card-header p {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.7);
            margin: 0;
            font-weight: 500;
        }

        .card-content {
            padding: 25px;
        }

        .revenue-value {
            font-size: 32px;
            font-weight: 800;
            color: #22c55e;
            text-align: center;
            margin: 20px 0;
        }

        .revenue-breakdown {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }

        .breakdown-item {
            text-align: center;
            padding: 15px;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }

        .breakdown-value {
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 5px;
        }

        .breakdown-label {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Plans Card */
        .plans-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .plans-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #f59e0b, #ec4899);
            opacity: 1;
        }

        .plans-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .plan-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .plan-item:hover {
            border-color: rgba(34, 197, 94, 0.3);
            background: rgba(34, 197, 94, 0.05);
        }

        .plan-info {
            flex: 1;
        }

        .plan-power {
            font-size: 16px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 4px;
        }

        .plan-date {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-badge.active {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: rgba(255, 255, 255, 0.6);
        }

        .empty-icon {
            font-size: 48px;
            color: #f59e0b;
            margin-bottom: 15px;
        }

        .empty-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 8px;
        }

        .empty-description {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
        }

        /* Chart Card */
        .chart-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .chart-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #3b82f6, #6366f1);
            opacity: 1;
        }

        .chart-container {
            height: 400px;
            padding: 20px;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .metrics-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
            }

            .content-row {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .mining-metrics-container {
                padding: 15px;
            }

            .page-title span {
                font-size: 24px;
            }

            .page-title i {
                font-size: 24px;
            }

            .metrics-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .metric-card {
                padding: 20px;
            }

            .metric-value {
                font-size: 28px;
            }

            .revenue-value {
                font-size: 28px;
            }

            .chart-container {
                height: 300px;
                padding: 15px;
            }
        }

        @media (max-width: 576px) {
            .page-title {
                flex-direction: column;
                gap: 8px;
            }

            .metric-header {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            .quick-stats {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .revenue-breakdown {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .plan-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .chart-container {
                height: 250px;
                padding: 10px;
            }
        }
    </style>
</div>
</x-layout_backend>