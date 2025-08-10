<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('web.index') }}">
            <img src="{{ asset('images/logo-square.png') }}" alt="MAS Edu Care Logo" height="50">    
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.index') ? 'active' : '' }}" href="{{ route('web.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.about') ? 'active' : '' }}" href="{{ route('web.about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.courses') ? 'active' : '' }}" href="{{ route('web.courses') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.contact') ? 'active' : '' }}" href="{{ route('web.contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.gallery') ? 'active' : '' }}" href="{{ route('web.gallery') }}">Gallery</a>
                </li>
            </ul>
            <a href="#" class="btn btn-primary-custom ms-lg-3">Apply Now</a>
        </div>
    </div>
</nav>