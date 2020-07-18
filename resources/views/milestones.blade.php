@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/milestone-page.css')}}">
@endpush


@section('content')

    <div class="milestoneHeader d-flex justify-content-center">
        <div>
            <h1>MILESTONES</h1><hr class="headerHr mx-auto"/>
            <p>
                Not to brag, but peep how far we've come to see how far<br />
                we'll go. Join us now<br />
                <a href="{{ url('signup') }}"> <span class="headLink">Get Started</span></a>
            </p>
        </div>
    </div>
    <div class="grid2x2">
        <div class="box">
            <div class="card bg-dark text-white">
                <img class="card-img" src="{{asset('img/milestone1.jpg')}}" alt="Card image">
                <div class="card-img-overlay cardOne">
                    <h5 class="card-title">5 YEARS</h5>
                    <p class="card-text">We have been around for long and the
                        experience it comes with makes us better.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card bg-dark text-white">
                <img class="card-img" src="{{asset('img/milestone2.jpg')}}" alt="Card image">
                <div class="card-img-overlay cardTwo">
                    <h5 class="card-title">600 STUDENTS</h5>
                    <p class="card-text">Over quite a number of students have
                        successfully acquired a laptop for their projects.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card bg-dark text-white">
                <img class="card-img" src="{{asset('img/milestone3.jpg')}}" alt="Card image">
                <div class="card-img-overlay cardThree">
                    <h5 class="card-title">13 Countries</h5>
                    <p class="card-text">We have expanded our reach home & abroad
                        in order to reach out and solve basic needs, just as we can.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card bg-dark text-white">
                <img class="card-img" src="{{asset('img/milestone4.jpg')}}" alt="Card image">
                <div class="card-img-overlay cardFour">
                    <h5 class="card-title">30% Interest</h5>
                    <p class="card-text">We have made quite a lot of interests
                        for the investors willing to fund the loanee.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
