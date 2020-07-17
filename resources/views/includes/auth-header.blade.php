
<!--Header-->
<div class="nav-container container-fluid shadow-sm">
    <nav class="navbar nav-top navbar-expand-md navbar-light container-md px-0">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('img/layer1.png')}}" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
​
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
​
​
                <div class="dropdown pl-4">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('img/user-photo.png')}}" class="menu-icon" href="#"/>
                    </a>
                
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a href="{{ url('update-profile') }}"> <button class="dropdown-item btn-fml-secondary">Update profile</button></a>
                        <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <button class="dropdown-item btn-fml-secondary">Log out</button>
                        </a>
​
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
​
                <div class="navbar-nav flex-row toggle-menu">
                    <a class="nav-item nav-link pr-0 align-self-center" href="#">
                        <div class="position-relative">
                            <img src="{{asset('img/notification-dot.svg')}}" alt="new notifications" class="position-absolute notification-dot" />
                            <img src="{{asset('img/notification.svg')}}" class="notification-icon" alt="notification icon" />
                        </div>
                    </a>
                </div>
            </ul>
        </div>
    </nav>
</div>