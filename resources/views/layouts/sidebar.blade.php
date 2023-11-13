@section('sideBar_content')
@guest
@else
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark ps bg-white" id="sidenav-main">
    <div class="collapse navbar-collapse w-auto ps ps--active-x ps--active-y" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{ url('/') }}">
                        <span class="nav-link-text ms-1">Home</span>
                    </a>
                </li> 
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
    @include('layouts.nav')
        @yield('navBar_content')
    @endguest
    @endsection