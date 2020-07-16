@extends('layout.app');

@section('content')

    <!-- main content goes in here -->
    <div class="bodyrow">
        <section id="formSection">
            <h1 class="h1style !important">Welcome to</h1> <br /><br/>
            <h2 class="h2style !important">Fund my Laptop</h2>
            <p>Help Achieve your dreams with funding for your laptops at little or no cost</p>
            <form method="POST">
            {!! csrf_field() !!}
            <!-- check user for valid or invalid signup -->   
         @if (session('status'))
            <br>
            <br>
            <p class="alert alert-success">{{ session('status') }}
            </p>
            @endif
​
            @foreach ($errors->all() as $error)
            <br>
            <br>
            <p class="alert alert-danger">{{ $error }}
            </p>
            @endforeach
            <input type="hidden" name="role" value="0">
                <div class="bodyrow">
                    <input type="text" class="name" name="firstName" id="firstName" placeholder="First Name" required>
                    <input type="text" class="name" name="lastName" id="lastName" placeholder="Last Name" required>
                    <p id="errorName" class="error  text-danger text-center text-sm-left"> </p>
                </div>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" placeholder="Password Again" name="password_again" id="password_again" required>
                <div>
                    <input class="check" type="checkbox" required>
                    <label class="terms"> I agree to the <span>Terms Policy Conditions</span></label>
                </div>
                <button id="submitButton">Sign Up</button>
                <div class="separator">OR</div>
                <a href="{{url('/auth/redirect/google')}}" id="googleSignupButton"><img src="../img/google_logo.png" />Sign up with Google</a>
                <p>Already have an account?<a href="{{ url('login') }}"><span> Sign in</span></a></p>
            </form>
        </section>
        <section class="imageSection"></section>
    </div>

@push('scripts');

<script src="{{asset('js/custom-js/signup.js')}}"></script>

@endpush

@endsection




