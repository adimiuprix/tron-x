<x-layout_backend :user="$user">
<div class="container" style="margin-top: 24px; margin-bottom: 24px;">
    <div class="tickets-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">
                <i class="fa fa-headset"></i>
                <span>Support Center</span>
            </div>
            <div class="page-subtitle">
                Get help and support for your account and services
            </div>
        </div>

        <!-- Tickets Card -->
        <div class="tickets-card">
            <div class="tickets-header">
                <div class="tickets-header-content">
                    <h3><i class="fa fa-ticket-alt"></i> Support Tickets</h3>
                    <a href="https://tronx.site/tickets/create" class="create-ticket-btn"> <i class="fa fa-plus-circle"></i> Create Ticket </a>
                </div>
            </div>
            <div class="tickets-content">
                <div class="table-responsive">
                    <table class="tickets-table">
                        <thead>
                            <tr>
                                <th># ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Unread</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="8" class="empty-state">
                                    <div class="empty-content">
                                        <i class="fa fa-ticket-alt"></i>
                                        <h4>No Tickets Found</h4>
                                        <p>You haven't created any support tickets yet.</p>
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
        /* Tickets Page Styling - Matching Theme */
        .tickets-container {
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

        /* Tickets Card */
        .tickets-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .tickets-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
            opacity: 1;
        }

        .tickets-header {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(99, 102, 241, 0.1));
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 20px 25px;
        }

        .tickets-header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .tickets-header h3 {
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .tickets-header h3 i {
            color: #22c55e;
        }

        .create-ticket-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .create-ticket-btn:hover {
            background: rgba(34, 197, 94, 0.2);
            border-color: rgba(34, 197, 94, 0.3);
            color: #22c55e;
            transform: translateY(-1px);
            text-decoration: none;
        }

        .tickets-content {
            padding: 0;
        }

        /* Table Styling */
        .tickets-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--text);
        }

        .tickets-table thead {
            background: rgba(0, 0, 0, 0.3);
        }

        .tickets-table th {
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .tickets-table td {
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            vertical-align: middle;
        }

        .tickets-table tbody tr {
            transition: all 0.3s ease;
        }

        .tickets-table tbody tr:hover {
            background: rgba(34, 197, 94, 0.05);
        }

        /* Info Styling */
        .ticket-id,
        .ticket-title,
        .ticket-category,
        .ticket-date {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text);
            font-weight: 500;
        }

        .ticket-id i {
            color: #6366f1;
        }

        .ticket-title i {
            color: #f59e0b;
        }

        .ticket-category i {
            color: #8b5cf6;
        }

        .ticket-date i {
            color: #6b7280;
        }

        /* Priority Badges */
        .priority-badge {
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

        .priority-badge.priority-low {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .priority-badge.priority-normal {
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .priority-badge.priority-high {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            border: 1px solid rgba(245, 158, 11, 0.2);
        }

        .priority-badge.priority-urgent {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.2);
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

        .status-badge.status-open {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .status-badge.status-closed {
            background: rgba(107, 114, 128, 0.1);
            color: #6b7280;
            border: 1px solid rgba(107, 114, 128, 0.2);
        }

        .status-badge.status-pending {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            border: 1px solid rgba(245, 158, 11, 0.2);
        }

        /* Read Badges */
        .read-badge {
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

        .read-badge.read {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .read-badge.unread {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        /* Action Buttons */
        .ticket-actions {
            display: flex;
            gap: 8px;
        }

        .view-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 12px;
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            border: 1px solid rgba(59, 130, 246, 0.2);
            border-radius: 6px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .view-btn:hover {
            background: rgba(59, 130, 246, 0.2);
            border-color: rgba(59, 130, 246, 0.3);
            color: #3b82f6;
            transform: translateY(-1px);
            text-decoration: none;
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
        .tickets-footer {
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
            .tickets-container {
                padding: 15px;
            }

            .page-title span {
                font-size: 24px;
            }

            .page-title i {
                font-size: 24px;
            }

            .tickets-header-content {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .tickets-table th,
            .tickets-table td {
                padding: 12px 15px;
                font-size: 13px;
            }

            .priority-badge,
            .status-badge,
            .read-badge {
                padding: 4px 8px;
                font-size: 11px;
            }
        }

        @media (max-width: 576px) {
            .tickets-table {
                font-size: 12px;
            }

            .tickets-table th,
            .tickets-table td {
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