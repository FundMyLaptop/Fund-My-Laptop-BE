@extends('layout.app')
@push('styles')
<link rel="stylesheet" href="{{asset('css/custom-css/sign-Up.css')}}">
@endpush

@section('content')
<!--
	Refactored the code base: @ajadi
 -->
    <!-- main content goes in here -->
	<main class="main-content d-sm-flex mt-5  mt-lg-0 ">
	<form class="login-box p-md-5 p-2" method="POST">
		<input type="hidden" name="role" value="0">
		            {!! csrf_field() !!}

		<h2 class="p-sm-3 p-1 welcome-text">Welcome to <br> <strong>Fund my Laptop</strong></h2>

        <p class="p-1 p-md-3 login-text mt-md-n4">Help Achieve Your dreams with funding for your laptops at little to no cost.</p>
		            <!-- check user for valid or invalid signup -->   
         @if (session('status'))
            <br>
            <br>
            <p class="alert alert-success">{{ session('status') }}
            </p>
            @endif
            @if (session('error'))
            <p class="alert alert-danger">{{ session('error') }}
            </p>
            @endif
​
            @foreach ($errors->all() as $error)
            <br>
            <br>
            <p class="alert alert-danger">{{ $error }}
            </p>
            @endforeach
		<!-- first and last names -->
		<div class="form-group row">
			<div class="col-md-6">
				<input type="text" placeholder="First Name" name="firstName" class="form-control" id="firstName" required>
				<p id="errorfirstName" class="error text-danger text-center text-sm-left">
			</div>
			<div class="col-md-6">
				<input type="text" placeholder="Last Name" name="lastName" class="form-control" id="lastName" required>
				<p id="errorlastName" class="error text-danger text-center text-sm-left">
			</div>
		</div>
		<!-- email and phone -->
		<div class="form-group row">

				<input type="email" placeholder="Email" name="email" class="form-control" id="email" required>
				<p id="erroremail" class="error text-danger text-center text-sm-left">

		</div>
		<!-- password -->
		<div class="form-group row">
			<div class="col-md-6">
				<input type="password" placeholder="Password" name="password" class="form-control" id="password" required>
				<p id="erroremail" class="error text-danger text-center text-sm-left">
			</div>
			<div class="col-md-6">
				<input type="password" placeholder="Password Confirmation" name="password_confirmation" class="form-control" id="password_confirmation" required>
				<p id="errorPasswordAgain" class="error text-danger text-center text-sm-left">
			</div>
		</div>
		<!-- address -->
		<div class="">
			<input class="check" type="checkbox" required >
			<label class="terms"> I agree to the <span>Terms Policy Conditions</span></label>
		</div>

        <div>
            <input type="submit" class="form-control login-btn  btn-fml-secondary" value="Sign Up">
		</div>

		<div>
		<div class="separator">OR</div>
			<a id="googleSignupButton" href="{{url('/auth/redirect/google')}}"><img src="{{ asset('img/google_logo.PNG') }}" />Sign up with Google</a>
		</div>
        <p class="account-info-text text-center py-4">Already have an account? <a href="{{ url('login') }}" class="sign-up-link">Log In</a></p>

        <!-- <div id="error" class="error p-1 "></div>
        </div> -->


	</form>

	<div class="login-img-box d-none d-md-block">
        <img src="../img/login-img.png" class="login-img" alt="login FundMyLaptop">
    </div>

</main>
@endsection