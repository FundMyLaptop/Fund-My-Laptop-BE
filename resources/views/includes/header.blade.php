<!--Header-->
<div class="nav-container container-fluid shadow-sm">
    <nav class="navbar nav-top navbar-expand-md navbar-light container-md px-0">
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/layer1.png')}}" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link px-4 font-weight-bold" href="#">Lend</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 font-weight-bold" href="#">Borrow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 font-weight-bold" href="#">About</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link pl-md-4 font-weight-bold" href="{{ route('user.signin') }}">
                        <button class="btn btn-fml-secondary px-4">
                        {{ __('Login') }}
                        </button>
                    </a>
                </li>

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link pl-md-4 font-weight-bold" href="{{ route('register') }}">
                        <button class="btn btn-fml-secondary px-4">
                        {{ __('Sign Up') }}
                        </button>
                    </a>
                </li>
                @endif
            @else

                <li class="nav-item">
                    <a class="nav-link pl-md-4 font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                        <button class="btn btn-fml-secondary px-4">
                        {{ __('Logout') }}
                        </button>
                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
                </form>
                </li>
                @endguest    
            </ul>
        </div>
    </nav>
</div>
