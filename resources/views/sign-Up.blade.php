@extends('layout.app')

@section('content')
<!-- 
	Refactored the code base: @ajadi
 -->
    <!-- main content goes in here -->
	<main class="main-content d-sm-flex ">
	<form class="login-box p-md-5 p-2" method="POST" action="{{ url('api/register') }}">
		<input type="hidden" name="role" value="0">
		@csrf
		<h2 class="p-sm-3 p-1 welcome-text">Welcome to <br> <strong>Fund my Laptop</strong></h2>
    
        <p class="p-1 p-md-3 login-text mt-md-n4">Help Achieve Your dreams with funding for your laptops at little to no cost.</p>
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
			<div class="col-md-6">
				<input type="email" placeholder="Email" name="email" class="form-control" id="email" required>
				<p id="erroremail" class="error text-danger text-center text-sm-left">
			</div>
			<div class="col-md-6">
				<input type="number" placeholder="Phone e.g: +23480000000" name="phone" class="form-control" id="phone" required>
				<p id="errorPhone" class="error text-danger text-center text-sm-left">
			</div>
		</div>
		<!-- password -->
		<div class="form-group row">
			<div class="col-md-6">
				<input type="password" placeholder="Password Again" name="password" class="form-control" id="password" required>
				<p id="erroremail" class="error text-danger text-center text-sm-left">
			</div>
			<div class="col-md-6">
				<input type="password" placeholder="Password Again" name="password_again" class="form-control" id="password_again" required>
				<p id="errorPasswordAgain" class="error text-danger text-center text-sm-left">
			</div>
		</div>
		<!-- address -->
		<div class="form-group row">
			<textarea class="form-control mx-3" name="address" id="address" 
			cols="30" rows="4" placeholder="Address" required>

			</textarea>
			
		</div>
		<div class="">
			<input class="check" type="checkbox" required >
			<label class="terms"> I agree to the <span>Terms Policy Conditions</span></label>
		</div>
		
        <div>
            <input type="submit" class="form-control login-btn  btn-fml-secondary" value="Sign Up">
		</div>
		
		<div>
		<div class="separator">OR</div>
			<a id="googleSignupButton" href=""><img src="{{ asset('img/google_logo.PNG') }}" />Sign up with Google</a>
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


