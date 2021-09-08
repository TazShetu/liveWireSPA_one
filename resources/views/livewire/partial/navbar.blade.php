<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a href="{{route('dashboard')}}" class="ms-5 navbar-brand">Dashboard</a>
        <ul class="nav nav-tabs me-5">
            @auth
                <li class="nav-item me-3 mt-1">{{Auth::user()->name}}</li>
                <li class="nav-item">
                    <a href="{{route('dashboard')}}"
                       class="nav-link {{request()->routeIs('dashboard') ? 'active' : ''}}">Home</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link" wire:click="logout"
                            onclick="confirm('Are you sure you want to logout ?') || event.stopImmediatePropagation()">
                        Logout
                    </button>
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
