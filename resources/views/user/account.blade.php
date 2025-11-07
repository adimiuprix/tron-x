<x-layout_backend :user="$user">

    <div class="container hero-dash">
        <!-- Balance Section - Three Columns in One Row -->
        <div class="stats-grid">
            <!-- Column 1: Balance -->
            <div class="stat-card text-center">
                <div class="floating-particles"></div>
                <div class="stat-label">
                    <i class="fa fa-wallet" style="margin-right: 6px; color: #22c55e;"></i>Balance
                </div>
                <div class="stat-value">
                    <span id="miningBalance">{{ $balance }}</span> TRX
                </div>
                <div class="stat-label">Daily Profit: 
                    <span id="dailyProfit">895.823670</span> TRX
                </div>
            </div>

            <!-- Column 2: Current Value -->
            <div class="stat-card text-center">
                <div class="floating-particles"></div>
                <div class="stat-label"><i class="fa fa-dollar-sign" style="margin-right: 6px; color: #3b82f6;"></i>Current Value</div>
                <div class="stat-value"><span id="fiatBalance">0.00000</span> USD</div>
                <div class="stat-label" style="margin-top: 8px;">May vary based on market value</div>
            </div>

            <!-- Column 3: Hashpower -->
            <div class="stat-card text-center">
                <div class="floating-particles"></div>
                <div class="stat-label"><i class="fa fa-microchip" style="margin-right: 6px; color: #f59e0b;"></i>Hashpower</div>
                <div class="stat-value">0 GH/s</div>
                <div class="stat-label" style="margin-top: 8px;">Total mining power</div>
                <div class="stat-label" style="margin-top: 8px;">Referrals: <strong>0</strong> — <a href="https://tronx.site/referral-tools">view details</a></div>
            </div>
        </div>

        <!-- Quick Actions Card - Styled like Financial Summary -->
        <div class="quick-actions-card">
            <div class="quick-actions-content">
                <div class="quick-actions-buttons">
                    <a class="quick-action-btn primary" href="{{ route('buy.hash') }}"> <i class="fa fa-bolt"></i> Buy Hash </a>
                    <a class="quick-action-btn" href="#withdrawalModal" data-toggle="modal" data-target="#withdrawalModal"> <i class="fa fa-money-bill"></i> Withdraw </a>
                    <a class="quick-action-btn" href="{{ route('mining.metrics') }}"> <i class="fa fa-chart-line"></i> Mining Metrics </a>
                    <a class="quick-action-btn" href="{{ route('referrals') }}"> <i class="fa fa-link"></i> Referral Tools </a>
                    <a class="quick-action-btn" href="{{ route('tickets') }}"> <i class="fa fa-life-ring"></i> Support </a>
                    <a class="quick-action-btn" href=""> <i class="fa fa-newspaper"></i> News </a>
                    <a class="quick-action-btn" href="javascript:void(0);" data-toggle="modal" data-target="#faqsModal"> <i class="fa fa-question-circle"></i> FAQs </a>
                </div>
            </div>
        </div>

        <!-- Daily Bonus Card -->
        <div class="row">
            <div class="col-12">
                <div
                    id="daily-bonus-card"
                    class="card"
                    style="
                        display: block;
                        margin-bottom: 20px;
                        background: linear-gradient(135deg, rgba(34, 197, 94, 0.08) 0%, rgba(59, 130, 246, 0.08) 100%);
                        border: 1px solid rgba(34, 197, 94, 0.3);
                        border-radius: 12px;
                        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
                    "
                >
                    <div class="card-body" style="padding: 18px;">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="card-title mb-2" style="color: #16a34a; font-weight: 700; font-size: 18px; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);">
                                    <i class="fa fa-gift" style="margin-right: 8px; color: #22c55e;"></i> <span id="bonus-title">30-Minute Bonus</span>
                                </h5>
                                <p class="card-text mb-0" style="font-size: 14px; color: #374151; font-weight: 500; line-height: 1.4;">
                                    <span id="bonus-amount-text" style="color: #059669; font-weight: 600;">30-Minute Bonus: 0.6 TRX</span>
                                </p>
                            </div>
                            <div class="col-md-4 text-right">
                                <!-- Hidden CSRF token for JavaScript -->
                                @csrf

                                <div id="bonus-button-container">
                                    <!-- hCaptcha -->
                                    <div id="captcha-container" style="margin-bottom: 10px; display: none;">
                                        <div
                                            class="h-captcha"
                                            data-sitekey="c00aa9b2-8c52-4324-aad2-9f52072077b2"
                                            data-callback="onCaptchaSuccess"
                                            data-expired-callback="onCaptchaExpired"
                                            data-error-callback="onCaptchaError"
                                            data-theme="light"
                                            data-size="normal"
                                        >
                                            <iframe
                                                src="https://newassets.hcaptcha.com/captcha/v1/13a948065e01b6100efd3266e69e8db867f5d462/static/hcaptcha.html#frame=checkbox&amp;id=0esrm9wd9qs9&amp;host=tronx.site&amp;sentry=true&amp;reportapi=https%3A%2F%2Faccounts.hcaptcha.com&amp;recaptchacompat=true&amp;custom=false&amp;hl=en&amp;tplinks=on&amp;andint=off&amp;pstissuer=https%3A%2F%2Fpst-issuer.hcaptcha.com&amp;sitekey=c00aa9b2-8c52-4324-aad2-9f52072077b2&amp;theme=light&amp;size=normal&amp;origin=https%3A%2F%2Ftronx.site"
                                                tabindex="0"
                                                frameborder="0"
                                                scrolling="no"
                                                allow="private-state-token-redemption"
                                                title="Widget containing checkbox for hCaptcha security challenge"
                                                data-hcaptcha-widget-id="0esrm9wd9qs9"
                                                data-hcaptcha-response=""
                                                style="pointer-events: auto; background-color: rgba(255, 255, 255, 0); border-radius: 4px; width: 302px; height: 76px; overflow: hidden;"
                                            ></iframe>
                                            <textarea id="g-recaptcha-response-0esrm9wd9qs9" name="g-recaptcha-response" style="display: none;"></textarea>
                                            <textarea id="h-captcha-response-0esrm9wd9qs9" name="h-captcha-response" style="display: none;"></textarea>
                                        </div>
                                    </div>

                                    <button
                                        id="claim-bonus-btn"
                                        class="btn btn-success"
                                        style="display: inline-block; border-radius: 8px; padding: 10px 20px; font-weight: 600; font-size: 14px; box-shadow: rgba(34, 197, 94, 0.3) 0px 2px 4px;"
                                    >
                                        <i class="fa fa-gift"></i> <span id="bonus-btn-text">Claim 30-Minute Bonus</span>
                                    </button>
                                    <div id="bonus-timer" style="display: none; font-size: 13px; color: #6b7280; font-weight: 500;">
                                        <i class="fa fa-clock" style="margin-right: 4px;"></i> Next claim in:
                                        <span id="bonus-countdown" style="color: #d97706; font-weight: 700; background: rgba(245, 158, 11, 0.1); padding: 2px 6px; border-radius: 4px;">--</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Financial Summary Card - Below Quick Actions -->
        <div class="financial-summary-card">
            <div class="financial-header">
                <h3><i class="fa fa-chart-pie"></i> Financial Summary</h3>
            </div>
            <div class="financial-stats-grid">
                <div class="financial-stat-item">
                    <div class="stat-icon">
                        <i class="fa fa-arrow-down"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">Total Deposits</div>
                        <div class="stat-value">0.000000 TRX</div>
                        <div class="stat-usd">≈ $0.00 USD</div>
                    </div>
                </div>
                <div class="financial-stat-item">
                    <div class="stat-icon">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">Total Withdrawals</div>
                        <div class="stat-value">0.000000 TRX</div>
                        <div class="stat-usd">≈ $0.00 USD</div>
                    </div>
                </div>
                <div class="financial-stat-item">
                    <div class="stat-icon">
                        <i class="fa fa-wallet"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">Current Balance</div>
                        <div class="stat-value">0.000000 TRX</div>
                        <div class="stat-usd">≈ $0.00 USD</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Advanced Profit Details Card - Below Buttons Card -->
        <div class="profit-details-card">
            <div class="profit-header">
                <div class="profit-title">
                    <i class="fa fa-chart-line"></i>
                    Profit Analytics
                </div>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <span style="font-size: 11px; color: var(--muted); padding: 4px 8px; background: rgba(34, 197, 94, 0.1); border-radius: 8px; border: 1px solid rgba(34, 197, 94, 0.2);">
                        <i class="fa fa-sync-alt" style="margin-right: 4px;"></i>Live Data
                    </span>
                </div>
            </div>

            <!-- Profit Statistics Grid -->
            <div class="profit-stats-grid">
                <div class="profit-stat-item">
                    <div class="profit-stat-label">Profit per Minute</div>
                    <div class="profit-stat-value">0.000000</div>
                    <div class="profit-stat-change positive">+$0.00</div>
                </div>

                <div class="profit-stat-item">
                    <div class="profit-stat-label">Profit per Hour</div>
                    <div class="profit-stat-value">0.000000</div>
                    <div class="profit-stat-change positive">+$0.00</div>
                </div>

                <div class="profit-stat-item">
                    <div class="profit-stat-label">Daily Profit</div>
                    <div class="profit-stat-value" id="profitDailyProfit">2.000000</div>
                    <div class="profit-stat-change positive">+$0.00</div>
                </div>

                <div class="profit-stat-item">
                    <div class="profit-stat-label">Weekly Profit</div>
                    <div class="profit-stat-value">0.000000</div>
                    <div class="profit-stat-change positive">+$0.00</div>
                </div>

                <div class="profit-stat-item">
                    <div class="profit-stat-label">Monthly Profit</div>
                    <div class="profit-stat-value">0.000000</div>
                    <div class="profit-stat-change positive">+$0.00</div>
                </div>

                <div class="profit-stat-item">
                    <div class="profit-stat-label">Yearly Profit</div>
                    <div class="profit-stat-value">0.000000</div>
                    <div class="profit-stat-change positive">+$0.00</div>
                </div>
            </div>

            <!-- Mining Rewards History (Last 30 Days) -->
            <div class="mining-rewards-container">
                <div class="mining-rewards-header">
                    <div class="mining-rewards-title">
                        <i class="fa fa-coins"></i>
                        <span>Mining Rewards History (Last 30 Days)</span>
                    </div>
                    <div class="mining-rewards-actions">
                        <a href="https://tronx.site/mining-metrics" class="btn btn-sm btn-outline-primary">
                            <i class="fa fa-chart-line"></i>
                            View Full Metrics
                        </a>
                    </div>
                </div>

                <!-- Mining Status Summary -->
                <div class="mining-status-summary" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; margin-bottom: 20px; padding: 15px; background: rgba(0, 0, 0, 0.1); border-radius: 8px;">
                    <div style="text-align: center;">
                        <div style="font-size: 10px; color: var(--muted); margin-bottom: 4px;">Mining Status</div>
                        <div style="font-size: 14px; color: rgb(239, 68, 68); font-weight: 700;" id="miningStatus"><i class="fa fa-times-circle" style="margin-right: 4px;"></i>Not Active</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 10px; color: var(--muted); margin-bottom: 4px;">Hashpower</div>
                        <div style="font-size: 14px; color: #3b82f6; font-weight: 700;">0 GH/s</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 10px; color: var(--muted); margin-bottom: 4px;">Daily Profit</div>
                        <div style="font-size: 14px; color: #f59e0b; font-weight: 700;">0.00000000 TRX</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 10px; color: var(--muted); margin-bottom: 4px;">Mining Power Expiry</div>
                        <div style="font-size: 14px; font-weight: 700; color: rgb(239, 68, 68);" id="miningDuration">No Active Plans</div>
                    </div>
                </div>

                <!-- 30-Day Rewards Chart -->
                <div class="rewards-chart-container">
                    <div class="rewards-chart-header">
                        <div class="rewards-chart-title">
                            <span id="rewardsChartTitle">30-Day Mining Rewards</span>
                            <span id="rewardsChartSubtitle" style="font-size: 12px; color: var(--muted); margin-left: 10px; font-weight: normal;">Daily mining rewards and cumulative earnings</span>
                        </div>
                        <div class="rewards-chart-legend" style="display: flex; align-items: center; flex-wrap: wrap; gap: 8px;">
                            <div class="legend-item" style="display: flex; align-items: center; margin-right: 16px;">
                                <div class="legend-color" style="background: #22c55e; width: 12px; height: 12px; border-radius: 50%; margin-right: 8px; box-shadow: 0 0 8px rgba(34, 197, 94, 0.5); flex-shrink: 0;"></div>
                                <span style="color: #22c55e; font-weight: 600; line-height: 1;">Daily Rewards</span>
                            </div>
                            <div class="legend-item" style="display: flex; align-items: center; margin-right: 16px;">
                                <div class="legend-color" style="background: #3b82f6; width: 12px; height: 12px; border-radius: 50%; margin-right: 8px; box-shadow: 0 0 8px rgba(59, 130, 246, 0.5); flex-shrink: 0;"></div>
                                <span style="color: #3b82f6; font-weight: 600; line-height: 1;">Cumulative Earnings</span>
                            </div>
                            <div class="legend-item" style="display: flex; align-items: center; margin-right: 16px;">
                                <div class="legend-color" style="background: #f59e0b; width: 12px; height: 12px; border-radius: 50%; margin-right: 8px; box-shadow: 0 0 8px rgba(245, 158, 11, 0.5); flex-shrink: 0;"></div>
                                <span style="color: #f59e0b; font-weight: 600; line-height: 1;">Hashpower</span>
                            </div>
                            <div class="legend-item" style="margin-left: auto;">
                                <span style="color: #22c55e; font-size: 10px;"> <i class="fa fa-check-circle" style="margin-right: 4px;"></i> Live Data </span>
                            </div>
                        </div>
                    </div>

                    <!-- Chart container -->
                    <div style="height: 200px; position: relative; background: rgba(0, 0, 0, 0.1); border-radius: 8px; padding: 10px;">
                        <canvas id="miningRewardsChart" style="width: 605px; height: 180px; display: block; box-sizing: border-box;" width="605" height="180"></canvas>
                        <div id="chartLoadingMessage" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: rgb(34, 197, 94); font-weight: 600; display: none;">
                            <i class="fa fa-spinner fa-spin" style="margin-right: 8px;"></i>
                            Loading Chart...
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Mining Dashboard Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", function (e) {
            let currentRate = 0.281107;
            let balance = document.getElementById("miningBalance");
            const fiatBalance = document.getElementById("fiatBalance");
            const dailyProfit = document.getElementById("dailyProfit");
            let daily_profit = dailyProfit.innerText;
            let balance_value = 95800.00000000;
            let per_second = (daily_profit / 86400).toFixed(15);

            setInterval(function () {
                balance_value = parseFloat(balance_value) + parseFloat(per_second);
                balance.innerText = parseFloat(balance_value).toFixed(6);
                fiatBalance.innerText = (balance.innerText * currentRate).toFixed(5);
            }, 100);

            // Initialize Daily Bonus System
            initializeDailyBonus();

            // User hashpower and daily profit rate for calculations
            const userHashpower = 0;
            const dailyProfitRate = 0.02334;

            // 30-Day Mining Rewards Chart
            const miningRewardsCtx = document.getElementById("miningRewardsChart").getContext("2d");

            // Get rewards history data from server
            const rewardsHistoryData = [
                { date: "Oct 06", reward: 0, hashpower: 0 },
                { date: "Oct 07", reward: 0, hashpower: 0 },
                { date: "Oct 08", reward: 0, hashpower: 0 },
                { date: "Oct 09", reward: 0, hashpower: 0 },
                { date: "Oct 10", reward: 0, hashpower: 0 },
                { date: "Oct 11", reward: 0, hashpower: 0 },
                { date: "Oct 12", reward: 0, hashpower: 0 },
                { date: "Oct 13", reward: 0, hashpower: 0 },
                { date: "Oct 14", reward: 0, hashpower: 0 },
                { date: "Oct 15", reward: 0, hashpower: 0 },
                { date: "Oct 16", reward: 0, hashpower: 0 },
                { date: "Oct 17", reward: 0, hashpower: 0 },
                { date: "Oct 18", reward: 0, hashpower: 0 },
                { date: "Oct 19", reward: 0, hashpower: 0 },
                { date: "Oct 20", reward: 0, hashpower: 0 },
                { date: "Oct 21", reward: 0, hashpower: 0 },
                { date: "Oct 22", reward: 0, hashpower: 0 },
                { date: "Oct 23", reward: 0, hashpower: 0 },
                { date: "Oct 24", reward: 0, hashpower: 0 },
                { date: "Oct 25", reward: 0, hashpower: 0 },
                { date: "Oct 26", reward: 0, hashpower: 0 },
                { date: "Oct 27", reward: 0, hashpower: 0 },
                { date: "Oct 28", reward: 0, hashpower: 0 },
                { date: "Oct 29", reward: 0, hashpower: 0 },
                { date: "Oct 30", reward: 0, hashpower: 0 },
                { date: "Oct 31", reward: 0, hashpower: 0 },
                { date: "Nov 01", reward: 0, hashpower: 0 },
                { date: "Nov 02", reward: 0, hashpower: 0 },
                { date: "Nov 03", reward: 0, hashpower: 0 },
                { date: "Nov 04", reward: 0, hashpower: 0 },
            ];

            // Function to process server-side rewards data
            const processRewardsData = () => {
                const labels = [];
                const rewardsData = [];
                const cumulativeData = [];
                const hashpowerData = [];

                let cumulativeRewards = 0;

                rewardsHistoryData.forEach((item, index) => {
                    // Format date label
                    const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

                    let dateLabel = item.date;
                    if (index === 0) {
                        dateLabel = "Today";
                    } else if (index === rewardsHistoryData.length - 1) {
                        // First day in the 30-day period
                        const date = new Date();
                        date.setDate(date.getDate() - 29);
                        const dayName = dayNames[date.getDay()];
                        const dayDate = date.getDate();
                        const monthName = monthNames[date.getMonth()];
                        dateLabel = dayName + " " + dayDate + " " + monthName;
                    }

                    labels.push(dateLabel);
                    rewardsData.push(item.reward);
                    cumulativeRewards += item.reward;
                    cumulativeData.push(cumulativeRewards);
                    hashpowerData.push(item.hashpower);
                });

                return {
                    labels: labels,
                    rewardsData: rewardsData,
                    cumulativeData: cumulativeData,
                    hashpowerData: hashpowerData,
                };
            };

            // Initialize 30-day mining rewards chart
            const chartData = processRewardsData();

            // Debug: Log chart data
            console.log("Chart Data:", chartData);
            console.log("Chart.js version:", Chart.version);

            // Show loading message
            const loadingMessage = document.getElementById("chartLoadingMessage");
            if (loadingMessage) {
                loadingMessage.style.display = "block";
            }

            // Ensure Chart.js is loaded
            if (typeof Chart === "undefined") {
                console.error("Chart.js is not loaded!");
                if (loadingMessage) {
                    loadingMessage.innerHTML = '<i class="fa fa-exclamation-triangle" style="margin-right: 8px;"></i>Chart.js not loaded!';
                    loadingMessage.style.color = "#ef4444";
                }
                return;
            }

            try {
                document.addEventListener("DOMContentLoaded", function () {
                    const miningRewardsCtx = document.getElementById("miningRewardsChart").getContext("2d");
                    const loading = document.getElementById("chartLoadingMessage");

                    loading.style.display = "block";

                    const rewardsHistoryData = [
                        { date: "Oct 06", reward: 0, hashpower: 0 },
                        { date: "Oct 07", reward: 0, hashpower: 0 },
                        { date: "Oct 08", reward: 0, hashpower: 0 },
                        { date: "Oct 09", reward: 0, hashpower: 0 },
                        { date: "Oct 10", reward: 0, hashpower: 0 },
                        { date: "Oct 11", reward: 0, hashpower: 0 },
                        { date: "Oct 12", reward: 0, hashpower: 0 },
                        { date: "Oct 13", reward: 0, hashpower: 0 },
                        { date: "Oct 14", reward: 0, hashpower: 0 },
                        { date: "Oct 15", reward: 0, hashpower: 0 },
                        { date: "Oct 16", reward: 0, hashpower: 0 },
                        { date: "Oct 17", reward: 0, hashpower: 0 },
                        { date: "Oct 18", reward: 0, hashpower: 0 },
                        { date: "Oct 19", reward: 0, hashpower: 0 },
                        { date: "Oct 20", reward: 0, hashpower: 0 },
                        { date: "Oct 21", reward: 0, hashpower: 0 },
                        { date: "Oct 22", reward: 0, hashpower: 0 },
                        { date: "Oct 23", reward: 0, hashpower: 0 },
                        { date: "Oct 24", reward: 0, hashpower: 0 },
                        { date: "Oct 25", reward: 0, hashpower: 0 },
                        { date: "Oct 26", reward: 0, hashpower: 0 },
                        { date: "Oct 27", reward: 0, hashpower: 0 },
                        { date: "Oct 28", reward: 0, hashpower: 0 },
                        { date: "Oct 29", reward: 0, hashpower: 0 },
                        { date: "Oct 30", reward: 0, hashpower: 0 },
                        { date: "Oct 31", reward: 0, hashpower: 0 },
                        { date: "Nov 01", reward: 0, hashpower: 0 },
                        { date: "Nov 02", reward: 0, hashpower: 0 },
                        { date: "Nov 03", reward: 0, hashpower: 0 },
                        { date: "Nov 04", reward: 0, hashpower: 0 },
                    ];

                    const processRewardsData = () => {
                        const labels = [];
                        const rewardsData = [];
                        const cumulativeData = [];
                        const hashpowerData = [];
                        let cumulativeRewards = 0;

                        rewardsHistoryData.forEach((item, index) => {
                            const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                            const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                            let dateLabel = item.date;

                            if (index === 0) {
                                dateLabel = "Today";
                            } else if (index === rewardsHistoryData.length - 1) {
                                const date = new Date();
                                date.setDate(date.getDate() - 29);
                                const dayName = dayNames[date.getDay()];
                                const dayDate = date.getDate();
                                const monthName = monthNames[date.getMonth()];
                                dateLabel = dayName + " " + dayDate + " " + monthName;
                            }

                            labels.push(dateLabel);
                            rewardsData.push(item.reward);
                            cumulativeRewards += item.reward;
                            cumulativeData.push(cumulativeRewards);
                            hashpowerData.push(item.hashpower);
                        });

                        return { labels, rewardsData, cumulativeData, hashpowerData };
                    };

                    const chartData = processRewardsData();

                    // render chart
                    setTimeout(() => {
                        new Chart(miningRewardsCtx, {
                            type: "line",
                            data: {
                                labels: chartData.labels,
                                datasets: [
                                    {
                                        label: "Daily Reward (BIE)",
                                        data: chartData.rewardsData,
                                        borderColor: "rgba(34, 197, 94, 1)",
                                        backgroundColor: "rgba(34, 197, 94, 0.3)",
                                        borderWidth: 2,
                                        tension: 0.3,
                                        fill: true,
                                        yAxisID: 'y',
                                    },
                                    {
                                        label: "Hashpower (H/s)",
                                        data: chartData.hashpowerData,
                                        borderColor: "rgba(59, 130, 246, 1)",
                                        backgroundColor: "rgba(59, 130, 246, 0.3)",
                                        borderWidth: 2,
                                        tension: 0.3,
                                        fill: false,
                                        yAxisID: 'y1',
                                    }
                                ],
                            },
                            options: {
                                responsive: true,
                                interaction: { mode: "index", intersect: false },
                                stacked: false,
                                plugins: {
                                    legend: { display: true, labels: { color: "#22c55e" } },
                                },
                                scales: {
                                    y: {
                                        type: "linear",
                                        display: true,
                                        position: "left",
                                        beginAtZero: true,
                                        grid: { color: "rgba(255,255,255,0.1)" },
                                    },
                                    y1: {
                                        type: "linear",
                                        display: true,
                                        position: "right",
                                        beginAtZero: true,
                                        grid: { drawOnChartArea: false },
                                    },
                                    x: {
                                        ticks: { color: "#ccc" },
                                        grid: { color: "rgba(255,255,255,0.05)" },
                                    }
                                }
                            },
                        });

                        loading.style.display = "none";
                    }, 1000);
                });

                // Hide loading message on success
                if (loadingMessage) {
                    loadingMessage.style.display = "none";
                }

                console.log("Chart created successfully!");
            } catch (error) {
                console.error("Error creating chart:", error);
                if (loadingMessage) {
                    loadingMessage.innerHTML = '<i class="fa fa-exclamation-triangle" style="margin-right: 8px;"></i>Chart Error: ' + error.message;
                    loadingMessage.style.color = "#ef4444";
                }
            }
        });

        // Mobile-specific enhancements
        function initializeMobileEnhancements() {
            // Add touch gestures for mobile
            if ("ontouchstart" in window) {
                // Add swipe gestures for time tabs
                let startX = 0;
                let startY = 0;

                const timeTabsContainer = document.querySelector(".custom-time-tabs");
                if (timeTabsContainer) {
                    timeTabsContainer.addEventListener("touchstart", function (e) {
                        startX = e.touches[0].clientX;
                        startY = e.touches[0].clientY;
                    });

                    timeTabsContainer.addEventListener("touchend", function (e) {
                        const endX = e.changedTouches[0].clientX;
                        const endY = e.changedTouches[0].clientY;
                        const diffX = startX - endX;
                        const diffY = startY - endY;

                        // Horizontal swipe detected
                        if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
                            const tabs = Array.from(document.querySelectorAll(".custom-time-tab"));
                            const activeIndex = tabs.findIndex((tab) => tab.classList.contains("active"));

                            if (diffX > 0 && activeIndex < tabs.length - 1) {
                                // Swipe left - next tab
                                tabs[activeIndex + 1].click();
                            } else if (diffX < 0 && activeIndex > 0) {
                                // Swipe right - previous tab
                                tabs[activeIndex - 1].click();
                            }
                        }
                    });
                }
            }
        }

        // Advanced Profit Details Card Functionality
        function updateProfitDetails() {
            const profitDailyProfit = document.getElementById("profitDailyProfit");
            if (profitDailyProfit) {
                // Update daily profit with real-time calculation
                const currentBalance = parseFloat(balance.innerText);
                const newDailyProfit = currentBalance * 0.02334 * 86400; // Convert to daily
                profitDailyProfit.textContent = currency_format(newDailyProfit, 6);
            }

            // Update mining rewards chart with fresh data
            if (window.miningRewardsChart) {
                const newChartData = processRewardsData();
                window.miningRewardsChart.data.datasets[0].data = newChartData.rewardsData;
                window.miningRewardsChart.data.datasets[1].data = newChartData.cumulativeData;
                window.miningRewardsChart.data.datasets[2].data = newChartData.hashpowerData;
                window.miningRewardsChart.update("none");
            }
        }

        // Update mining status and duration
        function updateMiningStatus() {
            const miningStatus = document.getElementById("miningStatus");
            const miningDuration = document.getElementById("miningDuration");

            // Update mining status dynamically
            if (miningStatus) {
                const hasActiveMining = false;

                if (hasActiveMining) {
                    miningStatus.innerHTML = '<i class="fa fa-check-circle" style="margin-right: 4px;"></i>Active';
                    miningStatus.style.color = "#22c55e"; // Green for active
                } else {
                    miningStatus.innerHTML = '<i class="fa fa-times-circle" style="margin-right: 4px;"></i>Not Active';
                    miningStatus.style.color = "#ef4444"; // Red for not active
                }
            }

            // Update mining duration with server-side data
            if (miningDuration) {
                const miningDurationData = { text: "No Active Plans", days: 0, color: "#ef4444" };
                miningDuration.textContent = miningDurationData.text;
                miningDuration.style.color = miningDurationData.color;
            }
        }

        // Update profit details and mining status every 30 seconds for real-time feel
        setInterval(updateProfitDetails, 30000);
        setInterval(updateMiningStatus, 30000);

        // Add hover effects and animations to profit stat items
        document.addEventListener("DOMContentLoaded", function () {
            const profitStatItems = document.querySelectorAll(".profit-stat-item");

            profitStatItems.forEach((item) => {
                item.addEventListener("mouseenter", function () {
                    this.style.transform = "translateY(-3px) scale(1.02)";
                });

                item.addEventListener("mouseleave", function () {
                    this.style.transform = "translateY(0) scale(1)";
                });
            });

            // Initialize Mobile Enhancements
            initializeMobileEnhancements();
        });

        function startCountdown(seconds) {
            if (bonusCountdownInterval) {
                clearInterval(bonusCountdownInterval);
            }

            // Ensure seconds is a positive number
            let timeLeft = Math.max(0, Math.floor(seconds));
            const bonusCountdown = document.getElementById("bonus-countdown");

            console.log("Starting countdown with", timeLeft, "seconds");

            updateCountdown();
            bonusCountdownInterval = setInterval(updateCountdown, 1000);
        }

        // Captcha verification state
        let captchaVerified = false;
        let captchaToken = null;

        function claimBonus() {
            const claimBtn = document.getElementById("claim-bonus-btn");
            const originalText = claimBtn.innerHTML;
            const captchaContainer = document.getElementById("captcha-container");

            console.log("Claim bonus button clicked");

            // Check if captcha is enabled
            const captchaEnabled = true;

            if (captchaEnabled && !captchaVerified) {
                // Show captcha if not verified and disable claim button
                captchaContainer.style.display = "block";
                claimBtn.disabled = true;
                claimBtn.innerHTML = '<i class="fa fa-shield-alt"></i> Complete Verification';
                claimBtn.classList.remove("btn-success");
                claimBtn.classList.add("btn-warning");
                showBonusNotification("info", "Please complete the security verification to claim your bonus.");
                return;
            }

            // Check CSRF token
            let csrfToken = document.querySelector('meta[name="csrf-token"]');
            let csrfTokenValue = null;

            if (csrfToken) {
                csrfTokenValue = csrfToken.getAttribute("content");
            } else {
                // Fallback: try to get from form input
                const csrfInput = document.querySelector('input[name="_token"]');
                if (csrfInput) {
                    csrfTokenValue = csrfInput.value;
                }
            }

            if (!csrfTokenValue) {
                console.error("CSRF token not found");
                showBonusNotification("error", "Security token not found. Please refresh the page.");
                // Restore button
                claimBtn.disabled = false;
                claimBtn.innerHTML = originalText;
                claimBtn.classList.remove("btn-secondary");
                claimBtn.classList.add("btn-success");
                return;
            }

            // Disable button and show loading
            claimBtn.disabled = true;
            claimBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Claiming...';
            claimBtn.classList.remove("btn-success");
            claimBtn.classList.add("btn-secondary");

            console.log("CSRF Token:", csrfTokenValue);

            // Prepare request data
            const requestData = {
                _token: csrfTokenValue,
            };

            // Add captcha token if enabled and verified
            if (captchaEnabled && captchaToken) {
                requestData.captcha_token = captchaToken;
            }

            fetch("/daily-bonus/claim", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfTokenValue,
                },
                body: JSON.stringify(requestData),
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log("Bonus claim response:", data);

                    if (data.success) {
                        // Show success message
                        showBonusNotification("success", data.message);

                        // Update button to show success state briefly
                        claimBtn.innerHTML = '<i class="fa fa-check"></i> Claimed!';
                        claimBtn.classList.remove("btn-secondary");
                        claimBtn.classList.add("btn-success");

                        // Refresh the page after 2 seconds to show updated balance
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        // Show error message
                        showBonusNotification("error", data.message);

                        // Restore button
                        claimBtn.disabled = false;
                        claimBtn.innerHTML = originalText;
                        claimBtn.classList.remove("btn-secondary");
                        claimBtn.classList.add("btn-success");
                    }
                })
                .catch((error) => {
                    console.error("Error claiming bonus:", error);
                    showBonusNotification("error", "Failed to claim bonus. Please try again.");

                    // Restore button
                    claimBtn.disabled = false;
                    claimBtn.innerHTML = originalText;
                    claimBtn.classList.remove("btn-secondary");
                    claimBtn.classList.add("btn-success");
                });
        }

        // Captcha callback functions
        function onCaptchaSuccess(token) {
            console.log("Captcha verification successful");
            captchaVerified = true;
            captchaToken = token;

            // Hide captcha container
            const captchaContainer = document.getElementById("captcha-container");
            captchaContainer.style.display = "none";

            // Re-enable claim button and change appearance
            const claimBtn = document.getElementById("claim-bonus-btn");
            claimBtn.disabled = false;
            claimBtn.innerHTML = '<i class="fa fa-gift"></i> <span id="bonus-btn-text">Claim Daily Bonus</span>';
            claimBtn.classList.remove("btn-warning");
            claimBtn.classList.add("btn-success");
        }

        function onCaptchaExpired() {
            console.log("Captcha expired");
            captchaVerified = false;
            captchaToken = null;

            // Disable claim button and change appearance
            const claimBtn = document.getElementById("claim-bonus-btn");
            claimBtn.disabled = true;
            claimBtn.innerHTML = '<i class="fa fa-shield-alt"></i> Complete Verification';
            claimBtn.classList.remove("btn-success");
            claimBtn.classList.add("btn-warning");

            showBonusNotification("warning", "Security verification expired. Please verify again.");
        }

        function onCaptchaError() {
            console.log("Captcha error");
            captchaVerified = false;
            captchaToken = null;

            // Disable claim button and change appearance
            const claimBtn = document.getElementById("claim-bonus-btn");
            claimBtn.disabled = true;
            claimBtn.innerHTML = '<i class="fa fa-shield-alt"></i> Complete Verification';
            claimBtn.classList.remove("btn-success");
            claimBtn.classList.add("btn-warning");

            showBonusNotification("error", "Security verification failed. Please try again.");
        }

        function showBonusNotification(type, message) {
            // Create notification element
            const notification = document.createElement("div");
            notification.className = `alert alert-${type === "success" ? "success" : "danger"} alert-dismissible fade show`;
            notification.style.position = "fixed";
            notification.style.top = "20px";
            notification.style.right = "20px";
            notification.style.zIndex = "9999";
            notification.style.minWidth = "350px";
            notification.style.fontWeight = "500";

            if (type === "success") {
                notification.innerHTML = `
                <i class="fa fa-check-circle"></i>
                ${message}
                <br><small style="opacity: 0.8;">Page will refresh in 2 seconds...</small>
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
            `;
            } else {
                notification.innerHTML = `
                <i class="fa fa-exclamation-circle"></i>
                ${message}
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
            `;
            }

            document.body.appendChild(notification);

            // Auto-remove after 5 seconds (for error messages)
            if (type !== "success") {
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 5000);
            }
        }
    </script>

    <!-- 30-Day Mining Rewards Chart Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const miningRewardsCtx = document.getElementById("miningRewardsChart").getContext("2d");
            const loading = document.getElementById("chartLoadingMessage");

            loading.style.display = "block";

            const rewardsHistoryData = [
                { date: "Oct 06", reward: 0, hashpower: 0 },
                { date: "Oct 07", reward: 0, hashpower: 0 },
                { date: "Oct 08", reward: 0, hashpower: 0 },
                { date: "Oct 09", reward: 0, hashpower: 0 },
                { date: "Oct 10", reward: 0, hashpower: 0 },
                { date: "Oct 11", reward: 0, hashpower: 0 },
                { date: "Oct 12", reward: 0, hashpower: 0 },
                { date: "Oct 13", reward: 0, hashpower: 0 },
                { date: "Oct 14", reward: 0, hashpower: 0 },
                { date: "Oct 15", reward: 0, hashpower: 0 },
                { date: "Oct 16", reward: 0, hashpower: 0 },
                { date: "Oct 17", reward: 0, hashpower: 0 },
                { date: "Oct 18", reward: 0, hashpower: 0 },
                { date: "Oct 19", reward: 0, hashpower: 0 },
                { date: "Oct 20", reward: 0, hashpower: 0 },
                { date: "Oct 21", reward: 0, hashpower: 0 },
                { date: "Oct 22", reward: 0, hashpower: 0 },
                { date: "Oct 23", reward: 0, hashpower: 0 },
                { date: "Oct 24", reward: 0, hashpower: 0 },
                { date: "Oct 25", reward: 0, hashpower: 0 },
                { date: "Oct 26", reward: 0, hashpower: 0 },
                { date: "Oct 27", reward: 0, hashpower: 0 },
                { date: "Oct 28", reward: 0, hashpower: 0 },
                { date: "Oct 29", reward: 0, hashpower: 0 },
                { date: "Oct 30", reward: 0, hashpower: 0 },
                { date: "Oct 31", reward: 0, hashpower: 0 },
                { date: "Nov 01", reward: 0, hashpower: 0 },
                { date: "Nov 02", reward: 0, hashpower: 0 },
                { date: "Nov 03", reward: 0, hashpower: 0 },
                { date: "Nov 04", reward: 0, hashpower: 0 },
            ];

            const processRewardsData = () => {
                const labels = [];
                const rewardsData = [];
                const cumulativeData = [];
                const hashpowerData = [];
                let cumulativeRewards = 0;

                rewardsHistoryData.forEach((item, index) => {
                    const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                    let dateLabel = item.date;

                    if (index === 0) {
                        dateLabel = "Today";
                    } else if (index === rewardsHistoryData.length - 1) {
                        const date = new Date();
                        date.setDate(date.getDate() - 29);
                        const dayName = dayNames[date.getDay()];
                        const dayDate = date.getDate();
                        const monthName = monthNames[date.getMonth()];
                        dateLabel = dayName + " " + dayDate + " " + monthName;
                    }

                    labels.push(dateLabel);
                    rewardsData.push(item.reward);
                    cumulativeRewards += item.reward;
                    cumulativeData.push(cumulativeRewards);
                    hashpowerData.push(item.hashpower);
                });

                return { labels, rewardsData, cumulativeData, hashpowerData };
            };

            const chartData = processRewardsData();

            // render chart
            setTimeout(() => {
                new Chart(miningRewardsCtx, {
                    type: "line",
                    data: {
                        labels: chartData.labels,
                        datasets: [
                            {
                                label: "Daily Reward (BIE)",
                                data: chartData.rewardsData,
                                borderColor: "rgba(34, 197, 94, 1)",
                                backgroundColor: "rgba(34, 197, 94, 0.3)",
                                borderWidth: 2,
                                tension: 0.3,
                                fill: true,
                                yAxisID: 'y',
                            },
                            {
                                label: "Hashpower (H/s)",
                                data: chartData.hashpowerData,
                                borderColor: "rgba(59, 130, 246, 1)",
                                backgroundColor: "rgba(59, 130, 246, 0.3)",
                                borderWidth: 2,
                                tension: 0.3,
                                fill: false,
                                yAxisID: 'y1',
                            }
                        ],
                    },
                    options: {
                        responsive: true,
                        interaction: { mode: "index", intersect: false },
                        stacked: false,
                        plugins: {
                            legend: { display: true, labels: { color: "#22c55e" } },
                        },
                        scales: {
                            y: {
                                type: "linear",
                                display: true,
                                position: "left",
                                beginAtZero: true,
                                grid: { color: "rgba(255,255,255,0.1)" },
                            },
                            y1: {
                                type: "linear",
                                display: true,
                                position: "right",
                                beginAtZero: true,
                                grid: { drawOnChartArea: false },
                            },
                            x: {
                                ticks: { color: "#ccc" },
                                grid: { color: "rgba(255,255,255,0.05)" },
                            }
                        }
                    },
                });

                loading.style.display = "none";
            }, 1000);
        });
    </script>

</x-layout_backend>
