<nav class="main_nav_contaner ml-auto">
    <ul class="main_nav">
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">About</a></li>
        <li class="{{ Request::is('courses') ? 'active' : '' }}"><a href="{{ url('courses') }}">Courses</a></li>
        <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="{{ url('blog') }}">Blog</a></li>
        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('contact') }}">Contact</a></li>
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            @if (Auth::check())
                <a href="{{ route('dashboard') }}">Admin</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endif
        </li>
    </ul>
    <div class="search_button">
        <i class="fa fa-search" aria-hidden="true"></i>
    </div>

    <!-- Hamburger -->
    <div class="hamburger menu_mm">
        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
    </div>
</nav>
