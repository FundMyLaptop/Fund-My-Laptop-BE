@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/404.css')}}">
@endpush


@section('content')

    <main class="main">

        <div class="sm-col-6">
            <div class='box'>
                <div><img class="mx-auto d-block" src="../img/404.png" alt="search"></div>
            </div>
            <p class="font-weight-normal">OOPS...CAN'T FIND THAT PAGE

            <div class="row justify-content-center align-items-center" style="margin:0">
            <a href="{{ url('/') }}"><button class="btn btn-info align-center">Go to Homepage</button></a>
            </div>
            </p>
        </div>

    </main>

@endsection
