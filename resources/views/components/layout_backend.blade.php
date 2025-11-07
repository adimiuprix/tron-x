<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="YJB04lKZqwZJYELpppdnjo2ZtLzKPWTT0s3yhsPX" />

        <title>TronX - Dashboard</title>
        <meta name="description" content="TronX Cloud Mining – Mine cryptocurrency effortlessly with instant payouts, secure cloud servers, and high ROI plans. Start your crypto mining journey today!" />
        <meta name="keywords" content="TronX, TronX Cloud Mining, cryptocurrency mining, Bitcoin mining, Ethereum mining, cloud mining, instant crypto payouts, secure crypto mining, crypto investment, mining plans, passive income crypto, TronX mining platform" />

        <!--Favicons-->
        <link rel="apple-touch-icon" sizes="57x57" href="https://tronx.site/assets/favicons/apple-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="https://tronx.site/assets/favicons/apple-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="https://tronx.site/assets/favicons/apple-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="https://tronx.site/assets/favicons/apple-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="https://tronx.site/assets/favicons/apple-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="https://tronx.site/assets/favicons/apple-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="https://tronx.site/assets/favicons/apple-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="https://tronx.site/assets/favicons/apple-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="https://tronx.site/assets/favicons/apple-icon-180x180.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="https://tronx.site/assets/favicons/android-icon-192x192.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="https://tronx.site/assets/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="https://tronx.site/assets/favicons/favicon-96x96.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="https://tronx.site/assets/favicons/favicon-16x16.png" />
        <meta name="theme-color" content="#0b0f1a" />

        <!-- Resource hints for better performance -->
        <link rel="dns-prefetch" href="https://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="https://cdn.jsdelivr.net" />
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />

        <!-- Preload critical CSS files -->
        <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'" />
        <link rel="stylesheet" href="{{ asset('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'" />
        <link rel="stylesheet" href="{{ asset('assets/js/plugins/nucleo/css/nucleo.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'" />

        <!-- Fonts (match homepage TRON theme) -->
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />

        <!-- Icons / Argon (keep for existing cards/components) - Fallback for browsers without preload support -->
        <link href="{{ asset('assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/js/plugins/@fontawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/argon-dashboard.css') }}" rel="stylesheet" type="text/css" />

        <style>
            /* Critical CSS - Load immediately to prevent FOUC */
            html,
            body {
                margin: 0;
                padding: 0;
                background: #000000;
                color: #ffffff;
                font-family: "Rajdhani", system-ui, -apple-system, sans-serif;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            /* Hide content until CSS loads */
            .dashboard-wrap {
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }

            .dashboard-wrap.loaded {
                opacity: 1;
            }

            :root {
                /* TRON homepage palette */
                --tron-black: #000000;
                --tron-red: #ff060a;
                --tron-red-light: #ff4444;
                --tron-red-dark: #cc0000;
                --tron-white: #ffffff;
                --tron-white-dim: #f0f0f0;
                --tron-dark: #0a0a0a;
                --tron-gray: #1a1a1a;
                --tron-light-gray: #2a2a2a;
                --tron-text: #ffffff;
                --tron-text-secondary: #cccccc;
                --tron-border: rgba(255, 6, 10, 0.3);
                --tron-gradient-primary: linear-gradient(135deg, var(--tron-red), var(--tron-red-light));
                --tron-gradient-secondary: linear-gradient(135deg, var(--tron-red-dark), var(--tron-red));

                /* Dashboard semantic tokens mapped to TRON */
                --bg: var(--tron-black);
                --bg-elev: var(--tron-gray);
                --text: var(--tron-text);
                --muted: var(--tron-text-secondary);
                --accent: var(--tron-red);
                --accent-2: var(--tron-red-light);
                --card: var(--tron-light-gray);
                --ring: rgba(255, 6, 10, 0.35);
            }
            * {
                box-sizing: border-box;
            }
            html,
            body {
                height: 100%;
            }
            body {
                margin: 0;
                background: radial-gradient(1200px 800px at 80% -10%, rgba(34, 211, 238, 0.15), transparent 60%), radial-gradient(900px 600px at -10% 10%, rgba(59, 130, 246, 0.18), transparent 55%), var(--bg);
                color: var(--text);
                font-family: "Rajdhani", system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            a {
                color: inherit;
                text-decoration: none;
            }
            .container {
                max-width: 1120px;
                padding: 0 20px;
                margin: 0 auto;
            }
            /* Sidebar styles for account (replaces top navbar) */
            .dashboard-wrap {
                display: flex;
                min-height: 100vh;
            }
            .sidebar {
                width: 260px;
                flex-shrink: 0;
                background: rgba(0, 0, 0, 0.95);
                border-right: 1px solid var(--tron-border);
                position: sticky;
                top: 0;
                height: 100vh;
                transition: transform 0.25s ease;
            }
            .sidebar-header {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 18px 16px;
                border-bottom: 1px solid var(--tron-border);
            }
            .sidebar-brand {
                display: flex;
                align-items: center;
                gap: 12px;
                font-family: "Orbitron", monospace;
                font-weight: 800;
                font-size: 19px;
                letter-spacing: 0.2px;
            }
            .sidebar-brand .brand-icon {
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .sidebar-nav {
                padding: 16px 14px;
            }
            .sidebar-nav .nav-sidebar {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            .sidebar-nav .nav-sidebar .nav-item + .nav-item {
                margin-top: 6px;
            }
            .sidebar-nav a {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 12px 14px;
                color: #ffffff;
                border-radius: 10px;
                border: 1px solid transparent;
                font-size: 15px;
                line-height: 1;
                min-height: 44px;
            }
            .sidebar-nav a i {
                width: 18px;
                text-align: center;
                opacity: 1;
            }

            /* Icon colors for different nav items */
            .sidebar-nav a i.fa-chart-line {
                color: #22c55e;
            } /* Dashboard - Green */
            .sidebar-nav a i.fa-rocket {
                color: #3b82f6;
            } /* Buy Plans - Blue */
            .sidebar-nav a i.fa-history {
                color: #f59e0b;
            } /* History - Orange */
            .sidebar-nav a i.fa-download {
                color: #10b981;
            } /* Deposits - Emerald */
            .sidebar-nav a i.fa-upload {
                color: #ef4444;
            } /* Withdrawals - Red */
            .sidebar-nav a i.fa-users {
                color: #8b5cf6;
            } /* Referrals - Purple */
            .sidebar-nav a i.fa-medal {
                color: #fbbf24;
            } /* Contest - Yellow */
            .sidebar-nav a i.fa-lightbulb {
                color: #06b6d4;
            } /* FAQ - Cyan */
            .sidebar-nav a i.fa-newspaper {
                color: #ec4899;
            } /* News - Pink */
            .sidebar-nav a i.fa-life-ring {
                color: #84cc16;
            } /* Support - Lime */
            .sidebar-nav a i.fa-calculator {
                color: #06b6d4;
            } /* Profit Calculator - Cyan */

            /* Contest Hot Look and Timer Styles */
            .contest-link {
                position: relative;
                overflow: hidden;
            }

            .contest-icon-wrapper {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 18px;
            }

            .contest-hot-indicator {
                position: absolute;
                top: -2px;
                right: -2px;
                z-index: 10;
            }

            .hot-dot {
                display: block;
                width: 8px;
                height: 8px;
                background: #ff4444;
                border-radius: 50%;
                animation: pulse 2s infinite;
                box-shadow: 0 0 0 0 rgba(255, 68, 68, 0.7);
            }

            @keyframes pulse {
                0% {
                    transform: scale(0.95);
                    box-shadow: 0 0 0 0 rgba(255, 68, 68, 0.7);
                }
                70% {
                    transform: scale(1);
                    box-shadow: 0 0 0 10px rgba(255, 68, 68, 0);
                }
                100% {
                    transform: scale(0.95);
                    box-shadow: 0 0 0 0 rgba(255, 68, 68, 0);
                }
            }

            .contest-text {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                flex: 1;
            }

            .contest-timer {
                font-size: 11px;
                color: #fbbf24;
                margin-top: 2px;
                font-weight: 600;
            }

            .timer-text {
                display: block;
                line-height: 1.2;
            }

            .countdown {
                font-family: "Orbitron", monospace;
                font-weight: 700;
            }

            /* Contest link hover effects */
            .contest-link:hover {
                background: rgba(251, 191, 36, 0.1);
                border-color: rgba(251, 191, 36, 0.3);
            }

            .contest-link:hover .hot-dot {
                animation-duration: 1s;
            }

            /* Contest active state */
            .contest-link.active {
                background: rgba(251, 191, 36, 0.15);
                border-color: rgba(251, 191, 36, 0.4);
                box-shadow: 0 6px 20px rgba(251, 191, 36, 0.1) inset;
            }

            .sidebar-nav a:hover {
                background: rgba(255, 255, 255, 0.07);
                color: #ffffff;
                border-color: rgba(255, 255, 255, 0.08);
            }
            .sidebar-nav a:hover i {
                opacity: 1;
            }
            .sidebar-nav a:focus-visible {
                outline: none;
                box-shadow: 0 0 0 3px rgba(255, 6, 10, 0.25);
            }
            .sidebar-nav a.active {
                background: rgba(255, 6, 10, 0.12);
                color: #ffffff;
                border: 1px solid var(--tron-border);
                box-shadow: 0 6px 20px rgba(255, 6, 10, 0.08) inset;
            }
            .sidebar-nav a.active i {
                opacity: 1;
            }
            .sidebar-cta {
                padding: 14px;
                border-top: 1px solid var(--tron-border);
            }
            .sidebar-cta .btn {
                border-radius: 10px;
                padding: 12px 16px;
                font-size: 15px;
            }

            /* Exchange Rate Display Styling */
            .exchange-rate-display {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.15), rgba(59, 130, 246, 0.15));
                border: 1px solid rgba(34, 197, 94, 0.3);
                border-radius: 12px;
                padding: 12px 16px;
                margin: 0 8px;
                box-shadow: 0 4px 12px rgba(34, 197, 94, 0.1);
            }

            .exchange-rate-display h4 {
                color: #22c55e !important;
                font-weight: 700;
                font-size: 14px;
                margin: 0;
                text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
                letter-spacing: 0.5px;
            }
            .content {
                flex: 1;
                min-width: 0;
            }
            .topbar {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 16px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.06);
                background: rgba(0, 0, 0, 0.65);
                position: sticky;
                top: 0;
                z-index: 40;
            }
            .menu-toggle {
                display: none;
                width: 40px;
                height: 40px;
                align-items: center;
                justify-content: center;
                border: 1px solid rgba(255, 255, 255, 0.12);
                border-radius: 10px;
                background: rgba(255, 255, 255, 0.04);
            }
            .sidebar-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.55);
                z-index: 55;
            }
            .btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                padding: 10px 14px;
                border-radius: 12px;
                font-weight: 600;
                border: 1px solid transparent;
                transition: all 0.2s ease;
            }
            .btn.primary {
                background: linear-gradient(135deg, var(--accent), var(--accent-2));
                color: #08111f;
                box-shadow: 0 10px 30px var(--ring);
            }
            .btn.primary:hover {
                transform: translateY(-1px);
            }
            .btn.ghost {
                border-color: rgba(255, 255, 255, 0.12);
                color: var(--text);
                background: transparent;
            }
            .btn.ghost:hover {
                border-color: rgba(255, 255, 255, 0.2);
                background: rgba(255, 255, 255, 0.02);
            }
            main {
                padding-top: 16px;
            }
            .footer-min {
                border-top: 1px solid rgba(255, 255, 255, 0.06);
                padding: 24px 0;
                color: var(--muted);
            }
            /* Global styled cards (shared with Profit Calculator/Details) */
            .calc-card {
                background: var(--card);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 16px;
                overflow: hidden;
            }
            .calc-header {
                background: linear-gradient(135deg, var(--accent), var(--accent-2));
                padding: 16px 18px;
                color: #08111f;
            }
            .calc-title {
                margin: 0;
                font-weight: 800;
            }
            .calc-body {
                padding: 18px;
                color: var(--text);
            }
            .calc-input .form-control {
                background: var(--bg-elev);
                border-color: rgba(255, 255, 255, 0.08);
                color: var(--text);
            }
            .calc-input .form-control::placeholder {
                color: var(--muted);
            }
            .calc-input .input-group-text {
                background: rgba(255, 255, 255, 0.06);
                border-color: rgba(255, 255, 255, 0.08);
                color: var(--text);
            }
            .calc-table thead {
                background: rgba(255, 255, 255, 0.06);
                color: var(--text);
            }
            .calc-table td,
            .calc-table th {
                border-color: rgba(255, 255, 255, 0.06);
            }
            /* Stat tiles for profile */
            .stat-grid {
                display: grid;
                gap: 12px;
                grid-template-columns: repeat(4, 1fr);
            }
            .stat-tile {
                background: linear-gradient(135deg, rgba(59, 130, 246, 0.18), rgba(34, 211, 238, 0.18));
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 14px;
                padding: 16px;
            }
            .stat-label {
                color: var(--muted);
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 0.4px;
            }
            .stat-number {
                font-size: 22px;
                font-weight: 800;
                margin-top: 6px;
            }
            /* Contest Badge Styling */
            .contest-badge {
                display: inline-block;
                background: linear-gradient(135deg, #fbbf24, #f59e0b);
                color: #000;
                font-size: 10px;
                font-weight: 700;
                padding: 2px 6px;
                border-radius: 10px;
                margin-left: 6px;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                box-shadow: 0 2px 4px rgba(251, 191, 36, 0.3);
                animation: pulse-glow 2s ease-in-out infinite alternate;
            }

            @keyframes pulse-glow {
                0% {
                    box-shadow: 0 2px 4px rgba(251, 191, 36, 0.3);
                    transform: scale(1);
                }
                100% {
                    box-shadow: 0 4px 8px rgba(251, 191, 36, 0.5);
                    transform: scale(1.05);
                }
            }

            @media (max-width: 980px) {
                .stat-grid {
                    grid-template-columns: 1fr 1fr;
                }
            }
            @media (max-width: 767.98px) {
                .sidebar {
                    position: fixed;
                    left: 0;
                    top: 0;
                    height: 100vh;
                    width: 280px;
                    z-index: 60;
                    transform: translateX(-100%);
                    overflow-y: auto;
                    overflow-x: hidden;
                }
                .sidebar.open {
                    transform: translateX(0);
                }
                .menu-toggle {
                    display: inline-flex;
                }
                .sidebar-overlay.show {
                    display: block;
                }
                .sidebar-nav .nav-link {
                    padding: 0.625rem 0;
                    color: #ffffff !important;
                }

                /* Ensure sidebar content is properly scrollable */
                .sidebar-header {
                    position: sticky;
                    top: 0;
                    background: rgba(0, 0, 0, 0.95);
                    z-index: 10;
                }
                .sidebar-cta {
                    position: sticky;
                    bottom: 0;
                    background: rgba(0, 0, 0, 0.95);
                    z-index: 10;
                    border-top: 1px solid var(--tron-border);
                }

                /* Logout button mobile styling */
                .logout-btn {
                    transition: all 0.3s ease !important;
                }
                .logout-btn:hover {
                    background: rgba(239, 68, 68, 0.2) !important;
                    border-color: rgba(239, 68, 68, 0.5) !important;
                    color: #fca5a5 !important;
                    transform: translateY(-1px) !important;
                }
                .logout-btn:active {
                    transform: translateY(0) !important;
                }

                /* Ensure proper spacing for mobile */
                .sidebar-nav {
                    padding: 16px 14px;
                    margin-bottom: 80px;
                }
                .exchange-rate-display {
                    margin: 16px 14px;
                }
            }
            @media (max-width: 480px) {
                .sidebar {
                    width: 85vw;
                    overflow-y: auto;
                }
                .sidebar-nav .nav-link {
                    padding: 0.625rem 0;
                    color: #ffffff !important;
                }

                /* Additional mobile optimizations */
                .sidebar-nav {
                    padding: 12px 10px;
                    margin-bottom: 80px;
                }
                .exchange-rate-display {
                    margin: 12px 10px;
                }
                .sidebar-cta {
                    padding: 12px 10px;
                }
            }

            /* Active dropdown item styling */
            .dropdown-menu .dropdown-item.active {
                background-color: rgba(255, 255, 255, 0.1);
                color: #fff !important;
                font-weight: 600;
            }
            .dropdown-menu .dropdown-item.active:hover {
                background-color: rgba(255, 255, 255, 0.15);
            }
        </style>

        <style>
            /* Payment Method Selection Styles */
            .payment-method-selection {
                margin-bottom: 20px;
            }

            .payment-method-selection .form-label {
                display: block;
                margin-bottom: 12px;
                font-size: 14px;
                color: var(--text);
                font-weight: 600;
            }

            .payment-method-selection .form-label i {
                color: #22c55e;
                margin-right: 6px;
            }

            .payment-method-options {
                display: flex;
                gap: 12px;
                flex-wrap: wrap;
            }

            .payment-method-option {
                flex: 1;
                min-width: 200px;
            }

            .payment-method-radio {
                display: none;
            }

            .payment-method-label {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 16px;
                background: var(--card);
                border: 2px solid var(--tron-border);
                border-radius: 12px;
                cursor: pointer;
                transition: all 0.3s ease;
                height: 100%;
            }

            .payment-method-radio:checked + .payment-method-label {
                border-color: var(--tron-red);
                background: rgba(255, 6, 10, 0.1);
                box-shadow: 0 0 20px rgba(255, 6, 10, 0.3);
            }

            .payment-method-label:hover {
                border-color: var(--tron-red-light);
                transform: translateY(-2px);
            }

            .payment-method-icon {
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                background: var(--tron-gradient-primary);
                border-radius: 8px;
                color: white;
                font-size: 18px;
            }

            .payment-method-info {
                flex: 1;
            }

            .payment-method-name {
                font-weight: 600;
                font-size: 14px;
                color: var(--text);
                margin-bottom: 4px;
            }

            .payment-method-desc {
                font-size: 12px;
                color: var(--muted);
                line-height: 1.4;
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .payment-method-options {
                    flex-direction: column;
                }

                .payment-method-option {
                    min-width: auto;
                }
            }
        </style>

        <style>
            .stats-grid {
                display: grid;
                gap: 16px;
                grid-template-columns: repeat(3, 1fr);
            }
            .stat-card {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.05) 0%, rgba(59, 130, 246, 0.05) 100%);
                border: 1px solid rgba(34, 197, 94, 0.2);
                border-radius: 16px;
                padding: 20px;
                position: relative;
                overflow: hidden;
                backdrop-filter: blur(10px);
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            }

            /* Artistic Elements for Balance Cards */
            .stat-card::before {
                content: "";
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(34, 197, 94, 0.1) 0%, transparent 70%);
                animation: rotate 20s linear infinite;
                pointer-events: none;
            }

            .stat-card::after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: radial-gradient(circle at 20% 20%, rgba(59, 130, 246, 0.1) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(168, 85, 247, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 50% 50%, rgba(34, 197, 94, 0.05) 0%, transparent 70%);
                pointer-events: none;
                animation: pulse 4s ease-in-out infinite;
            }

            /* Floating Particles */
            .stat-card .floating-particles {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                pointer-events: none;
                overflow: hidden;
            }

            .stat-card .floating-particles::before,
            .stat-card .floating-particles::after {
                content: "✦";
                position: absolute;
                color: rgba(34, 197, 94, 0.3);
                font-size: 12px;
                animation: float 6s ease-in-out infinite;
            }

            .stat-card .floating-particles::before {
                top: 20%;
                left: 15%;
                animation-delay: 0s;
            }

            .stat-card .floating-particles::after {
                top: 70%;
                right: 20%;
                animation-delay: 3s;
            }

            /* Glowing Border Effect */
            .stat-card {
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1), 0 0 0 1px rgba(34, 197, 94, 0.2), inset 0 0 20px rgba(34, 197, 94, 0.05);
            }

            .stat-card:hover {
                box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(34, 197, 94, 0.4), inset 0 0 30px rgba(34, 197, 94, 0.1);
                transform: translateY(-2px);
                transition: all 0.3s ease;
            }

            /* Content Positioning */
            .stat-card > * {
                position: relative;
                z-index: 2;
            }

            /* Animations */
            @keyframes rotate {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }

            @keyframes float {
                0%,
                100% {
                    transform: translateY(0px) rotate(0deg);
                    opacity: 0.3;
                }
                50% {
                    transform: translateY(-10px) rotate(180deg);
                    opacity: 0.8;
                }
            }

            @keyframes pulse {
                0%,
                100% {
                    opacity: 0.3;
                }
                50% {
                    opacity: 0.6;
                }
            }

            .stat-label {
                color: var(--muted);
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 0.4px;
            }
            .stat-value {
                font-size: 24px;
                font-weight: 800;
                margin-top: 6px;
            }
            .hero-dash {
                padding: 28px 0;
            }
            .quick-actions {
                display: flex;
                gap: 10px;
                flex-wrap: wrap;
                margin-top: 14px;
            }
            .note {
                margin-top: 10px;
                font-size: 13px;
                color: #fca5a5;
            }

            /* Advanced Profit Details Card Styles */
            .profit-details-card {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.05) 0%, rgba(59, 130, 246, 0.05) 100%);
                border: 1px solid rgba(34, 197, 94, 0.2);
                border-radius: 16px;
                padding: 20px;
                margin-top: 20px;
                position: relative;
                overflow: hidden;
                backdrop-filter: blur(10px);
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            }

            .profit-details-card::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 3px;
                background: linear-gradient(90deg, #22c55e, #3b82f6, #f59e0b, #a855f7);
                background-size: 200% 100%;
                animation: gradientShift 3s ease-in-out infinite;
            }

            @keyframes gradientShift {
                0%,
                100% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
            }

            .profit-details-card::after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: radial-gradient(circle at 50% 50%, rgba(34, 197, 94, 0.03) 0%, transparent 70%);
                pointer-events: none;
                animation: pulse 4s ease-in-out infinite;
            }

            @keyframes pulse {
                0%,
                100% {
                    opacity: 0.3;
                }
                50% {
                    opacity: 0.6;
                }
            }

            .profit-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 20px;
                padding-bottom: 15px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .profit-title {
                font-size: 18px;
                font-weight: 700;
                color: var(--text);
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .profit-title i {
                background: linear-gradient(45deg, #22c55e, #3b82f6);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                font-size: 20px;
            }

            .profit-stats-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
                gap: 15px;
                margin-bottom: 20px;
            }

            .profit-stat-item {
                background: rgba(255, 255, 255, 0.03);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 12px;
                padding: 15px;
                text-align: center;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .profit-stat-item::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
                transition: left 0.5s ease;
            }

            .profit-stat-item:hover::before {
                left: 100%;
            }

            .profit-stat-item:hover {
                transform: translateY(-3px);
                border-color: rgba(34, 197, 94, 0.3);
                box-shadow: 0 8px 25px rgba(34, 197, 94, 0.15);
            }

            .profit-stat-item:active {
                transform: translateY(-1px) scale(0.98);
                transition: all 0.1s ease;
            }

            .profit-stat-item .profit-stat-value {
                position: relative;
                overflow: hidden;
            }

            .profit-stat-item .profit-stat-value::after {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
                transition: left 0.6s ease;
            }

            .profit-stat-item:hover .profit-stat-value::after {
                left: 100%;
            }

            .profit-stat-label {
                font-size: 11px;
                color: var(--muted);
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 8px;
                font-weight: 600;
            }

            .profit-stat-value {
                font-size: 16px;
                font-weight: 800;
                color: var(--text);
                margin-bottom: 5px;
            }

            .profit-stat-change {
                font-size: 10px;
                padding: 3px 8px;
                border-radius: 12px;
                font-weight: 600;
                text-transform: uppercase;
            }

            .profit-stat-change.positive {
                background: rgba(34, 197, 94, 0.2);
                color: #22c55e;
                border: 1px solid rgba(34, 197, 94, 0.3);
            }

            .profit-stat-change.negative {
                background: rgba(239, 68, 68, 0.2);
                color: #ef4444;
                border: 1px solid rgba(239, 68, 68, 0.3);
            }

            .profit-chart-container {
                background: rgba(0, 0, 0, 0.2);
                border-radius: 12px;
                padding: 20px;
                margin-top: 20px;
                position: relative;
            }

            .profit-chart-summary {
                background: rgba(0, 0, 0, 0.15);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 10px;
                transition: all 0.3s ease;
            }

            .profit-chart-summary:hover {
                background: rgba(0, 0, 0, 0.2);
                border-color: rgba(255, 255, 255, 0.12);
                transform: translateY(-1px);
            }

            .profit-chart-summary > div {
                transition: all 0.3s ease;
                padding: 8px;
                border-radius: 6px;
            }

            .profit-chart-summary > div:hover {
                background: rgba(255, 255, 255, 0.05);
                transform: scale(1.02);
            }

            .profit-chart-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 15px;
            }

            /* Mining Rewards History Styles */
            .mining-rewards-container {
                background: rgba(0, 0, 0, 0.2);
                border-radius: 12px;
                padding: 20px;
                margin-top: 20px;
                position: relative;
            }

            .mining-rewards-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 20px;
                flex-wrap: wrap;
                gap: 15px;
            }

            .mining-rewards-title {
                font-size: 18px;
                font-weight: 700;
                color: var(--text);
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .mining-rewards-title i {
                color: #22c55e;
                font-size: 20px;
            }

            .mining-rewards-actions .btn {
                padding: 6px 12px;
                font-size: 12px;
                border-radius: 6px;
            }

            .rewards-chart-container {
                background: rgba(0, 0, 0, 0.15);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 10px;
                padding: 20px;
                transition: all 0.3s ease;
            }

            .rewards-chart-container:hover {
                background: rgba(0, 0, 0, 0.2);
                border-color: rgba(255, 255, 255, 0.12);
                transform: translateY(-1px);
            }

            .rewards-chart-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 15px;
                flex-wrap: wrap;
                gap: 10px;
            }

            .rewards-chart-title {
                font-size: 16px;
                font-weight: 600;
                color: var(--text);
            }

            .rewards-chart-legend {
                display: flex;
                gap: 15px;
                align-items: center;
                flex-wrap: wrap;
            }

            /* Responsive Design for Balance Cards on Mobile */
            @media (max-width: 980px) {
                .stats-grid[style*="repeat(3, 1fr)"] {
                    grid-template-columns: 1fr !important;
                    gap: 12px;
                }
                .stats-grid[style*="repeat(3, 1fr)"] .stat-card {
                    padding: 20px 16px;
                    margin-bottom: 8px;
                }
                .stats-grid[style*="repeat(3, 1fr)"] .stat-value {
                    font-size: 22px;
                }
                .stats-grid[style*="repeat(3, 1fr)"] .stat-label {
                    font-size: 11px;
                }
            }

            @media (max-width: 768px) {
                .stats-grid[style*="repeat(3, 1fr)"] {
                    gap: 10px;
                }
                .stats-grid[style*="repeat(3, 1fr)"] .stat-card {
                    padding: 18px 14px;
                }
                .stats-grid[style*="repeat(3, 1fr)"] .stat-value {
                    font-size: 20px;
                }
            }

            @media (max-width: 480px) {
                .stats-grid[style*="repeat(3, 1fr)"] {
                    gap: 8px;
                }
                .stats-grid[style*="repeat(3, 1fr)"] .stat-card {
                    padding: 16px 12px;
                }
                .stats-grid[style*="repeat(3, 1fr)"] .stat-value {
                    font-size: 18px;
                }
            }

            /* Daily Bonus Card Responsive Design */
            @media (max-width: 768px) {
                #daily-bonus-card .card-body {
                    padding: 15px !important;
                }

                #daily-bonus-card .row {
                    flex-direction: column;
                    text-align: center;
                }

                #daily-bonus-card .col-md-4 {
                    margin-top: 12px;
                }

                #daily-bonus-card .btn {
                    width: 100%;
                    max-width: 220px;
                    padding: 12px 20px !important;
                    font-size: 14px !important;
                }

                #daily-bonus-card h5 {
                    font-size: 16px !important;
                    margin-bottom: 8px !important;
                }

                #daily-bonus-card .card-text {
                    font-size: 13px !important;
                }
            }

            @media (max-width: 480px) {
                #daily-bonus-card .card-body {
                    padding: 12px !important;
                }

                #daily-bonus-card h5 {
                    font-size: 15px !important;
                    margin-bottom: 6px !important;
                }

                #daily-bonus-card .card-text {
                    font-size: 12px !important;
                    line-height: 1.3 !important;
                }

                #daily-bonus-card .btn {
                    padding: 10px 16px !important;
                    font-size: 13px !important;
                }

                #daily-bonus-card #bonus-timer {
                    font-size: 11px !important;
                }
            }

            @media (max-width: 980px) {
                .stats-grid {
                    grid-template-columns: 1fr;
                }
            }

            /* Responsive Design for Mining Rewards */
            @media (max-width: 768px) {
                .mining-rewards-header {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 12px;
                }

                .mining-status-summary {
                    grid-template-columns: repeat(2, 1fr) !important;
                    gap: 10px !important;
                }

                .rewards-chart-header {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 10px;
                }

                .rewards-chart-legend {
                    flex-direction: column;
                    gap: 8px;
                    align-items: flex-start;
                }
            }

            @media (max-width: 480px) {
                .mining-status-summary {
                    grid-template-columns: 1fr !important;
                    gap: 8px !important;
                }

                .mining-rewards-container {
                    padding: 15px;
                }

                .rewards-chart-container {
                    padding: 15px;
                }
            }
        </style>

        <style>
            /* Buy Hash Page Styles */
            .buy-hash-container {
                padding: 20px;
                max-width: 1200px;
                margin: 0 auto;
            }

            /* Exchange Rate Display Styling */
            .exchange-rate-display {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.15), rgba(59, 130, 246, 0.15));
                border: 1px solid rgba(34, 197, 94, 0.3);
                border-radius: 12px;
                padding: 12px 16px;
                margin: 0 8px;
                box-shadow: 0 4px 12px rgba(34, 197, 94, 0.1);
            }

            .exchange-rate-display h4 {
                color: #22c55e !important;
                font-weight: 700;
                font-size: 14px;
                margin: 0;
                text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
                letter-spacing: 0.5px;
            }

            /* Buy Plans Exchange Rate Styling */
            .buy-plans-exchange {
                margin: 20px auto;
                max-width: 300px;
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.2), rgba(59, 130, 246, 0.2));
                border: 2px solid rgba(34, 197, 94, 0.4);
                box-shadow: 0 6px 20px rgba(34, 197, 94, 0.15);
            }

            .buy-plans-exchange h4 {
                font-size: 16px;
                color: #22c55e !important;
                font-weight: 800;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            }

            .page-header {
                text-align: center;
                margin-bottom: 30px;
                padding: 20px;
                background: rgba(0, 0, 0, 0.2);
                border-radius: 12px;
                border: 1px solid rgba(255, 255, 255, 0.08);
            }

            .page-title {
                font-size: 28px;
                font-weight: 700;
                color: var(--text);
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 12px;
                margin-bottom: 8px;
            }

            .page-title i {
                color: #22c55e;
                font-size: 32px;
            }

            .page-subtitle {
                color: var(--muted);
                font-size: 16px;
            }

            .plans-container {
                margin-bottom: 40px;
            }

            .plans-header {
                text-align: center;
                margin-bottom: 30px;
            }

            .plans-header h3 {
                font-size: 24px;
                font-weight: 700;
                color: var(--text);
                margin-bottom: 8px;
            }

            .plans-header p {
                color: var(--muted);
                font-size: 16px;
            }

            .plans-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
                margin-bottom: 30px;
            }

            .plan-card {
                background: rgba(0, 0, 0, 0.2);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 12px;
                padding: 25px;
                position: relative;
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                cursor: pointer;
                overflow: hidden;
                animation: planCardFloat 6s ease-in-out infinite;
                animation-delay: calc(var(--card-index, 0) * 0.2s);
            }

            .plan-card:hover {
                transform: translateY(-8px) scale(1.02);
                border-color: rgba(34, 197, 94, 0.4);
                box-shadow: 0 20px 50px rgba(34, 197, 94, 0.2), 0 0 30px rgba(34, 197, 94, 0.1);
            }

            .plan-card::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 3px;
                background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .plan-card:hover::before {
                opacity: 1;
            }

            /* Machine Mining Working Animation */
            .plan-card::after {
                content: "";
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(34, 197, 94, 0.05) 0%, transparent 70%);
                animation: miningRotate 15s linear infinite;
                pointer-events: none;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .plan-card:hover::after {
                opacity: 1;
            }

            /* Mining Particles Effect */
            .plan-card .mining-particles {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
                overflow: hidden;
            }

            .mining-particle {
                position: absolute;
                width: 2px;
                height: 2px;
                background: #22c55e;
                border-radius: 50%;
                animation: particleFloat 3s ease-in-out infinite;
                opacity: 0;
            }

            .plan-card:hover .mining-particle {
                opacity: 1;
            }

            .mining-particle:nth-child(1) {
                top: 20%;
                left: 10%;
                animation-delay: 0s;
            }
            .mining-particle:nth-child(2) {
                top: 60%;
                left: 80%;
                animation-delay: 0.5s;
            }
            .mining-particle:nth-child(3) {
                top: 80%;
                left: 20%;
                animation-delay: 1s;
            }
            .mining-particle:nth-child(4) {
                top: 30%;
                left: 70%;
                animation-delay: 1.5s;
            }
            .mining-particle:nth-child(5) {
                top: 70%;
                left: 40%;
                animation-delay: 2s;
            }

            /* Plan Card Floating Animation */
            @keyframes planCardFloat {
                0%,
                100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-5px);
                }
            }

            /* Mining Rotation Animation */
            @keyframes miningRotate {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }

            /* Particle Float Animation */
            @keyframes particleFloat {
                0%,
                100% {
                    transform: translateY(0px) scale(1);
                    opacity: 0;
                }
                25% {
                    opacity: 1;
                }
                50% {
                    transform: translateY(-20px) scale(1.5);
                    opacity: 0.8;
                }
                75% {
                    opacity: 0.5;
                }
            }

            .plan-card.featured {
                border-color: #22c55e;
                background: rgba(34, 197, 94, 0.05);
            }

            .plan-card.tier-1 {
                border-color: rgba(34, 197, 94, 0.3);
                background: rgba(34, 197, 94, 0.02);
            }

            .plan-card.tier-2 {
                border-color: rgba(99, 102, 241, 0.3);
                background: rgba(99, 102, 241, 0.02);
            }

            .plan-card.tier-3 {
                border-color: rgba(245, 158, 11, 0.3);
                background: rgba(245, 158, 11, 0.02);
            }

            /* Purchase History Styles */
            .purchase-history {
                background: rgba(0, 0, 0, 0.2);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 12px;
                padding: 25px;
                margin-top: 40px;
            }

            .history-header {
                text-align: center;
                margin-bottom: 25px;
            }

            .history-header h3 {
                font-size: 20px;
                font-weight: 700;
                color: var(--text);
                margin-bottom: 8px;
            }

            .history-table {
                overflow-x: auto;
            }

            .history-table .table {
                width: 100%;
                border-collapse: collapse;
                color: var(--text);
            }

            .history-table th {
                background: rgba(0, 0, 0, 0.3);
                padding: 12px;
                text-align: left;
                font-weight: 600;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .history-table td {
                padding: 12px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            }

            .history-table tr:hover {
                background: rgba(255, 255, 255, 0.02);
            }

            .status-badge {
                padding: 4px 8px;
                border-radius: 12px;
                font-size: 12px;
                font-weight: 600;
                text-transform: uppercase;
            }

            .status-badge.status-paid {
                background: rgba(34, 197, 94, 0.2);
                color: #22c55e;
                border: 1px solid rgba(34, 197, 94, 0.3);
            }

            .status-badge.status-pending {
                background: rgba(245, 158, 11, 0.2);
                color: #f59e0b;
                border: 1px solid rgba(245, 158, 11, 0.3);
            }

            .status-badge.status-cancelled {
                background: rgba(239, 68, 68, 0.2);
                color: #ef4444;
                border: 1px solid rgba(239, 68, 68, 0.3);
            }

            .status-badge.status-expired {
                background: rgba(107, 114, 128, 0.2);
                color: #6b7280;
                border: 1px solid rgba(107, 114, 128, 0.3);
            }

            .plan-badge {
                position: absolute;
                top: 15px;
                right: 15px;
                background: linear-gradient(45deg, #22c55e, #16a34a);
                color: white;
                padding: 8px 16px;
                border-radius: 25px;
                font-size: 12px;
                font-weight: 700;
                box-shadow: 0 4px 12px rgba(34, 197, 94, 0.4);
                border: 2px solid rgba(255, 255, 255, 0.3);
                text-transform: uppercase;
                letter-spacing: 0.5px;
                z-index: 100;
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
                animation: badgePulse 2s ease-in-out infinite;
                white-space: nowrap;
                min-width: 120px;
                text-align: center;
            }

            /* Mobile responsive badge */
            @media (max-width: 768px) {
                .plan-badge {
                    top: 10px;
                    right: 10px;
                    padding: 6px 12px;
                    font-size: 11px;
                    min-width: 100px;
                }
            }

            @media (max-width: 480px) {
                .plan-badge {
                    top: 8px;
                    right: 8px;
                    padding: 5px 10px;
                    font-size: 10px;
                    min-width: 90px;
                }
            }

            @keyframes badgePulse {
                0%,
                100% {
                    transform: scale(1);
                    box-shadow: 0 4px 12px rgba(34, 197, 94, 0.4);
                }
                50% {
                    transform: scale(1.05);
                    box-shadow: 0 6px 16px rgba(34, 197, 94, 0.6);
                }
            }

            .plan-header {
                text-align: center;
                margin-bottom: 20px;
            }

            .plan-icon {
                width: 100px;
                height: 100px;
                background: rgba(34, 197, 94, 0.1);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 15px;
                position: relative;
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                animation: iconPulse 4s ease-in-out infinite;
            }

            .plan-icon::before {
                content: "";
                position: absolute;
                top: -5px;
                left: -5px;
                right: -5px;
                bottom: -5px;
                border: 2px solid rgba(34, 197, 94, 0.3);
                border-radius: 50%;
                animation: iconGlow 2s ease-in-out infinite alternate;
            }

            .plan-icon::after {
                content: "";
                position: absolute;
                top: -10px;
                left: -10px;
                right: -10px;
                bottom: -10px;
                border: 1px solid rgba(34, 197, 94, 0.1);
                border-radius: 50%;
                animation: iconGlow 3s ease-in-out infinite alternate-reverse;
            }

            .plan-icon:hover {
                transform: scale(1.1) rotate(5deg);
                background: rgba(34, 197, 94, 0.2);
                box-shadow: 0 0 30px rgba(34, 197, 94, 0.3);
            }

            .plan-icon i {
                font-size: 24px;
                color: #22c55e;
                animation: iconSpin 8s linear infinite;
                transition: all 0.3s ease;
            }

            .plan-icon:hover i {
                color: #16a34a;
                transform: scale(1.2);
            }

            .plan-image {
                width: 100%;
                height: 100%;
                object-fit: contain;
                border-radius: 50%;
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                animation: imageFloat 5s ease-in-out infinite;
            }

            .plan-icon:hover .plan-image {
                transform: scale(1.15) rotate(-5deg);
                filter: brightness(1.2) contrast(1.1);
            }

            /* Icon Animations */
            @keyframes iconPulse {
                0%,
                100% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.05);
                }
            }

            @keyframes iconGlow {
                0% {
                    opacity: 0.3;
                    transform: scale(1);
                }
                100% {
                    opacity: 0.8;
                    transform: scale(1.1);
                }
            }

            @keyframes iconSpin {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }

            @keyframes imageFloat {
                0%,
                100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-3px);
                }
            }

            .plan-title {
                font-size: 20px;
                font-weight: 700;
                color: var(--text);
                margin-bottom: 5px;
            }

            .plan-subtitle {
                color: var(--muted);
                font-size: 14px;
            }

            .plan-features {
                margin-bottom: 25px;
            }

            .feature {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-bottom: 10px;
                color: var(--text);
                padding: 8px 12px;
                border-radius: 6px;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
                animation: featureSlideIn 0.6s ease forwards;
                animation-delay: calc(var(--feature-index, 0) * 0.1s);
                opacity: 0;
                transform: translateX(-20px);
            }

            .feature::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(34, 197, 94, 0.1), transparent);
                transition: left 0.5s ease;
            }

            .feature:hover::before {
                left: 100%;
            }

            .feature:hover {
                background: rgba(34, 197, 94, 0.05);
                transform: translateX(5px);
                box-shadow: 0 2px 8px rgba(34, 197, 94, 0.1);
            }

            .feature i {
                color: #22c55e;
                font-size: 14px;
                transition: all 0.3s ease;
                animation: featureIconPulse 2s ease-in-out infinite;
            }

            .feature:hover i {
                transform: scale(1.2);
                color: #16a34a;
            }

            .feature i.fa-server {
                color: #6366f1;
            }

            /* Feature Animations */
            @keyframes featureSlideIn {
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes featureIconPulse {
                0%,
                100% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.1);
                }
            }

            .plan-price {
                text-align: center;
                margin-bottom: 20px;
                padding: 15px;
                background: rgba(0, 0, 0, 0.2);
                border-radius: 8px;
            }

            .price-amount {
                font-size: 24px;
                font-weight: 700;
                color: var(--text);
                margin-bottom: 4px;
            }

            .price-usd {
                color: var(--muted);
                font-size: 14px;
            }

            .buy-plan-btn {
                width: 100%;
                padding: 12px;
                font-weight: 600;
                border-radius: 8px;
                position: relative;
                overflow: hidden;
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                animation: buttonGlow 3s ease-in-out infinite;
            }

            .buy-plan-btn::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                transition: left 0.6s ease;
            }

            .buy-plan-btn:hover::before {
                left: 100%;
            }

            .buy-plan-btn:hover {
                transform: translateY(-3px) scale(1.02);
                box-shadow: 0 15px 35px rgba(34, 197, 94, 0.4);
            }

            .buy-plan-btn i {
                transition: all 0.3s ease;
                animation: cartBounce 2s ease-in-out infinite;
            }

            .buy-plan-btn:hover i {
                transform: scale(1.2) rotate(10deg);
                animation: cartBounce 0.5s ease-in-out infinite;
            }

            /* Button Animations */
            @keyframes buttonGlow {
                0%,
                100% {
                    box-shadow: 0 4px 15px rgba(34, 197, 94, 0.3);
                }
                50% {
                    box-shadow: 0 8px 25px rgba(34, 197, 94, 0.5);
                }
            }

            @keyframes cartBounce {
                0%,
                100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-2px);
                }
            }

            /* Plan Customizer Styles */
            .plan-customizer {
                margin: 20px 0;
                padding: 15px;
                background: rgba(0, 0, 0, 0.2);
                border-radius: 8px;
                border: 1px solid rgba(255, 255, 255, 0.05);
            }

            .range-slider-container {
                margin-bottom: 15px;
            }

            .range-label {
                display: block;
                color: var(--text);
                font-weight: 700;
                margin-bottom: 10px;
                font-size: 15px;
                text-align: center;
                background: rgba(34, 197, 94, 0.1);
                padding: 8px 12px;
                border-radius: 6px;
                border: 1px solid rgba(34, 197, 94, 0.2);
            }

            .hashpower-range {
                width: 100%;
                height: 6px;
                border-radius: 3px;
                background: rgba(255, 255, 255, 0.1);
                outline: none;
                -webkit-appearance: none;
                margin-bottom: 8px;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .hashpower-range::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                background: #22c55e;
                cursor: pointer;
                border: 2px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
                transition: all 0.3s ease;
            }

            .hashpower-range::-webkit-slider-thumb:hover {
                transform: scale(1.1);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            }

            .hashpower-range::-moz-range-thumb {
                width: 20px;
                height: 20px;
                border-radius: 50%;
                background: #22c55e;
                cursor: pointer;
                border: 2px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
                transition: all 0.3s ease;
            }

            .hashpower-range::-moz-range-thumb:hover {
                transform: scale(1.1);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            }

            .range-labels {
                display: flex;
                justify-content: space-between;
                font-size: 14px;
                font-weight: 700;
                color: var(--text);
                margin-top: 8px;
                background: rgba(0, 0, 0, 0.2);
                padding: 6px 10px;
                border-radius: 4px;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .custom-price-display {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                gap: 15px;
                padding: 12px;
                background: rgba(0, 0, 0, 0.3);
                border-radius: 6px;
                border: 1px solid rgba(255, 255, 255, 0.05);
            }

            .price-info,
            .profit-info,
            .return-info {
                text-align: center;
                font-size: 14px;
                color: var(--text);
                font-weight: 700;
            }

            .price-info span,
            .profit-info span {
                font-weight: 700;
            }

            .price-info span:first-child,
            .profit-info span:first-child {
                color: var(--muted);
                font-weight: 600;
            }

            /* Mobile responsiveness for range slider */
            @media (max-width: 768px) {
                .custom-price-display {
                    grid-template-columns: 1fr;
                    gap: 10px;
                }

                .price-info,
                .profit-info,
                .return-info {
                    font-size: 13px;
                }

                .hashpower-range {
                    height: 8px;
                }

                .hashpower-range::-webkit-slider-thumb {
                    width: 24px;
                    height: 24px;
                }

                .hashpower-range::-moz-range-thumb {
                    width: 24px;
                    height: 24px;
                }

                .range-label {
                    font-size: 13px;
                }
            }

            .custom-plan-container {
                background: rgba(0, 0, 0, 0.2);
                border: 2px solid;
                border-image: linear-gradient(45deg, #22c55e, #6366f1, #f59e0b, #22c55e) 1;
                border-radius: 12px;
                padding: 20px;
                margin-bottom: 25px;
                position: relative;
                overflow: hidden;
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
                max-width: 450px;
                margin-left: auto;
                margin-right: auto;
                animation: customPlanFloat 8s ease-in-out infinite;
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            }

            .custom-plan-container:hover {
                transform: translateY(-5px) scale(1.02);
                box-shadow: 0 15px 40px rgba(34, 197, 94, 0.2);
            }

            @keyframes customPlanFloat {
                0%,
                100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-3px);
                }
            }

            .custom-plan-container::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 3px;
                background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
                animation: borderGlow 3s ease-in-out infinite;
            }

            @keyframes borderGlow {
                0%,
                100% {
                    opacity: 1;
                }
                50% {
                    opacity: 0.7;
                }
            }

            .custom-plan-container::after {
                content: "";
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(34, 197, 94, 0.1) 0%, transparent 70%);
                animation: rotate 20s linear infinite;
                pointer-events: none;
            }

            @keyframes rotate {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }

            .custom-plan-header {
                text-align: center;
                margin-bottom: 15px;
            }

            .custom-plan-header h3 {
                font-size: 22px;
                font-weight: 800;
                color: var(--text);
                margin-bottom: 8px;
                text-align: center;
                background: linear-gradient(45deg, #22c55e, #6366f1, #f59e0b);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
                letter-spacing: 1px;
            }

            .custom-plan-header p {
                color: var(--muted);
                font-size: 16px;
                text-align: center;
                font-weight: 500;
                line-height: 1.6;
                margin-bottom: 0;
            }

            .custom-plan-form {
                max-width: 400px;
                margin: 0 auto;
            }

            .form-row {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 15px;
                margin-bottom: 15px;
            }

            .form-group {
                display: flex;
                flex-direction: column;
            }

            .form-group label {
                color: var(--text);
                font-weight: 700;
                margin-bottom: 10px;
                font-size: 15px;
                letter-spacing: 0.5px;
                text-transform: uppercase;
                background: linear-gradient(45deg, #22c55e, #6366f1);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .form-control-static {
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 6px;
                padding: 10px 12px;
                min-height: 42px;
                display: flex;
                align-items: center;
            }

            .duration-display {
                color: var(--text);
                font-weight: 600;
                font-size: 14px;
                background: linear-gradient(45deg, #22c55e, #6366f1);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .form-control {
                background: rgba(0, 0, 0, 0.3);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 8px;
                padding: 12px;
                color: var(--text);
                font-size: 14px;
            }

            .form-control:focus {
                outline: none;
                border-color: #22c55e;
                box-shadow: 0 0 0 2px rgba(34, 197, 94, 0.2);
            }

            .custom-plan-summary {
                background: rgba(0, 0, 0, 0.2);
                border-radius: 8px;
                padding: 15px;
                margin-bottom: 15px;
            }

            .summary-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 8px;
                color: var(--text);
                font-weight: 600;
                font-size: 13px;
                letter-spacing: 0.3px;
                padding: 6px 0;
            }

            .summary-item:last-child {
                margin-bottom: 0;
                padding: 12px 15px;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                font-weight: 700;
                font-size: 16px;
                color: #22c55e;
                background: rgba(34, 197, 94, 0.1);
                border-radius: 8px;
                margin-top: 10px;
            }

            .purchase-history {
                background: rgba(0, 0, 0, 0.2);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 12px;
                padding: 25px;
            }

            .history-header {
                margin-bottom: 20px;
            }

            .history-header h3 {
                font-size: 20px;
                font-weight: 700;
                color: var(--text);
            }

            .table {
                color: var(--text);
                background: transparent;
            }

            .table th {
                border-top: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                color: var(--muted);
                font-weight: 600;
                font-size: 14px;
            }

            .table td {
                border-top: 1px solid rgba(255, 255, 255, 0.05);
                vertical-align: middle;
                font-size: 14px;
            }

            .status-badge {
                padding: 4px 8px;
                border-radius: 12px;
                font-size: 12px;
                font-weight: 600;
            }

            .status-active {
                background: rgba(34, 197, 94, 0.2);
                color: #22c55e;
            }

            .status-pending {
                background: rgba(245, 158, 11, 0.2);
                color: #f59e0b;
            }

            .status-expired {
                background: rgba(239, 68, 68, 0.2);
                color: #ef4444;
            }

            /* Tier-Specific Styles */
            .tier-badge {
                position: absolute;
                top: 10px;
                right: 10px;
                padding: 4px 8px;
                border-radius: 12px;
                font-size: 11px;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                display: flex;
                align-items: center;
                gap: 4px;
            }

            .tier-badge.tier-success {
                background: rgba(34, 197, 94, 0.2);
                color: #22c55e;
                border: 1px solid rgba(34, 197, 94, 0.3);
            }

            .tier-badge.tier-warning {
                background: rgba(245, 158, 11, 0.2);
                color: #f59e0b;
                border: 1px solid rgba(245, 158, 11, 0.3);
            }

            .tier-badge.tier-primary {
                background: rgba(99, 102, 241, 0.2);
                color: #6366f1;
                border: 1px solid rgba(99, 102, 241, 0.3);
            }

            .tier-rate {
                font-size: 14px;
                color: var(--primary);
                margin-top: 8px;
                font-weight: 600;
                background: rgba(99, 102, 241, 0.1);
                padding: 6px 10px;
                border-radius: 6px;
                border: 1px solid rgba(99, 102, 241, 0.2);
            }

            .roi-feature {
                color: #22c55e !important;
                font-weight: 600;
            }

            .roi-target {
                color: #3b82f6 !important;
                font-weight: 500;
            }

            .tier-info {
                background: rgba(99, 102, 241, 0.1);
                border: 1px solid rgba(99, 102, 241, 0.2);
                border-radius: 8px;
                padding: 10px;
            }

            /* Plan card tier enhancements */
            .plan-card.tier-1 {
                border-left: 4px solid #22c55e;
            }

            .plan-card.tier-2 {
                border-left: 4px solid #f59e0b;
            }

            .plan-card.tier-3 {
                border-left: 4px solid #6366f1;
            }

            /* Form Styles */
            .purchase-form,
            .custom-purchase-form {
                margin: 0;
            }

            .btn:disabled {
                opacity: 0.6;
                cursor: not-allowed;
            }

            .btn-secondary {
                background-color: #6c757d;
                border-color: #6c757d;
            }

            .btn-secondary:hover {
                background-color: #5a6268;
                border-color: #545b62;
            }

            /* Payment Method Selection Styles */
            .payment-method-selection {
                margin: 20px 0;
            }

            .payment-method-selection .form-label {
                color: var(--text);
                font-weight: 700;
                margin-bottom: 15px;
                font-size: 16px;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .payment-method-options {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .payment-method-option {
                position: relative;
            }

            .payment-method-radio {
                position: absolute;
                opacity: 0;
                pointer-events: none;
            }

            .payment-method-label {
                display: flex;
                align-items: center;
                gap: 15px;
                padding: 15px;
                background: rgba(0, 0, 0, 0.2);
                border: 2px solid rgba(255, 255, 255, 0.1);
                border-radius: 8px;
                cursor: pointer;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .payment-method-label::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(34, 197, 94, 0.1), transparent);
                transition: left 0.5s ease;
            }

            .payment-method-label:hover::before {
                left: 100%;
            }

            .payment-method-label:hover {
                border-color: rgba(34, 197, 94, 0.3);
                background: rgba(34, 197, 94, 0.05);
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(34, 197, 94, 0.1);
            }

            .payment-method-radio:checked + .payment-method-label {
                border-color: #22c55e;
                background: rgba(34, 197, 94, 0.1);
                box-shadow: 0 0 20px rgba(34, 197, 94, 0.2);
            }

            .payment-method-radio:checked + .payment-method-label::after {
                content: "✓";
                position: absolute;
                top: 10px;
                right: 15px;
                color: #22c55e;
                font-weight: bold;
                font-size: 16px;
            }

            .payment-method-icon {
                width: 50px;
                height: 50px;
                background: rgba(34, 197, 94, 0.1);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
            }

            .payment-method-icon i {
                font-size: 20px;
                color: #22c55e;
                transition: all 0.3s ease;
            }

            .payment-method-label:hover .payment-method-icon {
                background: rgba(34, 197, 94, 0.2);
                transform: scale(1.1);
            }

            .payment-method-label:hover .payment-method-icon i {
                color: #16a34a;
                transform: scale(1.2);
            }

            .payment-method-info {
                flex: 1;
            }

            .payment-method-name {
                font-weight: 700;
                color: var(--text);
                font-size: 16px;
                margin-bottom: 4px;
            }

            .payment-method-desc {
                color: var(--muted);
                font-size: 14px;
            }

            /* Modal Styles */
            .modal-content {
                background: var(--card);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 12px;
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            }

            .modal-header {
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                padding: 20px;
                background: rgba(0, 0, 0, 0.2);
            }

            .modal-title {
                color: var(--text);
                font-weight: 700;
                font-size: 18px;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .modal-title i {
                color: #22c55e;
            }

            .modal-body {
                padding: 25px;
            }

            .purchase-summary h6 {
                color: var(--text);
                font-weight: 700;
                margin-bottom: 15px;
                font-size: 16px;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .purchase-summary h6 i {
                color: #22c55e;
            }

            .summary-details {
                background: rgba(0, 0, 0, 0.2);
                border-radius: 8px;
                padding: 15px;
                border: 1px solid rgba(255, 255, 255, 0.05);
            }

            .detail-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
                color: var(--text);
                font-weight: 600;
            }

            .detail-item:last-child {
                margin-bottom: 0;
                font-weight: 700;
                color: #22c55e;
                font-size: 16px;
                padding-top: 10px;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            #cryptoAmountItem {
                background: rgba(34, 197, 94, 0.1);
                border: 1px solid rgba(34, 197, 94, 0.3);
                border-radius: 6px;
                padding: 8px 12px;
                margin-top: 8px;
            }

            #cryptoAmountItem span:last-child {
                color: #22c55e;
                font-weight: 700;
            }

            .modal-footer {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                padding: 20px;
                background: rgba(0, 0, 0, 0.1);
            }

            .modal-footer .btn {
                padding: 10px 20px;
                font-weight: 600;
                border-radius: 6px;
                transition: all 0.3s ease;
            }

            .modal-footer .btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            }

            /* Cryptocurrency Selection Styles */
            .cryptocurrency-selection {
                margin: 20px 0;
                padding: 15px;
                background: rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                border: 1px solid rgba(255, 255, 255, 0.05);
            }

            .crypto-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
                gap: 10px;
                margin-bottom: 15px;
            }

            .crypto-option {
                position: relative;
            }

            .crypto-radio {
                position: absolute;
                opacity: 0;
                pointer-events: none;
            }

            .crypto-label {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 12px 8px;
                background: rgba(0, 0, 0, 0.2);
                border: 2px solid rgba(255, 255, 255, 0.1);
                border-radius: 8px;
                cursor: pointer;
                transition: all 0.3s ease;
                text-align: center;
                min-height: 80px;
                justify-content: space-between;
            }

            .crypto-label:hover {
                border-color: rgba(34, 197, 94, 0.3);
                background: rgba(34, 197, 94, 0.05);
                transform: translateY(-2px);
            }

            .crypto-radio:checked + .crypto-label {
                border-color: #22c55e;
                background: rgba(34, 197, 94, 0.1);
                box-shadow: 0 0 15px rgba(34, 197, 94, 0.2);
            }

            .crypto-radio:checked + .crypto-label::after {
                content: "✓";
                position: absolute;
                top: 5px;
                right: 8px;
                color: #22c55e;
                font-weight: bold;
                font-size: 14px;
            }

            .crypto-icon {
                font-size: 20px;
                color: #22c55e;
                margin-bottom: 5px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .crypto-image {
                width: 32px;
                height: 32px;
                object-fit: contain;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.1);
                padding: 4px;
                transition: all 0.3s ease;
                border: 2px solid rgba(34, 197, 94, 0.3);
            }

            .crypto-image:hover {
                transform: scale(1.1);
                background: rgba(255, 255, 255, 0.2);
                border-color: rgba(34, 197, 94, 0.6);
            }

            .crypto-image:not([src]) {
                display: none;
            }

            .crypto-image[src=""] {
                display: none;
            }

            .crypto-info {
                margin-bottom: 5px;
            }

            .crypto-name {
                font-size: 12px;
                font-weight: 600;
                color: var(--text);
                margin-bottom: 2px;
            }

            .crypto-symbol {
                font-size: 10px;
                color: var(--muted);
                font-weight: 500;
            }

            .crypto-amount {
                font-size: 11px;
                font-weight: 700;
                color: #22c55e;
                text-align: center;
                word-break: break-all;
            }

            .crypto-rate-info {
                background: rgba(0, 0, 0, 0.2);
                border-radius: 6px;
                padding: 10px;
                border: 1px solid rgba(255, 255, 255, 0.05);
            }

            .rate-display {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 8px;
            }

            .rate-label {
                font-size: 14px;
                color: var(--text);
                font-weight: 600;
            }

            .rate-value {
                font-size: 14px;
                color: #22c55e;
                font-weight: 700;
            }

            @keyframes spin {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }

            /* Responsive crypto grid */
            @media (max-width: 768px) {
                .crypto-grid {
                    grid-template-columns: repeat(3, 1fr);
                    gap: 8px;
                }

                .crypto-label {
                    padding: 10px 6px;
                    min-height: 70px;
                }

                .crypto-icon {
                    font-size: 18px;
                }

                .crypto-image {
                    width: 28px;
                    height: 28px;
                }

                .crypto-name {
                    font-size: 11px;
                }

                .crypto-symbol {
                    font-size: 9px;
                }

                .crypto-amount {
                    font-size: 10px;
                }
            }

            @media (max-width: 480px) {
                .crypto-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .buy-hash-container {
                    padding: 15px;
                }

                .plans-grid {
                    grid-template-columns: 1fr;
                }

                .form-row {
                    grid-template-columns: 1fr;
                }

                .page-title {
                    font-size: 24px;
                }

                .page-title i {
                    font-size: 28px;
                }
            }

            @media (max-width: 480px) {
                .plan-card {
                    padding: 20px;
                }

                .custom-plan-container {
                    padding: 20px;
                }

                .purchase-history {
                    padding: 20px;
                }

                .table {
                    font-size: 12px;
                }
            }
        </style>

        <style>
            @keyframes blink {
                0%,
                50% {
                    opacity: 1;
                }
                51%,
                100% {
                    opacity: 0;
                }
            }

            @keyframes pulse {
                0%,
                100% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.05);
                }
            }

            .connection-status-offline {
                animation: pulse 2s infinite;
            }

            .full-terminal-window {
                background: #0a0a0a;
                border: 1px solid #333;
                border-radius: 8px;
                padding: 16px;
                font-family: "Courier New", monospace;
                font-size: 12px;
                color: #00ff00;
                height: 400px;
                overflow: hidden;
                position: relative;
                box-shadow: inset 0 0 10px rgba(0, 255, 0, 0.1);
            }

            .full-terminal-content {
                line-height: 1.4;
            }

            .terminal-cursor {
                position: absolute;
                bottom: 16px;
                left: 16px;
                width: 8px;
                height: 12px;
                background: #00ff00;
                animation: blink 1s infinite;
            }

            .block-event {
                color: #ffff00 !important;
                font-weight: bold;
                text-shadow: 0 0 5px #ffff00;
            }

            .share-event {
                color: #00ffff !important;
            }

            .pool-event {
                color: #ff8800 !important;
            }

            .asic-event {
                color: #00ff00 !important;
                font-weight: bold;
                text-shadow: 0 0 5px #00ff00;
            }

            .mining-stats-grid > div {
                transition: all 0.3s ease;
            }

            .mining-stats-grid > div:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            }

            .pool-details > div {
                transition: all 0.3s ease;
            }

            .pool-details > div:hover {
                background: rgba(59, 130, 246, 0.05);
                border-radius: 4px;
                padding: 4px;
            }

            /* Mobile Responsive Styles for Mining Terminal Modal */
            @media (max-width: 768px) {
                #miningTerminalModal .modal-dialog {
                    margin: 10px;
                    max-width: calc(100% - 20px);
                }

                #miningTerminalModal .modal-content {
                    border-radius: 12px;
                }

                #miningTerminalModal .modal-header {
                    padding: 15px;
                }

                #miningTerminalModal .modal-title {
                    font-size: 16px;
                }

                #miningTerminalModal .modal-body {
                    padding: 10px;
                }

                .full-terminal-window {
                    height: 250px;
                    margin: 10px;
                    font-size: 10px;
                    padding: 12px;
                }

                .mining-stats-grid {
                    grid-template-columns: repeat(2, 1fr) !important;
                    gap: 8px !important;
                    margin: 10px !important;
                }

                .mining-stats-grid > div {
                    padding: 10px !important;
                }

                .mining-stats-grid > div > div:first-child {
                    font-size: 10px !important;
                }

                .mining-stats-grid > div > div:last-child {
                    font-size: 14px !important;
                }

                .mining-pool-info {
                    margin: 10px !important;
                    padding: 12px !important;
                }

                .mining-pool-info h6 {
                    font-size: 13px !important;
                    margin-bottom: 10px !important;
                }

                .pool-details {
                    grid-template-columns: 1fr !important;
                    gap: 12px !important;
                }

                .pool-details > div > div:first-child {
                    font-size: 10px !important;
                }

                .pool-details > div > div:last-child {
                    font-size: 11px !important;
                    font-family: "Courier New", monospace;
                    word-break: break-all;
                }
            }

            @media (max-width: 480px) {
                #miningTerminalModal .modal-dialog {
                    margin: 5px;
                    max-width: calc(100% - 10px);
                }

                #miningTerminalModal .modal-header {
                    padding: 12px;
                }

                #miningTerminalModal .modal-title {
                    font-size: 15px;
                }

                #miningTerminalModal .modal-body {
                    padding: 8px;
                }

                .full-terminal-window {
                    height: 200px;
                    margin: 8px;
                    font-size: 9px;
                    padding: 10px;
                }

                .mining-stats-grid {
                    grid-template-columns: 1fr !important;
                    gap: 6px !important;
                    margin: 8px !important;
                }

                .mining-stats-grid > div {
                    padding: 8px !important;
                }

                .mining-stats-grid > div > div:first-child {
                    font-size: 9px !important;
                }

                .mining-stats-grid > div > div:last-child {
                    font-size: 13px !important;
                }

                .mining-pool-info {
                    margin: 8px !important;
                    padding: 10px !important;
                }

                .pool-details > div > div:first-child {
                    font-size: 9px !important;
                }

                .pool-details > div > div:last-child {
                    font-size: 10px !important;
                }
            }

            /* Enhanced Mobile Touch Interactions */
            @media (max-width: 768px) {
                .custom-profit-calculator {
                    touch-action: pan-y;
                }

                .custom-time-tabs {
                    touch-action: pan-x;
                }

                .preset-btn {
                    touch-action: manipulation;
                    -webkit-tap-highlight-color: transparent;
                }

                .custom-result-card {
                    touch-action: manipulation;
                    -webkit-tap-highlight-color: transparent;
                }

                /* Improve mobile scrolling */
                .calc-main-container {
                    -webkit-overflow-scrolling: touch;
                }

                /* Better mobile input experience */
                .calc-input-group input {
                    -webkit-appearance: none;
                    border-radius: 8px;
                    font-size: 16px;
                }

                .calc-input-group input:focus {
                    -webkit-transform: scale(1.02);
                    transform: scale(1.02);
                }
            }

            /* Mobile-specific animations */
            @media (max-width: 768px) {
                .custom-result-card {
                    transition: all 0.2s ease;
                }

                .custom-result-card:active {
                    transform: scale(0.98);
                    transition: all 0.1s ease;
                }

                .preset-btn:active {
                    transform: scale(0.95);
                    transition: all 0.1s ease;
                }
            }

            /* Mobile/Desktop Help Tips */
            .mobile-only {
                display: none;
            }

            .desktop-only {
                display: inline;
            }

            @media (max-width: 768px) {
                .mobile-only {
                    display: inline;
                }

                .desktop-only {
                    display: none;
                }
            }

            /* Financial Summary Card Styles */
            .financial-summary-card {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.05) 0%, rgba(59, 130, 246, 0.05) 100%);
                border: 1px solid rgba(34, 197, 94, 0.2);
                border-radius: 16px;
                padding: 24px;
                margin-bottom: 24px;
                position: relative;
                overflow: hidden;
                backdrop-filter: blur(10px);
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            }

            .financial-summary-card::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 3px;
                background: linear-gradient(90deg, #22c55e, #3b82f6, #f59e0b, #a855f7);
                background-size: 200% 100%;
                animation: gradientShift 3s ease-in-out infinite;
            }

            .financial-header {
                margin-bottom: 20px;
                padding-bottom: 15px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .financial-header h3 {
                font-size: 20px;
                font-weight: 700;
                color: var(--text);
                display: flex;
                align-items: center;
                gap: 10px;
                margin: 0;
            }

            .financial-header h3 i {
                background: linear-gradient(45deg, #22c55e, #3b82f6);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                font-size: 22px;
            }

            .financial-stats-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }

            .financial-stat-item {
                background: rgba(255, 255, 255, 0.03);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 12px;
                padding: 20px;
                display: flex;
                align-items: center;
                gap: 15px;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .financial-stat-item:hover {
                background: rgba(255, 255, 255, 0.05);
                border-color: rgba(255, 255, 255, 0.12);
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            }

            .financial-stat-item::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.05), rgba(59, 130, 246, 0.05));
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .financial-stat-item:hover::before {
                opacity: 1;
            }

            .stat-icon {
                width: 50px;
                height: 50px;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
                position: relative;
                z-index: 1;
            }

            .financial-stat-item:nth-child(1) .stat-icon {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.2), rgba(34, 197, 94, 0.1));
                color: #22c55e;
                border: 1px solid rgba(34, 197, 94, 0.3);
            }

            .financial-stat-item:nth-child(2) .stat-icon {
                background: linear-gradient(135deg, rgba(239, 68, 68, 0.2), rgba(239, 68, 68, 0.1));
                color: #ef4444;
                border: 1px solid rgba(239, 68, 68, 0.3);
            }

            .financial-stat-item:nth-child(3) .stat-icon {
                background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(59, 130, 246, 0.1));
                color: #3b82f6;
                border: 1px solid rgba(59, 130, 246, 0.3);
            }

            .stat-content {
                flex: 1;
                position: relative;
                z-index: 1;
            }

            .stat-label {
                color: var(--muted);
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 5px;
                font-weight: 600;
            }

            .stat-value {
                color: var(--text);
                font-size: 20px;
                font-weight: 700;
                margin-bottom: 3px;
            }

            .stat-usd {
                color: var(--muted);
                font-size: 13px;
                font-weight: 500;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .financial-stats-grid {
                    grid-template-columns: 1fr;
                    gap: 15px;
                }

                .financial-stat-item {
                    padding: 16px;
                }

                .stat-value {
                    font-size: 18px;
                }

                .financial-header h3 {
                    font-size: 18px;
                }
            }

            /* Quick Actions Card Styles - Matching Financial Summary */
            .quick-actions-card {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.05) 0%, rgba(59, 130, 246, 0.05) 100%);
                border: 1px solid rgba(34, 197, 94, 0.2);
                border-radius: 16px;
                padding: 24px;
                margin-top: 24px;
                margin-bottom: 24px;
                position: relative;
                overflow: hidden;
                backdrop-filter: blur(10px);
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            }

            .quick-actions-content {
                position: relative;
                z-index: 1;
            }

            .reinvest-section {
                margin-bottom: 16px;
                text-align: center;
            }

            .inactivity-warning {
                background: rgba(239, 68, 68, 0.1);
                border: 1px solid rgba(239, 68, 68, 0.2);
                border-radius: 8px;
                padding: 12px;
                margin-bottom: 16px;
                color: #ef4444;
                font-size: 13px;
                text-align: center;
            }

            .quick-actions-buttons {
                display: flex;
                flex-wrap: wrap;
                gap: 12px;
                justify-content: center;
            }

            .quick-action-btn {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 12px 20px;
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 10px;
                color: var(--text);
                text-decoration: none;
                font-weight: 600;
                font-size: 14px;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .quick-action-btn:hover {
                background: rgba(255, 255, 255, 0.1);
                border-color: rgba(255, 255, 255, 0.2);
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
                text-decoration: none;
                color: var(--text);
            }

            .quick-action-btn.primary {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.2), rgba(34, 197, 94, 0.1));
                border-color: rgba(34, 197, 94, 0.3);
                color: #22c55e;
            }

            .quick-action-btn.primary:hover {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.3), rgba(34, 197, 94, 0.2));
                border-color: rgba(34, 197, 94, 0.4);
                color: #22c55e;
            }

            .quick-action-btn i {
                font-size: 16px;
            }

            /* Quick Actions Responsive */
            @media (max-width: 768px) {
                .quick-actions-buttons {
                    gap: 8px;
                    justify-content: center;
                }

                .quick-action-btn {
                    padding: 10px 16px;
                    font-size: 13px;
                }

                .quick-action-btn i {
                    font-size: 14px;
                }

                .quick-actions-header h3 {
                    font-size: 18px;
                }
            }
        </style>

        @livewireStyles
    </head>

    <body>
        <div class="dashboard-wrap loaded">

            @include('partialls.sidebar')

            <div id="content" class="content">
                <div class="topbar">
                    <button class="menu-toggle" type="button" aria-label="Toggle sidebar" onclick="toggleSidebar()">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="18" height="18"><path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path></svg>
                    </button>
                    <div style="margin-left: auto; display: flex; gap: 8px; align-items: center;">
                        <a class="btn ghost" href="#withdrawalModal" data-toggle="modal" data-target="#withdrawalModal">Withdraw</a>
                        <a class="btn primary" href="/buy-hash">Buy Hash</a>
                        <div class="dropdown d-none d-md-block">

                            @include('partialls.menu-dropdown')

                        </div>
                    </div>
                </div>

                <main>
                    {{ $slot }}

                    <footer class="footer-min">
                        <div class="container" style="display: flex; gap: 16px; align-items: center; justify-content: space-between; flex-wrap: wrap;">
                            <span>© 2025 <a href="https://tronx.site">TronX</a>. All rights reserved.</span>
                            <span style="display: flex; gap: 14px;">
                                <a href="https://tronx.site/news">News</a>
                                <a href="https://tronx.site/payment-proofs">Payment Proofs</a>

                                <a href="javascript:void(0);" data-toggle="modal" data-target="#tosModal">Terms</a>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#privacyModal">Privacy</a>
                            </span>
                        </div>
                        <div class="container" style="margin-top: 12px;">
                            <ul class="list-unstyled list-inline text-right"></ul>
                        </div>
                    </footer>
                </main>

                <div wire:id="OypfDqx5BiCzMDguDVsD">
                    <div class="modal fade" wire:ignore.self="" id="depositModal" tabindex="-1" aria-labelledby="depositModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background: var(--card); color: var(--text);">
                                <div class="modal-header" style="background: linear-gradient(135deg, var(--accent), var(--accent-2)); color: #08111f;">
                                    <h5 class="modal-title" id="depositModal"><i class="fa fa-piggy-bank"></i> Buy Hashpower</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:loading.attr="disabled" wire:target="deposit">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="color: var(--text);">
                                    <!-- Payment Method Selection -->
                                    <div class="payment-method-selection mb-3">
                                        <label class="form-label" style="font-size: 14px; color: var(--text); margin-bottom: 12px;">
                                            <i class="fa fa-credit-card" style="color: #22c55e; margin-right: 6px;"></i>
                                            Choose Payment Method
                                        </label>
                                        <div class="payment-method-grid">
                                            <!-- Show FaucetPay for all users -->
                                            <div class="payment-method-option">
                                                <input type="radio" id="faucetpay" name="payment_method" value="faucetpay" wire:model="selected_payment_method" class="payment-method-radio" />
                                                <label for="faucetpay" class="payment-method-label">
                                                    <div class="payment-method-icon">
                                                        <i class="fa fa-coins"></i>
                                                    </div>
                                                    <div class="payment-method-info">
                                                        <div class="payment-method-name">FaucetPay</div>
                                                        <div class="payment-method-desc">Pay with any FaucetPay account</div>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="payment-method-option">
                                                <input type="radio" id="nowpayments" name="payment_method" value="nowpayments" wire:model="selected_payment_method" class="payment-method-radio" />
                                                <label for="nowpayments" class="payment-method-label">
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

                                    <!-- Payment Method Info -->
                                    <div class="alert alert-info mb-3">
                                        <i class="fa fa-info-circle"></i>
                                        <strong>FaucetPay Payment</strong><br />
                                        <small>
                                            You'll be redirected to FaucetPay to complete your payment using any FaucetPay account.
                                        </small>
                                    </div>

                                    <div class="row text-sm">
                                        <div class="offset-6 col-6 text-right">
                                            <strong>Minimum purchase:</strong>
                                            <a href="#purchaseMin" wire:click="setMin">
                                                1 GH/s
                                            </a>
                                            <br />
                                            <small class="text-muted">
                                                FaucetPay
                                            </small>
                                        </div>
                                    </div>

                                    <div class="input-group calc-input" style="margin-top: 8px;">
                                        <input
                                            type="number"
                                            wire:model="hashpower_amount"
                                            step="1"
                                            min="0"
                                            class="form-control"
                                            placeholder="Enter hashpower"
                                            wire:keyup="calculate"
                                            wire:target="deposit"
                                            wire:loading.attr="disabled"
                                            style="background: var(--bg-elev); border-color: rgba(255, 255, 255, 0.08); color: var(--text);"
                                        />
                                        <div class="input-group-append">
                                            <div class="input-group-text">GH/s</div>
                                        </div>
                                    </div>
                                    <small class="form-text muted"><strong>Total</strong>: 0 TRX</small>

                                    <!-- Quick Amount Buttons -->
                                    <div class="quick-amounts mb-3">
                                        <label class="form-label" style="font-size: 12px; color: var(--muted); margin-bottom: 8px;">
                                            <i class="fa fa-bolt" style="color: #22c55e; margin-right: 6px;"></i>
                                            Quick Amounts
                                        </label>
                                        <div class="quick-amount-grid">
                                            <button type="button" class="quick-amount-btn" wire:click="setQuickAmount(1)" wire:loading.attr="disabled">
                                                1 GH/s
                                            </button>
                                            <button type="button" class="quick-amount-btn" wire:click="setQuickAmount(2)" wire:loading.attr="disabled">
                                                2 GH/s
                                            </button>
                                            <button type="button" class="quick-amount-btn" wire:click="setQuickAmount(5)" wire:loading.attr="disabled">
                                                5 GH/s
                                            </button>
                                            <button type="button" class="quick-amount-btn" wire:click="setQuickAmount(10)" wire:loading.attr="disabled">
                                                10 GH/s
                                            </button>
                                            <button type="button" class="quick-amount-btn" wire:click="setQuickAmount(25)" wire:loading.attr="disabled">
                                                25 GH/s
                                            </button>
                                            <button type="button" class="quick-amount-btn" wire:click="setQuickAmount(50)" wire:loading.attr="disabled">
                                                50 GH/s
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal" wire:loading.attr="disabled" wire:target="deposit">Cancel</button>
                                    <button type="submit" class="btn btn-success" id="startBtn" wire:click="deposit" wire:loading.remove=""><i class="fa fa-shopping-cart"></i> Buy Hashpower</button>
                                    <button type="button" class="btn btn-success disabled" wire:loading="" wire:target="deposit"><i class="fa fa-spinner fa-spin"></i> Processing…</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    /* Payment Method Selection Styling */
                    .payment-method-grid {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                        gap: 12px;
                    }

                    .payment-method-option {
                        position: relative;
                    }

                    .payment-method-radio {
                        position: absolute;
                        opacity: 0;
                        width: 0;
                        height: 0;
                    }

                    .payment-method-label {
                        display: flex;
                        align-items: center;
                        padding: 16px;
                        border: 2px solid rgba(255, 255, 255, 0.1);
                        border-radius: 12px;
                        background: rgba(255, 255, 255, 0.02);
                        cursor: pointer;
                        transition: all 0.3s ease;
                        min-height: 80px;
                    }

                    .payment-method-radio:checked + .payment-method-label {
                        border-color: #22c55e;
                        background: rgba(34, 197, 94, 0.1);
                        box-shadow: 0 4px 12px rgba(34, 197, 94, 0.15);
                    }

                    .payment-method-label:hover {
                        border-color: rgba(34, 197, 94, 0.3);
                        background: rgba(34, 197, 94, 0.05);
                        transform: translateY(-2px);
                    }

                    .payment-method-icon {
                        width: 40px;
                        height: 40px;
                        border-radius: 8px;
                        background: linear-gradient(135deg, #22c55e, #16a34a);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin-right: 12px;
                        color: white;
                        font-size: 18px;
                    }

                    .payment-method-info {
                        flex: 1;
                    }

                    .payment-method-name {
                        font-weight: 600;
                        font-size: 14px;
                        color: var(--text);
                        margin-bottom: 4px;
                    }

                    .payment-method-desc {
                        font-size: 12px;
                        color: var(--muted);
                    }

                    /* Quick Amount Buttons Styling */
                    .quick-amounts {
                        margin-bottom: 15px;
                    }

                    .quick-amount-grid {
                        display: grid;
                        grid-template-columns: repeat(3, 1fr);
                        gap: 8px;
                    }

                    .quick-amount-btn {
                        padding: 8px 12px;
                        border: 1px solid rgba(34, 197, 94, 0.3);
                        background: rgba(34, 197, 94, 0.1);
                        color: #22c55e;
                        border-radius: 8px;
                        font-size: 12px;
                        font-weight: 600;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        text-align: center;
                        min-height: 36px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .quick-amount-btn:hover {
                        background: rgba(34, 197, 94, 0.2);
                        border-color: rgba(34, 197, 94, 0.5);
                        transform: translateY(-1px);
                        box-shadow: 0 4px 12px rgba(34, 197, 94, 0.15);
                    }

                    .quick-amount-btn:active {
                        transform: translateY(0) scale(0.98);
                        transition: all 0.1s ease;
                    }

                    .quick-amount-btn:disabled {
                        opacity: 0.6;
                        cursor: not-allowed;
                        transform: none;
                    }

                    /* Responsive Design */
                    @media (max-width: 480px) {
                        .payment-method-grid {
                            grid-template-columns: 1fr;
                            gap: 8px;
                        }

                        .payment-method-label {
                            padding: 12px;
                            min-height: 70px;
                        }

                        .payment-method-icon {
                            width: 32px;
                            height: 32px;
                            font-size: 16px;
                            margin-right: 10px;
                        }

                        .quick-amount-grid {
                            grid-template-columns: repeat(2, 1fr);
                            gap: 6px;
                        }

                        .quick-amount-btn {
                            padding: 6px 8px;
                            font-size: 11px;
                            min-height: 32px;
                        }
                    }

                    @media (max-width: 360px) {
                        .quick-amount-grid {
                            grid-template-columns: 1fr;
                            gap: 6px;
                        }
                    }
                </style>

                <!-- Livewire Component wire-end:OypfDqx5BiCzMDguDVsD -->
                <div wire:id="MdQ65ADLAGWWZ7uMIplQ">
                    <div class="modal fade" wire:ignore.self="" id="withdrawalModal" tabindex="-1" aria-labelledby="withdrawalModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content withdrawal-modal-content">
                                <div class="modal-header withdrawal-modal-header">
                                    <h5 class="modal-title" id="withdrawalModal"><i class="fa fa-money-bill"></i> Request Withdrawal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:loading.attr="disabled" wire:target="withdrawal">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body withdrawal-modal-body">
                                    <!-- Gateway-specific withdrawal options -->

                                    <!-- Withdrawal Form -->
                                    <div class="form-group">
                                        <label for="amount">Amount to Withdraw</label>
                                        <div class="input-group">
                                            <input
                                                type="number"
                                                step="0.00000001"
                                                min="0.00100000"
                                                max="0.000000000000000"
                                                class="form-control"
                                                id="amount"
                                                wire:model="amount"
                                                placeholder="Enter amount"
                                                wire:input.debounce.500ms="calcFees"
                                            />
                                            <div class="input-group-append">
                                                <span class="input-group-text">TRX</span>
                                            </div>
                                        </div>
                                        <small class="form-text"> <strong>Available:</strong> 0.00000000 TRX | <strong>Min:</strong> 0.00100000 TRX </small>
                                    </div>

                                    <!-- Fee Calculation -->
                                    <div class="fee-calculation-container">
                                        <div class="fee-calculation-header"><i class="fa fa-calculator"></i> Fee Calculation</div>
                                        <div class="fee-calculation-details">
                                            <div class="fee-row">
                                                <span class="fee-label">Amount:</span>
                                                <span class="fee-value">0.00000000 TRX</span>
                                            </div>
                                            <div class="fee-row">
                                                <span class="fee-label">Fees:</span>
                                                <span class="fee-value">0.00000000 TRX</span>
                                            </div>
                                            <div class="fee-row fee-total">
                                                <span class="fee-label">You will receive:</span>
                                                <span class="fee-value">0.00000000 TRX</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quick Amount Buttons -->
                                    <div class="form-group">
                                        <label>Quick Amounts:</label>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="btn btn-outline-secondary" wire:click="setMin">Min</button>
                                            <button type="button" class="btn btn-outline-secondary" wire:click="setMax">Max</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer withdrawal-modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal" wire:loading.attr="disabled" wire:target="withdrawal">Cancel</button>
                                    <button type="submit" class="btn btn-success" id="withdrawalConfirmBtn" wire:click="withdrawal" style="display: inline-block;"><i class="fa fa-hand-holding-usd"></i> Confirm Withdrawal</button>
                                    <button type="button" class="btn btn-success" id="withdrawalProcessingBtn" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Processing…</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    /* Withdrawal Modal Styling - Matching Buy Plans Theme */
                    .withdrawal-modal-content {
                        background: rgba(0, 0, 0, 0.9);
                        border: 1px solid rgba(255, 255, 255, 0.15);
                        border-radius: 12px;
                        position: relative;
                        overflow: hidden;
                        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
                    }

                    .withdrawal-modal-content::before {
                        content: "";
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        height: 3px;
                        background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
                        opacity: 1;
                    }

                    .withdrawal-modal-header {
                        background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(99, 102, 241, 0.1));
                        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
                        padding: 20px 25px;
                        color: var(--text);
                    }

                    .withdrawal-modal-header .modal-title {
                        font-size: 18px;
                        font-weight: 700;
                        color: var(--text);
                        margin: 0;
                    }

                    .withdrawal-modal-header .modal-title i {
                        color: #22c55e;
                        margin-right: 8px;
                    }

                    .withdrawal-modal-header .close {
                        color: var(--text);
                        opacity: 0.7;
                        transition: opacity 0.3s ease;
                    }

                    .withdrawal-modal-header .close:hover {
                        opacity: 1;
                        color: #ef4444;
                    }

                    .withdrawal-modal-body {
                        padding: 25px;
                        color: var(--text);
                        background: rgba(0, 0, 0, 0.8);
                    }

                    .withdrawal-modal-body .form-group {
                        margin-bottom: 20px;
                    }

                    .withdrawal-modal-body label {
                        font-weight: 600;
                        color: var(--text);
                        margin-bottom: 8px;
                        font-size: 14px;
                    }

                    .withdrawal-modal-body .form-control {
                        background: rgba(0, 0, 0, 0.7);
                        border: 1px solid rgba(255, 255, 255, 0.2);
                        color: var(--text);
                        border-radius: 8px;
                        padding: 12px 15px;
                        transition: all 0.3s ease;
                    }

                    .withdrawal-modal-body .form-control:focus {
                        background: rgba(0, 0, 0, 0.9);
                        border-color: #22c55e;
                        box-shadow: 0 0 0 0.2rem rgba(34, 197, 94, 0.25);
                        color: var(--text);
                    }

                    .withdrawal-modal-body .input-group-text {
                        background: rgba(34, 197, 94, 0.1);
                        border: 1px solid rgba(34, 197, 94, 0.2);
                        color: #22c55e;
                        font-weight: 600;
                    }

                    .withdrawal-modal-body .form-text {
                        color: rgba(255, 255, 255, 0.9);
                        font-size: 13px;
                        margin-top: 8px;
                        font-weight: 500;
                        line-height: 1.4;
                    }

                    .withdrawal-modal-body .form-text strong {
                        color: #22c55e;
                        font-weight: 700;
                    }

                    .withdrawal-modal-body .alert {
                        border-radius: 8px;
                        border: none;
                        padding: 15px;
                        margin-bottom: 20px;
                    }

                    .withdrawal-modal-body .alert-success {
                        background: rgba(34, 197, 94, 0.1);
                        color: #22c55e;
                        border-left: 4px solid #22c55e;
                    }

                    .withdrawal-modal-body .alert-warning {
                        background: rgba(245, 158, 11, 0.1);
                        color: #f59e0b;
                        border-left: 4px solid #f59e0b;
                    }

                    .withdrawal-modal-body .alert-danger {
                        background: rgba(239, 68, 68, 0.1);
                        color: #ef4444;
                        border-left: 4px solid #ef4444;
                    }

                    .withdrawal-modal-body .alert-secondary {
                        background: rgba(107, 114, 128, 0.1);
                        color: #6b7280;
                        border-left: 4px solid #6b7280;
                    }

                    /* Fee Calculation Styling - Clean and Readable */
                    .fee-calculation-container {
                        background: rgba(0, 0, 0, 0.3);
                        border: 1px solid rgba(255, 255, 255, 0.1);
                        border-radius: 8px;
                        padding: 15px;
                        margin-bottom: 20px;
                    }

                    .fee-calculation-header {
                        color: #ffffff;
                        font-size: 13px;
                        font-weight: 600;
                        margin-bottom: 12px;
                        display: flex;
                        align-items: center;
                        gap: 8px;
                    }

                    .fee-calculation-header i {
                        color: #22c55e;
                        font-size: 12px;
                    }

                    .fee-calculation-details {
                        display: flex;
                        flex-direction: column;
                        gap: 8px;
                    }

                    .fee-row {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 4px 0;
                    }

                    .fee-label {
                        color: rgba(255, 255, 255, 0.8);
                        font-size: 12px;
                        font-weight: 500;
                    }

                    .fee-value {
                        color: #ffffff;
                        font-size: 12px;
                        font-weight: 600;
                        font-family: "Courier New", monospace;
                    }

                    .fee-total {
                        border-top: 1px solid rgba(255, 255, 255, 0.1);
                        padding-top: 8px;
                        margin-top: 4px;
                    }

                    .fee-total .fee-label {
                        color: #22c55e;
                        font-weight: 600;
                    }

                    .fee-total .fee-value {
                        color: #22c55e;
                        font-weight: 700;
                        font-size: 13px;
                    }

                    .withdrawal-modal-body .btn-group .btn {
                        background: rgba(0, 0, 0, 0.7);
                        border: 1px solid rgba(255, 255, 255, 0.2);
                        color: var(--text);
                        transition: all 0.3s ease;
                    }

                    .withdrawal-modal-body .btn-group .btn:hover {
                        background: rgba(34, 197, 94, 0.1);
                        border-color: #22c55e;
                        color: #22c55e;
                    }

                    .withdrawal-modal-footer {
                        background: rgba(0, 0, 0, 0.8);
                        border-top: 1px solid rgba(255, 255, 255, 0.15);
                        padding: 20px 25px;
                    }

                    .withdrawal-modal-footer .btn {
                        border-radius: 8px;
                        padding: 10px 20px;
                        font-weight: 600;
                        transition: all 0.3s ease;
                        border: none;
                    }

                    .withdrawal-modal-footer .btn-danger {
                        background: rgba(239, 68, 68, 0.1);
                        color: #ef4444;
                        border: 1px solid rgba(239, 68, 68, 0.2);
                    }

                    .withdrawal-modal-footer .btn-danger:hover {
                        background: rgba(239, 68, 68, 0.2);
                        border-color: rgba(239, 68, 68, 0.3);
                        color: #ef4444;
                    }

                    .withdrawal-modal-footer .btn-success {
                        background: rgba(34, 197, 94, 0.1);
                        color: #22c55e;
                        border: 1px solid rgba(34, 197, 94, 0.2);
                    }

                    .withdrawal-modal-footer .btn-success:hover {
                        background: rgba(34, 197, 94, 0.2);
                        border-color: rgba(34, 197, 94, 0.3);
                        color: #22c55e;
                    }

                    /* Modal size adjustments */
                    .modal-dialog-centered {
                        max-width: 500px;
                    }

                    /* Responsive adjustments */
                    @media (max-width: 576px) {
                        .withdrawal-modal-header,
                        .withdrawal-modal-body,
                        .withdrawal-modal-footer {
                            padding: 15px 20px;
                        }

                        .withdrawal-modal-header .modal-title {
                            font-size: 16px;
                        }

                        .modal-dialog-centered {
                            margin: 10px;
                            max-width: calc(100% - 20px);
                        }
                    }
                </style>

                <!-- Livewire Component wire-end:MdQ65ADLAGWWZ7uMIplQ -->
                <!-- Logout Form -->
                <form id="logout-form" action="https://tronx.site/logout" method="POST" style="display: none;">
                    <input type="hidden" name="_token" value="YJB04lKZqwZJYELpppdnjo2ZtLzKPWTT0s3yhsPX" />
                </form>

                <!-- Tos Modal -->
                <div class="modal fade" id="tosModal" tabindex="-1" aria-labelledby="tosModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="background: var(--card); border: 1px solid rgba(255, 255, 255, 0.06);">
                            <div class="modal-header" style="background: var(--bg-elev); border-bottom: 1px solid rgba(255, 255, 255, 0.06);">
                                <h5 class="modal-title" id="tosModal" style="color: var(--text); margin: 0;"><i class="fa fa-file-contract"></i> Terms of Service</h5>
                            </div>
                            <div class="modal-body" style="color: var(--text); line-height: 1.6; padding: 24px;">
                                <p>Terms of service page content here</p>
                            </div>
                            <div class="modal-footer" style="background: var(--bg-elev); border-top: 1px solid rgba(255, 255, 255, 0.06);">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: var(--accent); border: none; color: #08111f; font-weight: 600;">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Privacy Modal -->
                <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="background: var(--card); border: 1px solid rgba(255, 255, 255, 0.06);">
                            <div class="modal-header" style="background: var(--bg-elev); border-bottom: 1px solid rgba(255, 255, 255, 0.06);">
                                <h5 class="modal-title" id="privacyModal" style="color: var(--text); margin: 0;"><i class="fa fa-shield-alt"></i> Privacy Policy</h5>
                            </div>
                            <div class="modal-body" style="color: var(--text); line-height: 1.6; padding: 24px;">
                                <p>Privacy policy page content here</p>
                            </div>
                            <div class="modal-footer" style="background: var(--bg-elev); border-top: 1px solid rgba(255, 255, 255, 0.06);">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: var(--accent); border: none; color: #08111f; font-weight: 600;">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ Modal -->
                <livewire:faqs-modal />

                <style>
                    /* FAQ Modal Styling - Custom Plan Theme */
                    .faq-modal-content {
                        background: rgba(0, 0, 0, 0.2);
                        border: 2px solid;
                        border-image: linear-gradient(45deg, #22c55e, #6366f1, #f59e0b, #22c55e) 1;
                        border-radius: 12px;
                        overflow: hidden;
                        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
                        backdrop-filter: blur(20px);
                        position: relative;
                        max-width: 800px;
                        margin: 0 auto;
                    }

                    .faq-modal-content::after {
                        content: "";
                        position: absolute;
                        top: -50%;
                        left: -50%;
                        width: 200%;
                        height: 200%;
                        background: radial-gradient(circle, rgba(34, 197, 94, 0.1) 0%, transparent 70%);
                        animation: rotate 20s linear infinite;
                        pointer-events: none;
                    }

                    @keyframes rotate {
                        from {
                            transform: rotate(0deg);
                        }
                        to {
                            transform: rotate(360deg);
                        }
                    }

                    .faq-modal-header {
                        background: rgba(0, 0, 0, 0.3);
                        border: none;
                        padding: 25px 30px;
                        position: relative;
                        overflow: hidden;
                        text-align: center;
                    }

                    .faq-modal-header .modal-title {
                        color: var(--text);
                        font-weight: 800;
                        font-size: 22px;
                        margin: 0;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 15px;
                        background: linear-gradient(45deg, #22c55e, #6366f1, #f59e0b);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-clip: text;
                        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
                        letter-spacing: 1px;
                    }

                    .faq-modal-header .modal-title i {
                        color: #22c55e;
                        font-size: 24px;
                        background: rgba(34, 197, 94, 0.1);
                        padding: 10px;
                        border-radius: 50%;
                        border: 1px solid rgba(34, 197, 94, 0.2);
                        min-width: 44px;
                        height: 44px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .faq-modal-header .close {
                        color: var(--text);
                        font-size: 20px;
                        opacity: 0.7;
                        transition: all 0.3s ease;
                        background: rgba(255, 255, 255, 0.05);
                        border: 1px solid rgba(255, 255, 255, 0.1);
                        border-radius: 50%;
                        width: 36px;
                        height: 36px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        position: absolute;
                        right: 20px;
                        top: 50%;
                        transform: translateY(-50%);
                    }

                    .faq-modal-header .close:hover {
                        opacity: 1;
                        background: rgba(255, 255, 255, 0.1);
                        transform: translateY(-50%) scale(1.1);
                        border-color: rgba(34, 197, 94, 0.3);
                    }

                    .faq-modal-body {
                        padding: 30px;
                        background: transparent;
                        color: var(--text);
                    }

                    .faq-container {
                        max-height: 60vh;
                        overflow-y: auto;
                        padding-right: 10px;
                    }

                    .faq-container::-webkit-scrollbar {
                        width: 8px;
                    }

                    .faq-container::-webkit-scrollbar-track {
                        background: rgba(255, 255, 255, 0.05);
                        border-radius: 10px;
                    }

                    .faq-container::-webkit-scrollbar-thumb {
                        background: linear-gradient(135deg, #22c55e, #6366f1);
                        border-radius: 10px;
                    }

                    .faq-container::-webkit-scrollbar-thumb:hover {
                        background: linear-gradient(135deg, #6366f1, #f59e0b);
                    }

                    .faq-item {
                        background: rgba(0, 0, 0, 0.3);
                        border: 1px solid rgba(255, 255, 255, 0.08);
                        border-radius: 8px;
                        margin-bottom: 20px;
                        overflow: hidden;
                        transition: all 0.3s ease;
                        position: relative;
                    }

                    .faq-item:hover {
                        transform: translateY(-3px);
                        border-color: rgba(34, 197, 94, 0.3);
                        box-shadow: 0 15px 40px rgba(34, 197, 94, 0.15);
                        background: rgba(34, 197, 94, 0.02);
                    }

                    .faq-question {
                        padding: 20px 25px;
                        cursor: pointer;
                        display: flex;
                        align-items: center;
                        gap: 15px;
                        background: rgba(255, 255, 255, 0.02);
                        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
                        transition: all 0.3s ease;
                    }

                    .faq-question:hover {
                        background: rgba(34, 197, 94, 0.05);
                    }

                    .faq-question i.fa-question {
                        color: #22c55e;
                        font-size: 16px;
                        background: rgba(34, 197, 94, 0.1);
                        padding: 8px;
                        border-radius: 50%;
                        border: 1px solid rgba(34, 197, 94, 0.2);
                        min-width: 32px;
                        height: 32px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .faq-question h4 {
                        color: var(--text);
                        font-size: 16px;
                        font-weight: 600;
                        margin: 0;
                        flex: 1;
                        line-height: 1.4;
                    }

                    .toggle-icon {
                        color: #6366f1;
                        font-size: 14px;
                        transition: transform 0.3s ease;
                        opacity: 0.7;
                    }

                    .faq-item.active .toggle-icon {
                        transform: rotate(180deg);
                        color: #22c55e;
                    }

                    .faq-answer {
                        max-height: 0;
                        overflow: hidden;
                        transition: max-height 0.3s ease;
                    }

                    .faq-item.active .faq-answer {
                        max-height: 500px;
                    }

                    .answer-content {
                        padding: 20px 25px 25px 67px;
                        color: var(--muted);
                        line-height: 1.6;
                        font-size: 14px;
                        background: rgba(0, 0, 0, 0.2);
                        border-top: 1px solid rgba(255, 255, 255, 0.03);
                    }

                    .answer-content p {
                        margin-bottom: 12px;
                    }

                    .answer-content p:last-child {
                        margin-bottom: 0;
                    }

                    .faq-modal-footer {
                        border-top: 1px solid rgba(255, 255, 255, 0.08);
                        padding: 20px 30px;
                        background: rgba(0, 0, 0, 0.2);
                        text-align: center;
                    }

                    .btn-close-faq {
                        background: linear-gradient(135deg, #22c55e, #6366f1);
                        border: none;
                        color: #ffffff;
                        font-weight: 600;
                        padding: 12px 24px;
                        border-radius: 8px;
                        transition: all 0.3s ease;
                        display: inline-flex;
                        align-items: center;
                        gap: 10px;
                        box-shadow: 0 8px 25px rgba(34, 197, 94, 0.3);
                    }

                    .btn-close-faq:hover {
                        transform: translateY(-2px);
                        box-shadow: 0 12px 35px rgba(34, 197, 94, 0.4);
                        background: linear-gradient(135deg, #6366f1, #f59e0b);
                    }

                    .btn-close-faq i {
                        font-size: 14px;
                    }

                    /* FAQ Item Animation */
                    .faq-item {
                        animation: fadeInUp 0.6s ease forwards;
                        opacity: 0;
                        transform: translateY(30px);
                    }

                    @keyframes fadeInUp {
                        to {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }

                    /* Responsive Design */
                    @media (max-width: 768px) {
                        .faq-modal-content {
                            margin: 20px;
                            border-radius: 12px;
                        }

                        .faq-modal-header {
                            padding: 20px 25px;
                        }

                        .faq-modal-header .modal-title {
                            font-size: 20px;
                        }

                        .faq-modal-body {
                            padding: 20px;
                        }

                        .faq-question {
                            padding: 15px 20px;
                        }

                        .faq-question h4 {
                            font-size: 15px;
                        }

                        .answer-content {
                            padding: 15px 20px 20px 55px;
                        }

                        .faq-modal-footer {
                            padding: 15px 20px;
                        }
                    }

                    @media (max-width: 480px) {
                        .faq-modal-header .modal-title {
                            font-size: 18px;
                            flex-direction: column;
                            gap: 10px;
                            text-align: center;
                        }

                        .faq-question {
                            flex-direction: column;
                            text-align: center;
                            gap: 10px;
                        }

                        .answer-content {
                            padding: 15px 20px;
                            text-align: center;
                        }
                    }
                </style>

                <!-- Livewire Scripts -->
                @livewireScripts

                <!-- Core -->
                <script src="https://tronx.site/assets/themes/dashboard/default/js/plugins/jquery/dist/jquery.min.js"></script>
                <script src="https://tronx.site/assets/themes/dashboard/default/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

                <!-- hCaptcha -->
                <script src="https://js.hcaptcha.com/1/api.js" async="" defer=""></script>

                <!-- Argon JS (kept for components like cards, charts) -->
                <script src="https://tronx.site/assets/themes/dashboard/default/js/argon-dashboard.js"></script>
                <script src="https://tronx.site/assets/themes/dashboard/default/js/custom.js"></script>

                <!-- Chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Sidebar Toggle Script -->
                <script>
                    function toggleSidebar() {
                        var sidebar = document.getElementById("sidebar");
                        var overlay = document.getElementById("sidebarOverlay");
                        if (!sidebar || !overlay) return;
                        sidebar.classList.toggle("open");
                        overlay.classList.toggle("show");
                    }
                    function closeSidebar() {
                        var sidebar = document.getElementById("sidebar");
                        var overlay = document.getElementById("sidebarOverlay");
                        if (!sidebar || !overlay) return;
                        sidebar.classList.remove("open");
                        overlay.classList.remove("show");
                    }
                    // Close on ESC
                    document.addEventListener("keydown", function (e) {
                        if (e.key === "Escape") {
                            closeSidebar();
                        }
                    });
                    // Close when clicking any sidebar link (mobile UX)
                    document.addEventListener("click", function (e) {
                        var link = e.target.closest(".sidebar a");
                        if (link) {
                            closeSidebar();
                        }
                    });
                    function toggleMobileProfile() {
                        const profileDetails = document.getElementById("profileDetails");
                        const profileToggle = document.getElementById("profileToggle");

                        if (profileDetails.style.display === "none") {
                            profileDetails.style.display = "block";
                            profileToggle.classList.add("rotated");
                        } else {
                            profileDetails.style.display = "none";
                            profileToggle.classList.remove("rotated");
                        }
                    }

                    // Contest Countdown Timer
                    function initContestTimer() {
                        const contestTimer = document.querySelector(".contest-timer");
                        if (!contestTimer) {
                            console.log("No contest timer found");
                            return;
                        }

                        const endDateString = contestTimer.dataset.endDate;
                        const endDate = new Date(endDateString);
                        const countdownElement = contestTimer.querySelector(".countdown");

                        console.log("Contest timer initialized with end date:", endDateString);

                        // Validate end date
                        if (isNaN(endDate.getTime())) {
                            console.error("Invalid contest end date:", endDateString);
                            countdownElement.textContent = "Invalid Date";
                            contestTimer.style.color = "#ef4444";
                            return;
                        }

                        let timerInterval;

                        function updateTimer() {
                            const now = new Date().getTime();
                            const timeLeft = endDate.getTime() - now;

                            if (timeLeft <= 0) {
                                countdownElement.textContent = "Ended";
                                contestTimer.style.color = "#ef4444";
                                if (timerInterval) {
                                    clearInterval(timerInterval);
                                }
                                return;
                            }

                            // Use EXACT same calculation as contest page
                            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                            let timeString = "";
                            if (days > 0) {
                                timeString = `${days}d ${hours.toString().padStart(2, "0")}h ${minutes.toString().padStart(2, "0")}m`;
                            } else if (hours > 0) {
                                timeString = `${hours}h ${minutes.toString().padStart(2, "0")}m ${seconds.toString().padStart(2, "0")}s`;
                            } else {
                                timeString = `${minutes}m ${seconds.toString().padStart(2, "0")}s`;
                            }

                            countdownElement.textContent = timeString;

                            // Change color based on time remaining
                            if (timeLeft < 3600000) {
                                // Less than 1 hour
                                contestTimer.style.color = "#ef4444";
                            } else if (timeLeft < 86400000) {
                                // Less than 1 day
                                contestTimer.style.color = "#f59e0b";
                            } else {
                                contestTimer.style.color = "#fbbf24";
                            }
                        }

                        // Update immediately and then every second
                        updateTimer();
                        timerInterval = setInterval(updateTimer, 1000);
                    }

                    // Initialize timer when DOM is loaded
                    document.addEventListener("DOMContentLoaded", initContestTimer);

                    // FOUC Prevention - Show content when CSS is loaded
                    document.addEventListener("DOMContentLoaded", function () {
                        // Add loaded class to show content smoothly
                        const dashboardWrap = document.querySelector(".dashboard-wrap");
                        if (dashboardWrap) {
                            // Small delay to ensure CSS is loaded
                            setTimeout(function () {
                                dashboardWrap.classList.add("loaded");
                            }, 100);
                        }
                    });

                    // Preload CSS fallback for older browsers
                    (function () {
                        var cssPreload = document.querySelectorAll('link[rel="preload"][as="style"]');
                        cssPreload.forEach(function (link) {
                            link.onload = function () {
                                this.rel = "stylesheet";
                            };
                        });
                    })();
                </script>

            </div>
        </div>
    </body>
</html>
