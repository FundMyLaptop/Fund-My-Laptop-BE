@extends('layout.app')
@section('content')
<main class="main-content d-sm-flex ">
    <form class="login-box p-md-5 p-2" method="POST" action="{{ route('login') }}">

        {!! csrf_field() !!}

        <h2 class="p-sm-3 p-1 welcome-text">Welcome to <br> <strong>Fund my Laptop</strong></h2>

        <p class="p-1 p-md-3 login-text mt-md-n4">Help Achieve Your dreams with funding for your laptops at little to no cost.</p>
        <div>
            <a href="{{url('/auth/redirect/google')}}" class="text-center py-3 btn-google d-flex justify-content-center align-items-center">
            <img class="pr-3" src="../img/google icon.svg" alt="">
            Login with Google
            </a>
        </div>

        <div class="my-4 text-center or d-flex align-items-center or-box">
            <hr/>
            <span class="or-text">
            or
            </span>
            <hr/>
        </div>
    <!-- check user for valid or invalid login -->
         @if (session('status'))
            <p class="alert alert-success">{{ session('status') }}
            </p>
            @endif
            @if (session('error'))
            <p class="alert alert-danger">{{ session('error') }}
            </p>
            @endif

            @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}
            </p>
            @endforeach
        <div class="form-group">
            <input type="email" placeholder="Email" name="email" class="form-control" id="email">
            <p id="errorEmail" class="error  text-danger text-center text-sm-left"> </p>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password" name="password" class="form-control" id="password">
            <p id="errorPassword" class="error text-danger text-center text-sm-left">

            </p>
        </div>
        <div>
            <input type="submit" class="form-control login-btn  btn-fml-secondary" value="Log in">
        </div>
        <p class="account-info-text text-center py-4">Don't have an account? <a href="{{ url('signup') }}" class="sign-up-link">Sign up</a></p>

        <!-- <div id="error" class="error p-1 "></div>
        </div> -->

    </form>

    <div class="login-img-box d-none d-md-block">
        <img src="../img/login-img.png" class="login-img" alt="login FundMyLaptop">
    </div>



</main>

@endsection
