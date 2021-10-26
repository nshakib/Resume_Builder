<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Resume.io
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ route('home') }}">Basic Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('education_summery') ? 'active' : '' }} {{ request()->is('education_information') ? 'active' : '' }}" href="{{ route('create') }}">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('work_information_create') ? 'active' : '' }} {{ request()->is('work_summery_display') ? 'active' : '' }}" href="{{ route('create') }}">Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('certificate_information_create') ? 'active' : '' }} {{ request()->is('certificate_summery_display') ? 'active' : '' }}" href="{{ route('create') }}">Cetrifiction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('ca_information_create') ? 'active' : '' }} {{ request()->is('ca_summery_display') ? 'active' : '' }}" href="{{ route('create') }}">Career Object</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href=""
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>