bago

<!-- Admin Top-Bar Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('vehicles.create') }}">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('vehicles.index') ? 'active' : '' }}" href="{{ route('vehicles.index') }}">Vehicles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('rentals.index') ? 'active' : '' }}" href="{{ route('rentals.index') }}">Rentals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('users.index') ? 'active' : '' }}" href="{{ route('users.index') }}">Users Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('reports.index') ? 'active' : '' }}" href="{{ route('reports.index') }}">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('settings.index') ? 'active' : '' }}" href="{{ route('settings.index') }}">Settings</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ session('user_name', 'Admin') }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
