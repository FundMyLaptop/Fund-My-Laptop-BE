@extends('layout.app')

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

    <link rel="stylesheet" href="{{asset('css/custom-css/partners.css')}}">

@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

    <script src="https://kit.fontawesome.com/65f1e6a808.js" crossorigin="anonymous"></script>

    <script src="{{asset('js/custom-js/partners.js')}}"></script>

@endpush


@section('content')

    <div class="container">
        <h2>Our Partners/ Our Clients</h2>
        <section class="customer-logos slider">
            <div class="slide"><a href="#"><img src="{{asset('img/layer1.png')}}"></a></div>
            <div class="slide"><a href="#"><img src="{{asset('img/partners1.png')}}"></a></div>
            <div class="slide"><a href="#"><img src="{{asset('img/partners2.jpg')}}"></a></div>
            <div class="slide"><a href="#"><img src="{{asset('img/partners3.jpg')}}"></a></div>
            <div class="slide"><a href="#"><img src="{{asset('img/partners4.jpg')}}"></a></div>
            <div class="slide"><a href="#"><img src="{{asset('img/partners9.jpg')}}"></a></div>
            <div class="slide"><a href="#"><img src="{{asset('img/partners6.jpg')}}"></a></div>
            <div class="slide"><a href="#"><img src="{{asset('img/partners7.jpg')}}"></a></div>
            <div class="slide"><a href="#"><img src="{{asset('img/partners8.jpg')}}"></a></div>
        </section>
    </div>

@endsection
