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
                <div class="bodyrow">
                    <input type="text" class="name" id="firstName" placeholder="First Name" required name="firstName">
                    <input type="text" class="name" id="lastName" placeholder="Last Name" required name="lastName">
                </div>
                <input type="email" id="email" placeholder="Email" required name="email">
                <input type="text" id="password" placeholder="password" required name="password">
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




