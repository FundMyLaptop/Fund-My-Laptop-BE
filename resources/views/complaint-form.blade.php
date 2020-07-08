@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/complaint-form.css')}}">
@endpush


@section('content')
<div class="body">
    <form>
        <div class="container-form">
            <h1>Submit a Complaint</h1>
            <p>Fill in your details to submit a complaint.</p><br><br>

            <label for="formGroupExampleInput">Full name</label>
            <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Enter your name" required>

            <label for="formGroupExampleInput2" style="position: relative;">Email</label>

            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email" required>

            <label for="formGroupExampleInput">Details of complaint</label>
            <input type="text" class="form-control" id="formGroupExampleInput3"  placeholder="Enter your message" required>

            <button style="background-color: #04172A;border: none;"type="button" class="btn btn-primary btn-lg form">Submit</button>
        </div>
    </form>
</div>


@endsection
