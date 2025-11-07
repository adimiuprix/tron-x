<aside id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand" href="{{ route('home') }}">
            <div class="brand-icon">
                <img src="https://cdn3d.iconscout.com/3d/premium/thumb/tron-coin-trx-3d-icon-png-download-5326811.png" alt="TronX" style="width: 100%; height: 100%; object-fit: contain;" />
            </div>
            <span>TronX</span>
        </a>
    </div>
    <nav class="sidebar-nav">
        <!-- Navigation -->
        <ul class="navbar-nav nav-sidebar">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account') }}">
                    <i class="fas fa-chart-line"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('buy.hash') }}">
                    <i class="fas fa-rocket"></i> Buy Plans
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('my.history') }}"> <i class="fas fa-history"></i> Account History </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('my.deposits') }}"> <i class="fas fa-download"></i> Deposits </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('my.withdrawals') }}"> <i class="fas fa-upload"></i> Withdrawals </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('referrals') }}"> <i class="fas fa-users"></i> Referrals </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profit.calculator') }}"> <i class="fas fa-calculator"></i> Profit Calculator </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#faqsModal"> <i class="fas fa-lightbulb"></i> F.A.Q.s </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('news') }}"> <i class="fas fa-newspaper"></i> News </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tickets') }}"> <i class="fas fa-life-ring"></i> Support Center </a>
            </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3" />
        <div class="exchange-rate-display">
            <h4 class="text-center">1 TRX = 0.33773 USD</h4>
        </div>
    </nav>
    <div class="sidebar-cta">
        <a class="btn primary w-100" href="{{ route('buy.hash') }}">
            <i class="fas fa-rocket"></i> Buy Hash
        </a>
        <a class="btn ghost w-100" style="margin-top: 8px; border: 1px solid var(--tron-border); color: #fff;" href="#withdrawalModal" data-toggle="modal" data-target="#withdrawalModal"><i class="fas fa-wallet"></i> Withdraw</a>
        <a
            class="btn logout-btn w-100"
            style="margin-top: 8px; background: rgba(239, 68, 68, 0.1); border: 1px solid rgba(239, 68, 68, 0.3); color: #ef4444;"
            href="https://tronx.site/logout"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        >
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
</aside>

<div id="sidebarOverlay" class="sidebar-overlay" onclick="closeSidebar()"></div>