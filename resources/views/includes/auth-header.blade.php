<!--Header-->
<div class="nav-container container-fluid shadow-sm">
    <nav class="navbar nav-top navbar-expand-md navbar-light container-md px-0">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('img/layer1.png')}}" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link px-4 font-weight-bold" href="{{ url('lend') }}">Lend</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 font-weight-bold" href="{{ url('borrow') }}">Borrow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 font-weight-bold" href="{{ url('about') }}">About</a>
                </li>
                
                <li hidden class="nav-item">
                    <a class="nav-link px-4 pl-4 font-weight-bold" href="{{url('investor-dashboard')}}">Investor Dashboard</a>
                </li>
                <li hidden class="nav-item">
                    <a class="nav-link px-4 pl-4 font-weight-bold" href="{{url('investee-dashboard')}}">Investee Dashboard</a>
                </li>
                <a href="{{url('investee-dashboard')}}"><button class="btn btn-fml-secondary align-self-center nav-item view-dashboard-btn" >  View Dashboard</button></a>
                   
                

                <div class="navbar-nav flex-row toggle-menu">
                    <a class="nav-item nav-link px-4" href="{{ url('update-profile') }}"><img src="{{asset('img/user-photo.png')}}" class="menu-icon"  /></a>
                    <a class="nav-item nav-link pr-0 align-self-center" href="#">
                        <div class="position-relative">
                            <img src="{{asset('img/notification-dot.svg') }}" alt="new notifications" class="position-absolute notification-dot" />
                            <img src="{{asset('img/notification.svg') }}" class="notification-icon" alt="notification icon" />
                        </div>
                    </a>
                </div>

                <li hidden class="nav-item">
                    <a class="nav-link pl-md-4 font-weight-bold" href="{{  url('logout')  }}">
                        <button class="btn btn-fml-secondary px-4">
                          Log Out?
                        </button>
                    </a>
                </li> 



                <li class="nav-item">
                    <a class="nav-link pl-md-4 font-weight-bold" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        
                        <button class="btn btn-fml-secondary px-4">
                            {{ __('Logout') }}
                        </button>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</div>
