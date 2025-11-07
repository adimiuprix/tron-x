<a class="btn ghost dropdown-toggle" href="#userMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menu
</a>

<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
    <div class="dropdown-header noti-title">
        <h6 class="text-overflow m-0">Welcome!</h6>
        <small class="text-muted">
            <span class="badge {{ $user->email ? 'badge-warning' : ($user->wallet ? 'badge-success' : '') }}">
                {{ $user->email ? 'Email' : ($user->wallet ? 'Tron Wallet' : '') }}
            </span>
        </small>
    </div>

    <!-- User Info Section -->
    <div class="dropdown-item-text">
        <small class="text-muted d-block">
        {{ $user->email ? 'Email: ' . $user->email : ($user->wallet ? 'Wallet: ' . $user->wallet : '') }}
        </small>
        <small class="text-muted d-block">Balance: {{ $user->balance }} TRX</small>
    </div>

    <div class="dropdown-divider"></div>
    <a href="{{ route('profile') }}" class="dropdown-item">
        <i class="ni ni-single-02"></i>
        <span>My Profile</span>
    </a>
    <div class="dropdown-divider"></div>
    <a href="{{ route('logout') }}" class="dropdown-item">
        <i class="ni ni-user-run"></i>
        <span>Logout</span>
    </a>
</div>