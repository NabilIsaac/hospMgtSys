 <!-- Right Panel -->
<div id="right-panel" class="right-panel">

 <!-- Header-->
 <header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            {{-- <img src="{{ asset('assets/images/logo2.png') }}" alt="Logo"> --}}
            <a class="navbar-brand" href="{{ route('dashboard') }}">Ravi HMS</a>
            <a class="navbar-brand hidden" href="{{ route('dashboard') }}"></a>
            {{-- <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i>Ravi HMS</a> --}}
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active pt-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <p>{{ Auth::user()->name }}</p>
                </a>

                <div class="user-menu dropdown-menu">

                    <a class="nav-link"  href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                        @csrf
                      </form>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- /#header -->