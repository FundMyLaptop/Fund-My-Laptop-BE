@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/how-it-works.css')}}">
@endpush


@section('content')

    <!--How it works starts-->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-4">
            <h2>{{ $testimonial ?? '' }}</h2>
                <p></p>
                <!--<button class="btnhiw">Get Started</button>-->
            </div>
            <div class="col-md-8 col-sm-12">
                <img class="img-fluid" src="{{asset('img/hiw1.png')}}" alt="">
            </div>
        </div>
    </div>

@endsection
