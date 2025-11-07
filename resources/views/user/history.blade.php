<x-layout_backend :user="$user">
<div class="container" style="margin-top: 24px; margin-bottom: 24px;">
    <div class="history-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">
                <i class="fa fa-clock"></i>
                <span>Account History</span>
            </div>
            <div class="page-subtitle">
                View your account activity and transaction history
            </div>
        </div>

        <!-- History Card -->
        <div class="history-card">
            <div class="history-header">
                <h3><i class="fa fa-history"></i> Transaction History</h3>
            </div>
            <div class="history-content">
                <div class="table-responsive">
                    <table class="history-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3" class="empty-state">
                                    <div class="empty-content">
                                        <i class="fa fa-inbox"></i>
                                        <h4>No History Found</h4>
                                        <p>Your account history will appear here once you start using the platform.</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* History Page Styling - Matching Theme */
        .history-container {
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

        /* History Card */
        .history-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .history-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
            opacity: 1;
        }

        .history-header {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(99, 102, 241, 0.1));
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 20px 25px;
        }

        .history-header h3 {
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .history-header h3 i {
            color: #22c55e;
        }

        .history-content {
            padding: 0;
        }

        /* Table Styling */
        .history-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--text);
        }

        .history-table thead {
            background: rgba(0, 0, 0, 0.3);
        }

        .history-table th {
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .history-table td {
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            vertical-align: middle;
        }

        .history-table tbody tr {
            transition: all 0.3s ease;
        }

        .history-table tbody tr:hover {
            background: rgba(34, 197, 94, 0.05);
        }

        /* Type Badges */
        .type-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .type-badge.type-deposit {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .type-badge.type-withdrawal {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .type-badge.type-purchase {
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .type-badge.type-referral {
            background: rgba(168, 85, 247, 0.1);
            color: #a855f7;
            border: 1px solid rgba(168, 85, 247, 0.2);
        }

        .type-badge.type-profit {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            border: 1px solid rgba(245, 158, 11, 0.2);
        }

        /* Description and Date Styling */
        .description-text {
            color: var(--text);
            font-weight: 500;
        }

        .expire-info {
            margin-top: 5px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .expire-info i {
            color: #f59e0b;
        }

        .date-info {
            color: rgba(255, 255, 255, 0.7);
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .date-info i {
            color: #6b7280;
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
        .history-footer {
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
            .history-container {
                padding: 15px;
            }

            .page-title span {
                font-size: 24px;
            }

            .page-title i {
                font-size: 24px;
            }

            .history-table th,
            .history-table td {
                padding: 12px 15px;
                font-size: 13px;
            }

            .type-badge {
                padding: 4px 8px;
                font-size: 11px;
            }
        }

        @media (max-width: 576px) {
            .history-table {
                font-size: 12px;
            }

            .history-table th,
            .history-table td {
                padding: 10px 12px;
            }

            .page-title {
                flex-direction: column;
                gap: 8px;
            }
        }
    </style>
</div>
</x-layout_backend>