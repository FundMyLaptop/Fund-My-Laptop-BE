@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/complaint-form.css')}}">
@endpush


@section('content')
<div class="body mt-4 pt-4">
    <form method="post" action="/complaint-form">
        <div class="container-form mt-4">
            <h1>Submit a Complaint</h1>
            <p>Fill in your details to submit a complaint.</p><br><br>

            @if(session('status'))
                    <div class="alert alert-success mt-3">{{ session('status') }}</div>
                @endif
            <label for="formGroupExampleInput">Full name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput1" placeholder="Enter your name" required value="{{ old('name') }}">
            <p class="text-danger">@error('name'){{ $message }} @enderror</p>

            <label for="formGroupExampleInput2" style="position: relative;">Email</label>

            <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email" required value="{{ old('email') }}">
            <p class="text-danger">@error('email'){{ $message }} @enderror</p>

            <label for="formGroupExampleInput">Details of complaint</label>
            <textarea name="message" class="pt-3 form-item--text-area contact-item__num form-control"
                          id="exampleFormControlTextarea1" rows="" placeholder="Enter your message" required>{{ old('message') }}</textarea>
                <p class="text-danger">@error('message'){{ $message }} @enderror</p>
                @csrf

            <button style="background-color: #04172A;border: none;"type="submit" class="btn btn-primary btn-lg form">Submit</button>
        </div>
    </form>
</div>


@endsection
