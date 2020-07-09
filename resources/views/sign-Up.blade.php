@extends('layout.app')
@section('content')
<main class="main-content d-sm-flex ">
    <form class="login-box p-md-5 p-2" method="POST" action="api/register">
        <h2 class="p-sm-3 p-1 welcome-text">Welcome to <br> <strong>Fund my Laptop</strong></h2>

        <p class="p-1 p-md-3 login-text mt-md-n4">Help Achieve Your dreams with funding for your laptops at little to no cost.</p>
        <div class="form-group row">
			<div class="col-md-6">
				<input type="text" placeholder="First Name" name="firstName" class="form-control" id="firstName" required>
				<p id="errorFirstName" class="error text-danger text-center text-sm-left"> </p>
			</div>	
			<div class="col-md-6">
				<input type="text" placeholder="Last Name" name="lastName" class="form-control" id="lastName" required>
				<p id="errorLastName" class="error text-danger text-center text-sm-left"> </p>
			</div>

		</div>

        <div class="form-group row">
			<div class="col-md-6">
				<input type="email" placeholder="Email" name="email" class="form-control" id="email">
				<p id="errorEmail" class="error  text-danger text-center text-sm-left"> </p>
			</div>
			<div class="col-md-6">
				<input type="password" placeholder="Password" name="password" class="form-control" id="password">
				<p id="errorPassword" class="error text-danger text-center text-sm-left"></p>
			</div>
		</div>

        <div class="form-group mx-auto">
            <input class="check" type="checkbox" required >
            <label class="terms"> I agree to the <span>Terms Policy Conditions</span></label>
        </div>
        <div>
            <input type="submit" class="form-control login-btn  btn-fml-secondary" value="Sign Up">
        </div>
        <p class="account-info-text text-center py-4">Already have an account? <a href="{{ url('login') }}" class="sign-up-link">Sign In</a></p>

        <!-- <div id="error" class="error p-1 "></div>
        </div> -->
		<div class="my-4 text-center or d-flex align-items-center or-box">
            <hr/>
            <span class="or-text">
            or
            </span>
            <hr/>
		</div>

		<div>
            <a href="#" class="text-center py-3 btn-google d-flex justify-content-center align-items-center">
            <img class="pr-3" src="../img/google icon.svg" alt="">
            Sign up with Google
            </a>
        </div>

	</form>
    <div class="login-img-box d-none d-md-block">
        <img src="../img/login-img.png" class="login-img" alt="login FundMyLaptop">
    </div>
</main>
@endsection




