@extends('layout.app');

@push('styles')
<link rel="stylesheet" href="{{asset('css/custom-css/footer.css')}}">
<link rel="stylesheet" href="{{asset('custom-css/nav.css')}}">
<link rel="stylesheet" href="{{asset('custom-css/uloma.css')}}">
@endpush

@section('content')

<nav class="navbar navbar-expand-sm bg-light">
    <a class="navbar-brand" href="#">
      <img src="{{asset('img/layer1.png')}}" alt="image" />
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarResponsive"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">LEND</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#course">BORROW</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#features">ABOUT</a>
        </li>

        <li class="nav-item">
          <img
            src="{{asset('img/user.png')}}"
            alt="..."
            class="float-left img-thumbnail rounded-circle"
            style="width: 50px; height: 50px;"
          />
        </li>
      </ul>
    </div>
  </nav>
  <div class="section py-5">
    <div class="container">
      <div class="col-md-12 pb-4">
        <form>
          <label
            for="customRange"
            style="font-size: 36px !important; font-weight: 500;"
            >User Profile is almost Complete!</label
          >
          <div class="progress">
            <div
              class="progress-bar progress-bar-animated bg-danger"
              role="progressbar"
              style="width: 50%;"
              aria-valuenow="70"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="progress-container">
            <div class="progress-item"></div>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="card py-2 px-2">
            <div class="card-title">
              <div class="col-md-11 px-2 mx-auto">
                <h5 class="pt-3" style="font-size: 32px !important;">
                  Link your Accounts
                </h5>
                <p class="pt-3" style="font-size: 20px !important;">
                  This helps us verify your identity and provides additional
                  security to your account
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-11 mx-auto">
                <div class="card-title">
                  <div class="row py-5">
                    <div class="col-md-12 py-2">
                      <p class="float-left">
                        <img src="{{asset('img/facebook-uloma.svg')}}" alt="" />
                        Facebook
                      </p>
                      <div class="float-right custom-control custom-switch">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customSwitch1"
                        />
                        <label
                          class="custom-control-label"
                          for="customSwitch1"
                        ></label>
                      </div>
                    </div>
                    <div class="col-md-12 py-2">
                      <p class="float-left">
                        <img src="{{asset('img/twitter-uloma.svg')}}" alt="" /> Twitter
                      </p>
                      <div class="float-right custom-control custom-switch">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customSwitch2"
                        />
                        <label
                          class="custom-control-label"
                          for="customSwitch2"
                        ></label>
                      </div>
                    </div>
                    <div class="col-md-12 py-2">
                      <p class="float-left">
                        <img src="{{asset('img/linkedin-uloma.svg')}}" alt="" />
                        LinkedIn
                      </p>
                      <div class="float-right custom-control custom-switch">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customSwitch3"
                        />
                        <label
                          class="custom-control-label"
                          for="customSwitch3"
                        ></label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-body pb-4">
                  <div class="row">
                    <div class="col-md-7 mx-auto">
                      <form class="pb-4">
                        <button
                          type="submit"
                          class="float-left btn btn-secondary px-4 py-2"
                        >
                          <img src="{{asset('img/left.svg')}}" alt="" /> Back
                        </button>
                        <button
                          type="submit"
                          class="float-right btn btn-primary px-4 py-2"
                        >
                          Next <img src="{{asset('img/right.svg')}}" alt="" />
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="footer-li">
      <div class="left">
        <ul>
          <li><img src="{{asset('img/Group 3005.png')}}" alt="" /></li>
          <li><a class="text-white" href="">address</a></li>
          <li><a class="text-white" href="">email address</a></li>
          <li><a class="text-white" href="">phone</a></li>
        </ul>

        <div>
          <ul class="footer-icons">
            <li>
              <a class="text-white" href="">
                <img src="{{asset('img/Vector (1).png')}}" alt="" />
              </a>
            </li>
            <li>
              <a class="text-white" href=""
                ><img src="{{asset('img/Vector (2).png')}}" alt=""
              /></a>
            </li>
            <li>
              <a class="text-white" href=""
                ><img src="{{asset('img/Vector (3).png')}}" alt=""
              /></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="right">
        <ul>
          <h4>RESOURCES</h4>
          <li><a class="text-white" href="">Why choose FundMyLaptop</a></li>
          <li><a class="text-white" href="">How P2P Lending works</a></li>
          <li><a class="text-white" href="">About FundMyLaptop</a></li>
          <li><a class="text-white" href="">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="container mt-4 bottom">
      <p>2020 &copy; Copyright All Rights Reserved</p>

      <ul>
        <li><a class="text-white" href="">FAQ</a></li>
        <li><a class="text-white" href="">Privacy Policy</a></li>
        <li><a class="text-white" href="">Terms & Conditions</a></li>
      </ul>
    </div>
  </footer>


@push('scripts')
<script src="{{asset('js/bootstrap-js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap-js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap-js/popper.js')}}"></script>
<script src="{{asset('js/boostrap-js/uloma.js')}}"></script>
@endpush

@endsection