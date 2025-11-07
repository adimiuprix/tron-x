<x-layout_backend :user="$user">
<div class="container" style="margin-top: 24px; margin-bottom: 24px;">
    <div class="news-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">
                <i class="fa fa-newspaper"></i>
                <span>Latest News</span>
            </div>
            <div class="page-subtitle">
                Stay updated with the latest announcements and updates
            </div>
        </div>

        <!-- News Card -->
        <div class="news-card">
            <div class="news-header">
                <h3><i class="fa fa-bullhorn"></i> Announcements</h3>
            </div>
            <div class="news-content">
                <div class="empty-state">
                    <div class="empty-content">
                        <i class="fa fa-newspaper"></i>
                        <h4>No News Found</h4>
                        <p>Check back later for the latest updates and announcements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* News Page Styling - Matching Theme */
        .news-container {
            max-width: 1000px;
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

        /* News Card */
        .news-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .news-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
            opacity: 1;
        }

        .news-header {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(99, 102, 241, 0.1));
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 20px 25px;
        }

        .news-header h3 {
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .news-header h3 i {
            color: #22c55e;
        }

        .news-content {
            padding: 25px;
        }

        /* News Items */
        .news-item {
            margin-bottom: 30px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border-left: 4px solid #22c55e;
            transition: all 0.3s ease;
        }

        .news-item:hover {
            background: rgba(0, 0, 0, 0.2);
            transform: translateX(5px);
        }

        .news-item:last-child {
            margin-bottom: 0;
        }

        .news-item-header {
            margin-bottom: 15px;
        }

        .news-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
            margin: 0 0 8px 0;
            line-height: 1.4;
        }

        .news-date {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 500;
        }

        .news-date i {
            color: #f59e0b;
        }

        .news-content-text {
            color: var(--text);
            line-height: 1.6;
            font-size: 14px;
        }

        .news-content-text p {
            margin-bottom: 12px;
        }

        .news-content-text p:last-child {
            margin-bottom: 0;
        }

        .news-content-text a {
            color: #22c55e;
            text-decoration: none;
            font-weight: 600;
        }

        .news-content-text a:hover {
            text-decoration: underline;
        }

        /* News Divider */
        .news-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            margin: 30px 0;
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
        .news-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
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
            .news-container {
                padding: 15px;
            }

            .page-title span {
                font-size: 24px;
            }

            .page-title i {
                font-size: 24px;
            }

            .news-content {
                padding: 20px;
            }

            .news-item {
                padding: 15px;
                margin-bottom: 20px;
            }

            .news-title {
                font-size: 16px;
            }
        }

        @media (max-width: 576px) {
            .news-item {
                padding: 12px;
            }

            .news-title {
                font-size: 15px;
            }

            .page-title {
                flex-direction: column;
                gap: 8px;
            }
        }
    </style>
</div>
</x-layout_backend>