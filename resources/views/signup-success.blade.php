@extends('layout.app')
@section('content')

<main class="main-content d-sm-flex ">

    <form class="login-box p-md-5 p-2" method="POST" action="{{ route('verification.resend') }}">
    @csrf

    <h2 class="p-sm-3 p-1 welcome-text">Welcome to <br> <strong>Fund my Laptop</strong></h2>

    <p class="p-1 p-md-3 login-text md-n4">
        {{ __('Account Created Successfully') }}
    </p>
    
    {{ __('Please check your inbox and confirm your email address.') }}
    {{ __('If you did not receive the email') }},
    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.    
    </form>

    <div class="login-img-box d-none d-md-block">
        <img src="../img/login-img.png" class="login-img" alt="login FundMyLaptop">
    </div>
</main>


@endsection
