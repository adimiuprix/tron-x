<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
    <div class="dropdown-header noti-title">
        <h6 class="text-overflow m-0">Welcome!</h6>
        <small class="text-muted">
            <span class="badge badge-success">Tron Wallet</span>
        </small>
    </div>

    <!-- User Info Section -->
    <div class="dropdown-item-text">
        <small class="text-muted d-block">Email: {{ $user->email }}</small>
        <small class="text-muted d-block">Wallet: {{ $user->wallet }}</small>
        <small class="text-muted d-block">Balance: {{ $user->balance }} TRX</small>
    </div>

    <div class="dropdown-divider"></div>
    <a href="{{ route('profile') }}" class="dropdown-item">
        <i class="ni ni-single-02"></i>
        <span>My Profile</span>
    </a>
    <div class="dropdown-divider"></div>
    <a href="" class="dropdown-item">
        <i class="ni ni-user-run"></i>
        <span>Logout</span>
    </a>
</div>