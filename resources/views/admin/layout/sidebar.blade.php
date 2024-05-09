<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('ptc') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Manage users</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('users') }}">
                        <i class="bi bi-circle"></i><span>All Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('usersBlocked') }}">
                        <i class="bi bi-circle"></i><span>Blocked Users</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('ptc') }}">
                <i class="bi bi-cursor"></i>
                <span>PTC</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('shortlinks') }}">
                <i class="bi bi-link"></i>
                <span>Shortlinks</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('offerwall') }}">
                <i class="bi bi-box2-heart"></i>
                <span>Offerwall</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('faucet') }}">
                <i class="bi bi-gift"></i>
                <span>Faucet</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('coupon') }}">
                <i class="bi bi-ticket-perforated"></i>
                <span>Coupon codes</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('leaderboard') }}">
                <i class="bi bi-reception-4"></i>
                <span>Leaderboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('deposit') }}">
                <i class="bi bi-coin"></i>
                <span>Deposit</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('withdrawal') }}">
                <i class="bi bi-wallet"></i>
                <span>Withdrawal</span>
            </a>
        </li>


        <br>
        <li class="nav-heading">Settings</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('paymentSettings') }}">
                <i class="bi bi-credit-card-2-front"></i>
                <span>Payments Settings</span>
            </a>
        </li>


        
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-book"></i>
                <span>Pages</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('settings') }}">
                <i class="bi bi-gear"></i>
                <span>Site Settings</span>
            </a>
        </li>
        

    </ul>

</aside>
