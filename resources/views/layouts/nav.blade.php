<nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: #AB2516;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Our Baker Family
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/#shower" onclick="$('#Shower').animateCss('rubberBand')">Baby Shower</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#registry" onclick="$('#Registry').animateCss('rubberBand')">Gift Registry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gallery#photos" onclick="$('#Photos').animateCss('rubberBand')">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gallery#upload" onclick="$('#Upload').animateCss('rubberBand')">Upload</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/#rsvp" onclick="$('#RSVP').animateCss('rubberBand')">RSVP</a>
                </li> --}}
                @if (Auth::check() && Auth::user()->isAdmin())
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>