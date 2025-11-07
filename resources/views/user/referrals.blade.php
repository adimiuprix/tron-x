<x-layout_backend :user="$user">
<div class="container" style="margin-top: 24px; margin-bottom: 24px;">
    <div class="referrals-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">
                <i class="fa fa-share-alt"></i>
                <span>Referral Tools</span>
            </div>
            <div class="page-subtitle">
                Earn rewards by sharing your referral link with friends
            </div>
        </div>

        <!-- Referral Tools Card -->
        <div class="referrals-card">
            <div class="referrals-header">
                <h3><i class="fa fa-link"></i> Referral Program</h3>
            </div>
            <div class="referrals-content">
                <div class="referral-description">
                    <p>You can earn coins by sharing referral link to your friends. For each referral deposit, you will receive <strong>15%</strong> of the deposit amount.</p>
                </div>

                <!-- Referral Statistics -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-value">0</div>
                            <div class="stat-label">Total Referrals</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fa fa-user-check"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-value">0</div>
                            <div class="stat-label">Active Referrals</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fa fa-coins"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-value">0.00000000</div>
                            <div class="stat-label">Total Commission</div>
                        </div>
                    </div>
                </div>

                <div class="referral-link-section">
                    <label for="link">Referral Link</label>
                    <div class="link-input-group">
                        <div class="copy-btn" title="Copy to Clipboard" onclick="copy_ref_link();">
                            <i class="fa fa-copy"></i>
                        </div>
                        <input type="text" name="link" id="link" class="link-input" readonly="" value="https://tronx.site/r/907721900" />
                        <div class="hits-info">
                            <i class="fa fa-retweet"></i>
                            <span>0 hits</span>
                        </div>
                    </div>
                    <div class="copy-success" id="reflink_copied"><i class="fa fa-check-circle"></i> Copied to Clipboard</div>
                </div>
                
            </div>
        </div>

        <!-- Referrals List Card -->
        <div class="referrals-list-card">
            <div class="referrals-list-header">
                <h3><i class="fa fa-list"></i> Referrals List</h3>
            </div>
            <div class="referrals-list-content">
                <div class="table-responsive">
                    <table class="referrals-table">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Status</th>
                                <th>Commission Earned</th>
                                <th>Join Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" class="empty-state">
                                    <div class="empty-content">
                                        <i class="fa fa-users"></i>
                                        <h4>No Referrals Found</h4>
                                        <p>Start sharing your referral link to earn commissions!</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Referrals Page Styling - Matching Theme */
    .referrals-container {
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

    /* Referrals Card */
    .referrals-card {
        background: rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        backdrop-filter: blur(10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        margin-bottom: 30px;
    }

    .referrals-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
        opacity: 1;
    }

    .referrals-header {
        background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(99, 102, 241, 0.1));
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        padding: 20px 25px;
    }

    .referrals-header h3 {
        font-size: 20px;
        font-weight: 700;
        color: var(--text);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .referrals-header h3 i {
        color: #22c55e;
    }

    .referrals-content {
        padding: 25px;
    }

    .referral-description {
        margin-bottom: 25px;
        padding: 15px;
        background: rgba(34, 197, 94, 0.05);
        border-radius: 8px;
        border-left: 4px solid #22c55e;
    }

    .referral-description p {
        margin: 0;
        color: var(--text);
        font-weight: 500;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
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
        background: rgba(59, 130, 246, 0.1);
        color: #3b82f6;
        border: 1px solid rgba(59, 130, 246, 0.2);
    }

    .stat-card:nth-child(3) .stat-icon {
        background: rgba(245, 158, 11, 0.1);
        color: #f59e0b;
        border: 1px solid rgba(245, 158, 11, 0.2);
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

    /* Referral Link Section */
    .referral-link-section {
        margin-top: 20px;
    }

    .referral-link-section label {
        display: block;
        font-weight: 600;
        color: var(--text);
        margin-bottom: 10px;
        font-size: 14px;
    }

    .link-input-group {
        display: flex;
        align-items: center;
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    .copy-btn {
        padding: 12px 15px;
        background: rgba(34, 197, 94, 0.1);
        color: #22c55e;
        cursor: pointer;
        transition: all 0.3s ease;
        border-right: 1px solid rgba(255, 255, 255, 0.1);
    }

    .copy-btn:hover {
        background: rgba(34, 197, 94, 0.2);
    }

    .link-input {
        flex: 1;
        background: transparent;
        border: none;
        color: var(--text);
        padding: 12px 15px;
        font-size: 14px;
        outline: none;
    }

    .hits-info {
        padding: 12px 15px;
        background: rgba(59, 130, 246, 0.1);
        color: #3b82f6;
        font-size: 12px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 5px;
        border-left: 1px solid rgba(255, 255, 255, 0.1);
    }

    .copy-success {
        display: none;
        margin-top: 8px;
        padding: 8px 12px;
        background: rgba(34, 197, 94, 0.1);
        color: #22c55e;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    /* Referrals List Card */
    .referrals-list-card {
        background: rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        backdrop-filter: blur(10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .referrals-list-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
        opacity: 1;
    }

    .referrals-list-header {
        background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(99, 102, 241, 0.1));
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        padding: 20px 25px;
    }

    .referrals-list-header h3 {
        font-size: 20px;
        font-weight: 700;
        color: var(--text);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .referrals-list-header h3 i {
        color: #22c55e;
    }

    .referrals-list-content {
        padding: 0;
    }

    /* Table Styling */
    .referrals-table {
        width: 100%;
        border-collapse: collapse;
        color: var(--text);
    }

    .referrals-table thead {
        background: rgba(0, 0, 0, 0.3);
    }

    .referrals-table th {
        padding: 15px 20px;
        text-align: left;
        font-weight: 600;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.9);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .referrals-table td {
        padding: 15px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        vertical-align: middle;
    }

    .referrals-table tbody tr {
        transition: all 0.3s ease;
    }

    .referrals-table tbody tr:hover {
        background: rgba(34, 197, 94, 0.05);
    }

    /* Info Styling */
    .user-id-info,
    .date-info {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--text);
        font-weight: 500;
    }

    .user-id-info i {
        color: #6366f1;
    }

    .date-info i {
        color: #6b7280;
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

    .status-badge.status-active {
        background: rgba(34, 197, 94, 0.1);
        color: #22c55e;
        border: 1px solid rgba(34, 197, 94, 0.2);
    }

    .status-badge.status-inactive {
        background: rgba(59, 130, 246, 0.1);
        color: #3b82f6;
        border: 1px solid rgba(59, 130, 246, 0.2);
    }

    .status-badge.status-banned {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
        border: 1px solid rgba(239, 68, 68, 0.2);
    }

    /* Commission Info */
    .commission-info {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .commission-amount {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #22c55e;
        font-weight: 600;
    }

    .commission-rate {
        font-size: 11px;
        color: rgba(255, 255, 255, 0.6);
    }

    .no-commission {
        display: flex;
        align-items: center;
        gap: 6px;
        color: rgba(255, 255, 255, 0.5);
        font-size: 13px;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }

    .empty-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .empty-content i {
        font-size: 48px;
        color: rgba(255, 255, 255, 0.3);
    }

    .empty-content h4 {
        font-size: 18px;
        font-weight: 600;
        color: var(--text);
        margin: 0;
    }

    .empty-content p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.6);
        margin: 0;
        max-width: 300px;
    }

    /* Footer */
    .referrals-list-footer {
        background: rgba(0, 0, 0, 0.1);
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        padding: 20px 25px;
        display: flex;
        justify-content: center;
    }

    /* Pagination Styling */
    .pagination {
        margin: 0;
    }

    .page-link {
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: var(--text);
        padding: 8px 12px;
        margin: 0 2px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .page-link:hover {
        background: rgba(34, 197, 94, 0.1);
        border-color: #22c55e;
        color: #22c55e;
    }

    .page-item.active .page-link {
        background: rgba(34, 197, 94, 0.2);
        border-color: #22c55e;
        color: #22c55e;
    }

    .page-item.disabled .page-link {
        background: rgba(0, 0, 0, 0.1);
        border-color: rgba(255, 255, 255, 0.05);
        color: rgba(255, 255, 255, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .referrals-container {
            padding: 15px;
        }

        .page-title span {
            font-size: 24px;
        }

        .page-title i {
            font-size: 24px;
        }

        .stats-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .referrals-table th,
        .referrals-table td {
            padding: 12px 15px;
            font-size: 13px;
        }

        .status-badge {
            padding: 4px 8px;
            font-size: 11px;
        }

        .link-input-group {
            flex-direction: column;
        }

        .copy-btn,
        .hits-info {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        .referrals-table {
            font-size: 12px;
        }

        .referrals-table th,
        .referrals-table td {
            padding: 10px 12px;
        }

        .page-title {
            flex-direction: column;
            gap: 8px;
        }
    }
</style>

<script>
    function copy_ref_link() {
        const linkInput = document.getElementById('link');
        linkInput.select();
        document.execCommand('copy');
        const successMessage = document.getElementById('reflink_copied');
        successMessage.style.display = 'block';
        setTimeout(() => {
            successMessage.style.display = 'none';
        }, 2000);
    }
    document.addEventListener('DOMContentLoaded', () => {
        const copyBtn = document.querySelector('.copy-btn');
        copyBtn.addEventListener('click', copy_ref_link);
    });
</script>
</x-layout_backend>