@extends('layout.app');

@section('content')
<div class="bodyrow">
    <section id="formSection">
        <h1 class="h1style !important">Welcome to</h1>
        <h2 class="h2style !important">Fund my Laptop</h2>
        <p>Help Achieve your dreams with funding for your laptops at little or no cost</p>
        <form>
            <div class="bodyrow">
                <input type="text" class="name" id="firstName" placeholder="First Name" required >
                <input type="text" class="name" id="lastName" placeholder="Last Name" required >
            </div>
            <input type="email" id="email" placeholder="Email" required >
            <input type ="text" id="password" placeholder="password" required >
            <div>
                <input class="check" type="checkbox" required >
                <label class="terms"> I agree to the <span>Terms Policy Conditions</span></label>
            </div>
            <button id="submitButton">Sign Up</button>
            <div class="separator">OR</div>
            <a id="googleSignupButton"><img src="../img/google_logo.png" />Sign up with Google</a>
            <p>Already have an account?<span> Sign in</span></p>
        </form>
    </section>
    <section class="imageSection"></section>
</div>

@push('scripts');

<script src="{{asset('js/custom-js/signup.js')}}"></script>
    
@endpush

@endsection




