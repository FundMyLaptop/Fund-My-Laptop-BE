@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/errorpage.css')}}">
@endpush


@section('content')

    <section class="content d-md-block">
        <div class="container">
            <main class="container">
                <div class="container">
                    <img src="../img/2newerr500.png" class="img-responsive w-100" alt="Error.. Page not found"> <!--added new image-->
                </div>
                <div class="text-center pb-5 mt-2">
                    <button class="btn-page mb-4">Go to Homepage</button>
                </div>
            </main>
        </div>
    </section>
@endsection
