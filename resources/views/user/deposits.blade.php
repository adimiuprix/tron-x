<x-layout_backend :user="$user">
    <div class="container" style="margin-top: 24px; margin-bottom: 24px;">
    <div class="deposits-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">
                <i class="fa fa-arrow-down"></i>
                <span>Deposit History</span>
            </div>
            <div class="page-subtitle">
                View your deposit transactions and payment history
            </div>
        </div>

        <!-- Deposits Card -->
        <div class="deposits-card">
            <div class="deposits-header">
                <h3><i class="fa fa-history"></i> Transaction History</h3>
            </div>
            <div class="deposits-content">
                <div class="table-responsive">
                    <table class="deposits-table">
                        <thead>
                            <tr>
                                <th>Invoice</th>
                                <th>HashPower</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="6" class="empty-state">
                                    <div class="empty-content">
                                        <i class="fa fa-inbox"></i>
                                        <h4>No Deposits Found</h4>
                                        <p>Your deposit history will appear here once you make your first deposit.</p>
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
        /* Deposits Page Styling - Matching Theme */
        .deposits-container {
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

        /* Deposits Card */
        .deposits-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .deposits-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
            opacity: 1;
        }

        .deposits-header {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(99, 102, 241, 0.1));
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 20px 25px;
        }

        .deposits-header h3 {
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .deposits-header h3 i {
            color: #22c55e;
        }

        .deposits-content {
            padding: 0;
        }

        /* Table Styling */
        .deposits-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--text);
        }

        .deposits-table thead {
            background: rgba(0, 0, 0, 0.3);
        }

        .deposits-table th {
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .deposits-table td {
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            vertical-align: middle;
        }

        .deposits-table tbody tr {
            transition: all 0.3s ease;
        }

        .deposits-table tbody tr:hover {
            background: rgba(34, 197, 94, 0.05);
        }

        /* Info Styling */
        .invoice-info,
        .hashpower-info,
        .amount-info,
        .date-info {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text);
            font-weight: 500;
        }

        .invoice-info i {
            color: #6366f1;
        }

        .hashpower-info i {
            color: #f59e0b;
        }

        .amount-info i {
            color: #22c55e;
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

        .status-badge.status-pending {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            border: 1px solid rgba(245, 158, 11, 0.2);
        }

        .status-badge.status-processing {
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .status-badge.status-paid {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .status-badge.status-canceled {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .action-btn.pay-btn {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .action-btn.pay-btn:hover {
            background: rgba(34, 197, 94, 0.2);
            border-color: rgba(34, 197, 94, 0.3);
            color: #22c55e;
            transform: translateY(-1px);
        }

        .action-btn.view-btn {
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .action-btn.view-btn:hover {
            background: rgba(59, 130, 246, 0.2);
            border-color: rgba(59, 130, 246, 0.3);
            color: #3b82f6;
            transform: translateY(-1px);
        }

        .action-btn.disabled {
            background: rgba(107, 114, 128, 0.1);
            color: rgba(107, 114, 128, 0.5);
            border: 1px solid rgba(107, 114, 128, 0.2);
            cursor: not-allowed;
            pointer-events: none;
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
        .deposits-footer {
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
            .deposits-container {
                padding: 15px;
            }

            .page-title span {
                font-size: 24px;
            }

            .page-title i {
                font-size: 24px;
            }

            .deposits-table th,
            .deposits-table td {
                padding: 12px 15px;
                font-size: 13px;
            }

            .status-badge {
                padding: 4px 8px;
                font-size: 11px;
            }

            .action-btn {
                padding: 6px 10px;
                font-size: 11px;
            }
        }

        @media (max-width: 576px) {
            .deposits-table {
                font-size: 12px;
            }

            .deposits-table th,
            .deposits-table td {
                padding: 10px 12px;
            }

            .page-title {
                flex-direction: column;
                gap: 8px;
            }

            .action-buttons {
                flex-direction: column;
                gap: 4px;
            }
        }
    </style>
</div>
</x-layout_backend>