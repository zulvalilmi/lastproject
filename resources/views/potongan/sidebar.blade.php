<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        {{-- tampilan sidebar admin --}}
        @if(Auth::user()->role == 1)
            @include('potongan.sidebaradmin')
        @elseif(Auth::user()->role == 2)
            @include('potongan.sidebarparents')
        @endif

        <li class="nav-item">

            <a  class="nav-link collapsed" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Log out') }}
                <i class="bi bi-box-arrow-in-right"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li><!-- End Profile Page Nav -->


</aside>
