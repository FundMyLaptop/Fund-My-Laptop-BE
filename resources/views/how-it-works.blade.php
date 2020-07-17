@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/how-it-works.css')}}">
@endpush


@section('content')

    <!--How it works starts-->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-4">
                <h2><b>Raise money for <br> your laptop purchase<br> or fix</b></h2>
                <p>In 5 simple and easy steps, lets show you how you can fund your laptop or raise funds to fix</p>
                <button class="btnhiw">Get Started</button>
            </div>
            <div class="col-md-8 col-sm-12">
                <img class="img-fluid" src="{{asset('img/hiw1.png')}}" alt="">
            </div>
        </div>
        <!--How it works-->
        <h2 class="text-center mtb-4 my-4 ">How it Works</h2>

        <!--Row 2-->
        <div class="row mb-5">
            <div class="col-md-6">
                <!--Inner row-->
                <div class="row">
                    <div class="col-sm-2">
                        <img class="img-fluid" src="{{asset('img/hiw-1.png')}}" alt="">
                    </div>
                    <div class="col-sm-10">
                        <h3>Register</h3>
                        <p>Complete and Submit and Online Application</p>
                    </div>
                </div>
                <!--End Inner row-->
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('img/hiw2.png')}}" alt="">
            </div>
        </div>
        <!--Row 3-->
        <div class="row flex-md-row-reverse mb-5">
            <div class="col-md-6 my-auto">
                <!--Inner row-->
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <img class="img-fluid" src="{{asset('img/hiw-2.png')}}" alt="">
                    </div>
                    <div class="col-sm-10">
                        <h3>Make a Request</h3>
                        <p>Make a request to gather funds for your laptop purchase or repair..</p>
                    </div>
                </div>
                <!--End Inner row-->
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('img/hiw3.png')}}" alt="">
            </div>
        </div>

        <!--Row 4-->
        <div class="row mb-5">
            <div class="col-md-6 my-auto">
                <!--Inner row-->
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <img class="img-fluid" src="{{asset('img/hiw-3.png')}}" alt="">
                    </div>
                    <div class="col-sm-10">
                        <h3>Funders review your loan request</h3>
                        <p>Includes details of how you plan to spend the money or why loaning money to you is a good risk.</p>
                    </div>
                </div>
                <!--End Inner row-->
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('img/hiw4.png')}}" alt="">
            </div>
        </div>
        <!--Row 5-->
        <div class="row flex-md-row-reverse mb-5">
            <div class="col-md-6 my-auto " >
                <!--Inner row-->
                <div class="row mb-4" >
                    <div class="col-sm-2">
                        <img class="img-fluid" src="{{asset('img/hiw-4.png')}}" alt="">
                    </div>
                    <div class="col-sm-10 ">
                        <h3>Accept the Loan</h3>
                        <p>Review the terms and accept the loan</p>
                    </div>
                </div>
                <!--End Inner row-->
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('img/hiw5.png')}}" alt="">
            </div>
        </div>
        <!--Row 6-->
        <div class="row mb-5">
            <div class="col-md-6 my-auto ">
                <!--Inner row-->
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <img class="img-fluid" src="{{asset('img/hiw-5.png')}}" alt="">
                    </div>
                    <div class="col-sm-10">
                        <h3>Set Up your Payment Plan</h3>
                        <p>Make  payments according to your selected payment plan</p>
                        <button class="btnhiw">View Payment Plan <span class="hiwleft">></span></button>
                    </div>
                </div>
                <!--End Inner row-->
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('img/hiw6.png')}}" alt="">
            </div>
        </div>

    </div>

@endsection
