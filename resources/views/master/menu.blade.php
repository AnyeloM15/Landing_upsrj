<nav class="menu_nav">
    <ul class="menu_mm">
    <li class="menu_mm"><a href="{{url('/')}}">Home</a></li>
    <li class="menu_mm"><a href="{{url('/about')}}">About</a></li>
    <li class="menu_mm"><a href="{{url('/courses')}}">Courses</a></li>
    <li class="menu_mm"><a href="{{url('/blog')}}">Blog</a></li>
    <li class="menu_mm"><a href="{{url('/contact')}}">Contact</a></li>
    <li class="menu_mm">
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
</nav>