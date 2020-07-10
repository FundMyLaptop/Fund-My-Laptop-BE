@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/campaign.css')}}">
@endpush


@section('content')

    <!-- Pleading for fund title -->
    
    <div class="container pleading_funding">
        <div class="row">
            <div class="page-links">
                <a href="">Home</a> <span>/</span>
                <a href="">Campaigns Page</a> <span>/</span>
                <a href="" class="text-primary">Campaign</a>
            </div>
        </div>
        @foreach ($request as $request) 
       
        <div class="row">
            <p class="plead_fund">{{$request->title}}</p>
        </div>
        
        <div class="row deVideoDiv">
            <img src="{{$request->photoURL}}" height="320" width="440" alt="request-img">
        </div>
    </div>

    <div class="container">
        <div class="row each_detail_row">
            <div class="col-md-6 col-12">
                <p class="title_laptop_detail">Posted by:</p>
                <div class="row profile align-items-center">
                    <div class="profile_image_container">
                        <img src="../img/profileImage1.png" alt="" />
                    </div>
                    <p class="laptop_subdetail">{{$request->user->firstName}} {{$request->user->lastName}} </p>
                </div>
            </div>
            <div class="col-md-6 col-12 anotherSwipe">
                <p class="title_laptop_detail">Posted on:</p>
               
                <p class="laptop_subdetail">{{$request->created_at}}</p>
            </div>
        </div>

        <div class="row each_detail_row">
            <div class="col-md-6 col-12">
                <p class="title_laptop_detail">Location:</p>
                <p class="laptop_subdetail">{{$request->user->address}}</p>
            </div>

            <div class="col-md-6 col-12 anotherSwipe">
                <div class="col-12 col-md-6">
                    <p class="title_laptop_detail toAdjust">Campaign amount:</p>
                    <p class="detail_funding_2"> N{{number_format($request->amount)}}</p>
                </div>
            </div>
        </div>

        <!-- Description -->

        <div class="row each_detail_row">
            <div class="col">
                <p class="title_laptop_detail">Description</p>
                <p class="description_detail">
                    {{$request->description}}
                </p>
            </div>
        </div>

        @endforeach

        <!-- Acknowledgement and support -->

    
        <div class="row each_detail_row">
            <div class="col-12 col-md-7">
                <p class="get_funding_ASAP">
                    Can’t fund? Want to help? Share this campaign on social media
                </p>
            </div>
            <div class="col-12 col-md-5 funding_socials">
                <a href="#"> <ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"> <ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"> <ion-icon name="mail"></ion-icon></a>
                <a href="#"> <ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </div>
    </div>


@endsection
