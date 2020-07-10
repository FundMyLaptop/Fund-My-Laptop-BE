@extends('layout.app')
@section('content')
<main class="main-content d-sm-flex ">
    <form method="POST" action="{{ route('login') }}" class="login-box p-md-5 p-2">
    @csrf
        <h2 class="p-sm-3 p-1 welcome-text">Welcome to <br> <strong>Fund my Laptop</strong></h2>
    
        <p class="p-1 p-md-3 login-text mt-md-n4">Help Achieve Your dreams with funding for your laptops at little to no cost.</p>
        <div>
            <a href="#" class="text-center py-3 btn-google d-flex justify-content-center align-items-center">
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

        <div class="form-group">
            <input type="email" placeholder="Email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            <p id="errorEmail" class="error  text-danger text-center text-sm-left"> </p>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
            @error('password')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <p id="errorPassword" class="error text-danger text-center text-sm-left">
                
            </p>
        </div>
        <!-- <div>
            <input type="submit" class="form-control login-btn  btn-fml-secondary" value="Log in">
        </div> -->

        <div>
                            
                                <button type="submit" class="form-control login-btn  btn-fml-secondary">
                                    {{ __('Log in') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                           
                        </div>
        <p class="account-info-text text-center py-4">Don't have an account? <a href="#" class="sign-up-link">Sign up</a></p>
       
        <!-- <div id="error" class="error p-1 "></div>
        </div> -->

    </form>

    <div class="login-img-box d-none d-md-block">
        <img src="../img/login-img.png" class="login-img" alt="login FundMyLaptop">
    </div>



</main>

@endsection
    