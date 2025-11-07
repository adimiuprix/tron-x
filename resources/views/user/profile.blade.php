<div class="container" style="margin-top: 24px; margin-bottom: 24px;">
    <div class="profile-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">
                <i class="fa fa-user"></i>
                <span>My Profile</span>
            </div>
            <div class="page-subtitle">
                Manage your account information and view statistics
            </div>
        </div>

        <!-- Profile Card -->
        <div class="profile-card">
            <div class="profile-header">
                <h3><i class="fa fa-user-circle"></i> Account Profile</h3>
            </div>
            <div class="profile-content">
                <!-- Account Information -->
                <div class="account-info-section">
                    <div class="section-header">
                        <h4><i class="fa fa-wallet"></i> Account Information</h4>
                    </div>

                    <!-- Authentication Method Indicator -->
                    <div class="auth-method-indicator">
                        <i class="fa fa-info-circle"></i>
                        <strong>Authentication Method:</strong>
                        <span class="auth-badge wallet"> <i class="fa fa-wallet"></i> Tron Wallet </span>
                    </div>

                    <div class="account-details">
                        <div class="detail-item">
                            <div class="detail-label"><i class="fa fa-wallet"></i> Tron Wallet:</div>
                            <div class="detail-value">
                                <span class="wallet-address">TCeyJnEAsAnXU4xP3vcRi4E6KzAqdXj8YF</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Update Form -->
                <div class="profile-form-section">
                    <div class="section-header">
                        <h4><i class="fa fa-edit"></i> Profile Settings</h4>
                    </div>

                    <form method="POST" action="https://tronx.site/profile" class="profile-form">
                        <input type="hidden" name="_token" value="J5AWOVpwklxHuOYoQu56QkrjfeWuvfKS1P1xeKVE" />
                        <div class="form-group focused">
                            <label for="wallet"> <i class="fa fa-wallet"></i> Tron Wallet Address </label>
                            <input type="text" class="form-control" id="wallet" name="wallet" value="TCeyJnEAsAnXU4xP3vcRi4E6KzAqdXj8YF" readonly="" />
                            <div class="form-note"><i class="fa fa-lock"></i> Authentication method cannot be changed</div>
                        </div>

                        <div class="form-info">
                            <i class="fa fa-info-circle"></i>
                            <strong>Note:</strong> Your authentication method (Wallet Address) cannot be modified for security reasons.
                        </div>
                    </form>
                </div>

                <!-- Account Statistics -->
                <div class="stats-section">
                    <div class="section-header">
                        <h4><i class="fa fa-chart-bar"></i> Account Statistics</h4>
                    </div>
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fa fa-arrow-down"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-value">0.00000000 TRX</div>
                                <div class="stat-label">Total Deposits</div>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fa fa-arrow-up"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-value">0.00000000 TRX</div>
                                <div class="stat-label">Total Withdrawals</div>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fa fa-wallet"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-value">0.00000000 TRX</div>
                                <div class="stat-label">Current Balance</div>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-value">0</div>
                                <div class="stat-label">Referrals</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Profile Page Styling - Matching Theme */
        .profile-container {
            max-width: 800px;
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

        /* Profile Card */
        .profile-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .profile-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
            opacity: 1;
        }

        .profile-header {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(99, 102, 241, 0.1));
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 20px 25px;
        }

        .profile-header h3 {
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-header h3 i {
            color: #22c55e;
        }

        .profile-content {
            padding: 25px;
        }

        /* Section Headers */
        .section-header {
            margin-bottom: 20px;
        }

        .section-header h4 {
            font-size: 18px;
            font-weight: 600;
            color: var(--text);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-header h4 i {
            color: #22c55e;
        }

        /* Account Information Section */
        .account-info-section {
            margin-bottom: 30px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border-left: 4px solid #22c55e;
        }

        .auth-method-indicator {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            padding: 15px;
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.2);
            border-radius: 8px;
            color: var(--text);
            font-weight: 500;
        }

        .auth-method-indicator i {
            color: #3b82f6;
        }

        .auth-badge {
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

        .auth-badge.dual {
            background: rgba(168, 85, 247, 0.1);
            color: #a855f7;
            border: 1px solid rgba(168, 85, 247, 0.2);
        }

        .auth-badge.faucetpay {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .auth-badge.wallet {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            border: 1px solid rgba(245, 158, 11, 0.2);
        }

        .auth-badge.not-set {
            background: rgba(107, 114, 128, 0.1);
            color: #6b7280;
            border: 1px solid rgba(107, 114, 128, 0.2);
        }

        .account-details {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-label {
            min-width: 150px;
            font-weight: 600;
            color: var(--text);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .detail-label i {
            color: #22c55e;
        }

        .detail-value {
            flex: 1;
            color: var(--text);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .detail-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .wallet-address {
            font-family: monospace;
            font-size: 13px;
            background: rgba(255, 255, 255, 0.05);
            padding: 8px 12px;
            border-radius: 6px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Status Badges */
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

        .status-badge.verified {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .status-badge.not-verified {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            border: 1px solid rgba(245, 158, 11, 0.2);
        }

        .status-badge.status-active {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .status-badge.status-inactive {
            background: rgba(107, 114, 128, 0.1);
            color: #6b7280;
            border: 1px solid rgba(107, 114, 128, 0.2);
        }

        /* Profile Form Section */
        .profile-form-section {
            margin-bottom: 30px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border-left: 4px solid #3b82f6;
        }

        .profile-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-weight: 600;
            color: var(--text);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group label i {
            color: #22c55e;
        }

        .form-control {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text);
            padding: 12px 15px;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            opacity: 0.7;
            cursor: not-allowed;
        }

        .form-control:focus {
            outline: none;
            border-color: rgba(34, 197, 94, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(34, 197, 94, 0.1);
        }

        .form-note {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .form-note i {
            color: #f59e0b;
        }

        .form-info {
            padding: 15px;
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.2);
            border-radius: 8px;
            color: var(--text);
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
        }

        .form-info i {
            color: #3b82f6;
        }

        /* Stats Section */
        .stats-section {
            padding: 20px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border-left: 4px solid #f59e0b;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .stat-card {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            border-color: rgba(34, 197, 94, 0.3);
            box-shadow: 0 8px 25px rgba(34, 197, 94, 0.1);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .stat-card:nth-child(1) .stat-icon {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .stat-card:nth-child(2) .stat-icon {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .stat-card:nth-child(3) .stat-icon {
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .stat-card:nth-child(4) .stat-icon {
            background: rgba(168, 85, 247, 0.1);
            color: #a855f7;
            border: 1px solid rgba(168, 85, 247, 0.2);
        }

        .stat-content {
            flex: 1;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 4px;
        }

        .stat-label {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .profile-container {
                padding: 10px;
                margin: 0;
                max-width: 100%;
            }

            .page-header {
                padding: 20px 0;
                margin-bottom: 20px;
            }

            .page-title {
                flex-direction: column;
                gap: 8px;
            }

            .page-title span {
                font-size: 22px;
            }

            .page-title i {
                font-size: 22px;
            }

            .page-subtitle {
                font-size: 14px;
            }

            .profile-card {
                border-radius: 8px;
                margin: 0;
            }

            .profile-header {
                padding: 15px 20px;
            }

            .profile-header h3 {
                font-size: 18px;
            }

            .profile-content {
                padding: 15px;
            }

            .section-header h4 {
                font-size: 16px;
            }

            .detail-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                padding: 12px;
            }

            .detail-label {
                min-width: auto;
                font-size: 13px;
            }

            .detail-value {
                font-size: 14px;
            }

            .detail-row {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .stat-card {
                padding: 15px;
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            .stat-icon {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .stat-value {
                font-size: 20px;
            }

            .stat-label {
                font-size: 11px;
            }

            .auth-method-indicator {
                flex-direction: column;
                gap: 8px;
                text-align: center;
            }

            .auth-badge {
                font-size: 12px;
                padding: 6px 10px;
            }

            .status-badge {
                font-size: 11px;
                padding: 4px 8px;
            }

            .wallet-address {
                font-size: 12px;
                word-break: break-all;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-control {
                font-size: 14px;
                padding: 10px 12px;
            }

            .btn {
                font-size: 14px;
                padding: 10px 16px;
            }
        }

        @media (max-width: 576px) {
            .profile-container {
                padding: 8px;
            }

            .page-title span {
                font-size: 20px;
            }

            .page-title i {
                font-size: 20px;
            }

            .profile-header {
                padding: 12px 15px;
            }

            .profile-header h3 {
                font-size: 16px;
            }

            .profile-content {
                padding: 12px;
            }

            .section-header h4 {
                font-size: 15px;
            }

            .detail-item {
                padding: 10px;
            }

            .detail-label {
                font-size: 12px;
            }

            .detail-value {
                font-size: 13px;
            }

            .stat-card {
                padding: 12px;
            }

            .stat-icon {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }

            .stat-value {
                font-size: 18px;
            }

            .stat-label {
                font-size: 10px;
            }

            .auth-badge {
                font-size: 11px;
                padding: 5px 8px;
            }

            .status-badge {
                font-size: 10px;
                padding: 3px 6px;
            }

            .form-control {
                font-size: 13px;
                padding: 8px 10px;
            }

            .btn {
                font-size: 13px;
                padding: 8px 14px;
            }
        }

        @media (max-width: 480px) {
            .profile-container {
                padding: 5px;
            }

            .page-header {
                padding: 15px 0;
            }

            .page-title span {
                font-size: 18px;
            }

            .page-title i {
                font-size: 18px;
            }

            .page-subtitle {
                font-size: 12px;
            }

            .profile-header {
                padding: 10px 12px;
            }

            .profile-header h3 {
                font-size: 15px;
            }

            .profile-content {
                padding: 10px;
            }

            .section-header h4 {
                font-size: 14px;
            }

            .detail-item {
                padding: 8px;
            }

            .detail-label {
                font-size: 11px;
            }

            .detail-value {
                font-size: 12px;
            }

            .stat-card {
                padding: 10px;
            }

            .stat-icon {
                width: 35px;
                height: 35px;
                font-size: 16px;
            }

            .stat-value {
                font-size: 16px;
            }

            .stat-label {
                font-size: 9px;
            }

            .auth-badge {
                font-size: 10px;
                padding: 4px 6px;
            }

            .status-badge {
                font-size: 9px;
                padding: 2px 5px;
            }

            .form-control {
                font-size: 12px;
                padding: 6px 8px;
            }

            .btn {
                font-size: 12px;
                padding: 6px 12px;
            }
        }
    </style>
</div>
