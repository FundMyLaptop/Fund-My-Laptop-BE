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
                    <p class="laptop_subdetail">John Doe</p>
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
                <p class="laptop_subdetail">Lagos, Nigeria</p>
            </div>

            <div class="col-md-6 col-12 anotherSwipe">
                <p class="title_laptop_detail">Occupation</p>
                <p class="laptop_subdetail">Freelance Software Developer</p>
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

        <!-- Recomendations -->
        <div class="row recommendations">
            <div class="col">
                <p class="title_laptop_detail">Recommended by:</p>
            </div>
        </div>
        <div class="row recommenders">
            <div class="col-12 col-md-6">
                <div class="row profile recommender align-items-center">
                    <div class="profile_image_container">
                        <img src="../img/janePix.png" alt="" />
                    </div>
                    <p class="laptop_subdetail">
                        Jane Doe
                    </p>
                    <span class="no_of_recommmendations"
                    >11 successsful recommendations</span
                    >
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row profile recommender align-items-center">
                    <div class="profile_image_container">
                        <img src="../img/janetPix.png" alt="" />
                    </div>
                    <p class="laptop_subdetail">
                        Janet Doe
                    </p>
                    <span class="no_of_recommmendations"
                    >7 successsful recommendations</span
                    >
                </div>
            </div>
        </div>

        <div class="row recommenders align-items-center">
            <div class="col-12 col-md-6">
                <div class="row profile recommender align-items-center">
                    <div class="profile_image_container">
                        <img src="../img/UnleDoePix.png" alt="" />
                    </div>
                    <p class="laptop_subdetail">
                        Uncle Doe
                    </p>
                    <span class="no_of_recommmendations"
                    >6 successsful recommendations</span
                    >
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <p class="to_view_recom_details">View recommender details</p>
        </div>
    </div>
    <div class="container">

        <div class="row each_detail_row">
            <div class="col-12 col-md-6">
                <p class="title_laptop_detail toAdjust">Loan amount:</p>
                <p class="detail_funding_2">{{$request->currency }} {{ $request->amount}}</p>
            </div>

            <div class="col-12 col-md-6">
                <p class="title_laptop_detail toAdjust">Proposed Repayment period:</p>
                <p class="detail_funding_2">3 months</p>
            </div>
        </div>
        @endforeach

        <!-- Acknowledgement and support -->

        <div class="row each_detail_row">
            <div class="col-12 col-md-8">
                <p class="get_funding_ASAP">
                    Get a <strong>N 275,000</strong> repayment in 3 months if you fund
                    this loan
                </p>
            </div>
            <div class="col-12 col-md-3 fundButton">
                <p><a class="funding_Loan" href="#">Fund this loan</a></p>
            </div>
        </div>
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
