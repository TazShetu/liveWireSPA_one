<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a href="{{route('dashboard')}}" class="ms-5 navbar-brand">Dashboard</a>
        <ul class="nav nav-tabs me-5">
            @auth
                <li class="nav-item">
                    <a href="{{route('dashboard')}}"
                       class="nav-link {{request()->routeIs('dashboard') ? 'active' : ''}}">Home</a>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{route('login')}}"
                       class="nav-link {{request()->routeIs('login') ? 'active' : ''}}">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('register')}}"
                       class="nav-link {{request()->routeIs('register') ? 'active' : ''}}">Register</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
