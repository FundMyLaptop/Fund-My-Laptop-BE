@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/404.css')}}">
@endpush

@section('content')

<main class="main-content d-sm-flex ">

    <form class="login-box p-md-5 p-2" method="POST" action="{{ route('verification.resend') }}">

    @csrf

    <h2 class="p-sm-3 p-1 welcome-text">Welcome to <br> <strong>Fund my Laptop</strong></h2>

    <p class="p-1 p-md-3 login-text md-n4">
        {{ __('Verify Your Email Address') }}
    </p>
    <hr>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},
    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.    
    </form>

    <div class="login-img-box d-none d-md-block">
        <img src="../img/login-img.png" class="login-img" alt="login FundMyLaptop">
    </div>
</main>


@endsection
