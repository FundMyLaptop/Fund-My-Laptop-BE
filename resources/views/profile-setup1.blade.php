@extends('layout.app');

@push('styles')
        <link rel = "stylesheet" href="{{asset('css/custom-css/profile-setup.css')}}">
        <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap')}}"
        <link rel="stylesheet" href="{{asset('css/bootstrap-css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom-css/footer.css')}}">
@endpush

@section('content')

  <!-- Navbar Start -->
  <div class="container-fluid shadow">
    <div class="container fixed-top fix-nav">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#"><img src="{{asset('/img/fmlLogo.png')}}" alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="list-of-campaigns.html">LEND</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-2" href="{{ url('signup')}}">BORROW</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-2" href="about-us.html">ABOUT</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 ml-3">
            <img src="{{asset('/img/Ellipse 8.png')}}" alt="" srcset="">
          </form>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- wrapper -->
  <div class="container">
    <div class="user-profile-text">
      <label class="label-text">User Profile</label> <br>
      <!-- range position -->
      <div class="col-12 mx-auto w-100 mt-1 text-center">
        <div class="progress-liner mt-2 mt-md-2">
          <div class="progress-item active">
            <span class="progress-circle active">
              <span class="progress-number">⨀</span>
            </span>
          </div>
          <div class="progress-item"></div>
          <div class="progress-item"></div>
        </div>
      </div>
      <!-- range end -->

      <!-- <input type="range" min="1" max="100" value="20" class="slider1" step="10"> -->
      <div class="card cardStyle shadow">
        <div class="card-body">
          <p>This helps us verify your identity and provides additional security to your account</p>
          <div class="form-title">
            <div class="row move-user">
              <div class="col-sm-2.5">
                <div class="user-name"> BO</div>
              </div>
              <div class="col-sm-6 file-style">
                <!-- <input type="file" class="upload-file"> -->
                <div class="btn btn-outline-primary btn-edit">
                  Upload your picture
                </div>
              </div>
            </div>
            <!-- form-start -->
            <form class="mt-5">
              <div class="form-group _pfg">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="name" class="form-control _pfc" value="{{$data['message']['fullname']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John Doe">
              </div>
              <div class="form-group _pfg">
                <label for="exampleInputPassword1">Location</label>
                <input type="Location" class="form-control _pfc" value="{{$data['message']['location']}}" id="exampleInputPassword1" placeholder="Lagos">
              </div>
              <div class="form-group _pfg">
                <label for="exampleInputPassword1">Occupation</label>
                <input type="Occupation" class="form-control _pfc" value="{{$data['message']['address']}}" id="exampleInputPassword1" placeholder="Front-end Developer">
              </div>
              <div class="btn-position">
                <button type="submit" class="btn btn-primary btn-lg">Next</button>
              </div>
            </form>
            <!-- form-end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- wrapper-end -->

    <!-- Footer -->
    <footer class="footer container-fluid bg-fml-primary pt-4 pt-md-5 pb-3 mt-5">
    <div class="footer-li container">
      <div class="row mx-0 d-none d-md-flex mb-3">
        <a href="#" class="footer-logo">
          <img src="{{asset('img/logo-footer.svg')}}" alt="" width="154px" height="80px" />
        </a>
      </div>
      <div class="row flex-column flex-md-row footer-links mx-0 justify-content-center justify-content-md-between text-center text-md-left">
        <ul class="nav flex-column order-3 order-md-1 why mt-4 pt-4 pt-md-0 mt-md-0">
          <li><a href="#">23, Intel Chip, Silicon Valley</a></li>
          <li><a href="#">info@fundmylaptop.com</a></li>
          <li><a href="#">09023144819</a></li>
        </ul>
        <ul class="nav flex-column mt-md-3 order-1 order-md-2">
          <li><a href="aboutus.html">Why choose fundmylaptop?</a></li>
          <li><a href="aboutus.html">How P2P lending works</a></li>
        </ul>
        <ul class="nav flex-column mt-md-3 order-2 order-md-3">
          <li><a href="about-us.html">About fundmylaptop</a></li>
          <li><a href="contact-us.html">Contact us</a></li>
        </ul>
      </div>
      <div class="row mx-0 mt-4 mt-md-2 pt-4 pt-md-5 social-footer-icons-container text-center justify-content-center justify-content-md-start">
        <ul class="nav social-footer-icons">
          <li>
            <a href=""><img src="{{asset('img/brandico_facebook.svg')}}" /></a>
          </li>
          <li>
            <a href=""><img src="{{asset('img/ant-design_instagram-outlined.svg')}}" /></a>
          </li>
          <li>
            <a href=""><img src="{{asset('img/ant-design_twitter-outlined.svg')}}" /></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container mt-4 mt-md-3 text-light">
      <div class="row flex-column flex-md-row mx-0 credits-container pt-3 justify-content-md-between justify-content-center">
        <p class="mb-0 text-center text-md-left">
          2020 &copy; Copyright All Rights Reserved
        </p>

        <ul class="nav bye">
          <li><a href="{{ url('faq')}}">FAQ</a></li>
          <li><a href="{{ url('privacy-policy')}}">Privacy Policy</a></li>
          <li><a href="{{ url('terms-condition')}}">Terms & Conditions</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- footer ends -->
  
  @push('scripts')
  
      <script src="{{asset('js/bootstrap-js/jquery.js')}}"></script>
      <script src="{{asset('js/bootstrap-js/bootstrap.js')}}"></script>
      <script src="{{asset('js/bootstrap-js/popper.js')}}"></script>

  @endpush

@endsection