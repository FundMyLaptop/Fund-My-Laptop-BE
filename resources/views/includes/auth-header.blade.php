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
                    <a class="nav-link px-4 font-weight-bold" href="{{ url('lend') }}">Lend</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 font-weight-bold" href="{{ url('borrow') }}">Borrow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 font-weight-bold" href="{{ url('/#about') }}">About</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link px-4 pl-4 font-weight-bold" href="{{url('investor-dashboard')}}">My Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-md-4 font-weight-bold" href="{{  url('logout')  }}">
                        <button class="btn btn-fml-secondary px-4">
                          Log Out?
                        </button>
                    </a>
                </li> 
            </ul>
        </div>
    </nav>
</div>
