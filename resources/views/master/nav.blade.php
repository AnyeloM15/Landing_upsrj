<nav class="main_nav_contaner ml-auto">
    <ul class="main_nav">
        <li class="active"><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('about')}}">About</a></li>
        <li><a href="{{url('courses')}}">Courses</a></li>
        <li><a href="{{url('blog')}}">Blog</a></li>
        <li><a href="{{url('contact')}}">Contact</a></li>
        <li>
            @if (Auth::check())
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Salir
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endif
        </li>
    </ul>
    <div class="search_button">
        <i class="fa fa-search" aria-hidden="true"></i>
    </div>

    <!-- Hamburger -->

    <div class="shopping_cart">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    </div>
    <div class="hamburger menu_mm">
        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
    </div>
    </nav>