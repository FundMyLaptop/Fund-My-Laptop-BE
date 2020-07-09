@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/campaign.css')}}">
@endpush


@section('content')

    <!-- Pleading for fund title -->
    <div class="container pleading_funding">
        <div class="row">
            <div class="page-links">
            <a href="">{{ $linkone }}</a> <span>/</span>
            <a href="">{{ $linktwo }}</a> <span>/</span>
                <a href="" class="text-primary">{{ $linkthree }}</a>
            </div>
        </div>
        <div class="row">
            <p class="plead_fund">{{ $plead }}</p>
        </div>
        <div class="row deVideoDiv">
            <video width="320" height="240" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                {{ $video }}
            </video>
        </div>
    </div>

    <div class="container">
        <div class="row each_detail_row">
            <div class="col-md-6 col-12">
                <p class="title_laptop_detail">{{ $detail }}:</p>
                <div class="row profile align-items-center">
                    <div class="profile_image_container">
                        <img src="../img/profileImage1.png" alt="" />
                    </div>
                    <p class="laptop_subdetail">{{ $subdetail }}</p>
                </div>
            </div>
            <div class="col-md-6 col-12 anotherSwipe">
                <p class="title_laptop_detail">{{ $laptopdetail }}</p>
                <p class="laptop_subdetail">{{ $laptopsubdetail }}</p>
            </div>
        </div>

        <div class="row each_detail_row">
            <div class="col-md-6 col-12">
                <p class="title_laptop_detail">{{ $where }}</p>
                <p class="laptop_subdetail">{{ $region }}</p>
            </div>

            <div class="col-md-6 col-12 anotherSwipe">
                <p class="title_laptop_detail">{{ $work }}</p>
                <p class="laptop_subdetail">{{ $mode }}</p>
            </div>
        </div>

        <!-- Description -->

        <div class="row each_detail_row">
            <div class="col">
                <p class="title_laptop_detail">{{ $description }}</p>
                <p class="description_detail">{{ $described }}</p>
            </div>
        </div>

        <!-- Recomendations -->
        <div class="row recommendations">
            <div class="col">
                <p class="title_laptop_detail">{{ $recommend }}</p>
            </div>
        </div>
        <div class="row recommenders">
            <div class="col-12 col-md-6">
                <div class="row profile recommender align-items-center">
                    <div class="profile_image_container">
                        <img src="../img/janePix.png" alt="" />
                    </div>
                    <p class="laptop_subdetail">{{ $subdetail }}</p>
                    <span class="no_of_recommmendations">{{ $numrecommend }}</span>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row profile recommender align-items-center">
                    <div class="profile_image_container">
                        <img src="../img/janetPix.png" alt="" />
                    </div>
                    <p class="laptop_subdetail">{{ $subdetail }}</p>
                    <span class="no_of_recommmendations">{{ $numrecommendtwo}}</span>
                </div>
            </div>
        </div>

        <div class="row recommenders align-items-center">
            <div class="col-12 col-md-6">
                <div class="row profile recommender align-items-center">
                    <div class="profile_image_container">
                        <img src="../img/UnleDoePix.png" alt="" />
                    </div>
                    <p class="laptop_subdetail">{{ $subdetailtwo }}</p>
                    <span class="no_of_recommmendations"
                    >{{ $subrecommendthree }}</span
                    >
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <p class="to_view_recom_details">{{ $view }}</p>
        </div>
    </div>
    <div class="container">

        <div class="row each_detail_row">
            <div class="col-12 col-md-6">
                <p class="title_laptop_detail toAdjust">{{ $loan }}</p>
                <p class="detail_funding_2">{{ $fund }}</p>
            </div>

            <div class="col-12 col-md-6">
                <p class="title_laptop_detail toAdjust">{{ $proposed }}</p>
                <p class="detail_funding_2">{{ $when }}</p>
            </div>
        </div>

        <!-- Acknowledgement and support -->

        <div class="row each_detail_row">
            <div class="col-12 col-md-8">
                <p class="get_funding_ASAP">
                    {{ $agreement }} <strong>{{ $repayment }}</strong> {{ $paying }}
                </p>
            </div>
            <div class="col-12 col-md-3 fundButton">
                <p><a class="funding_Loan" href="#">{{ $fundlink }}</a></p>
            </div>
        </div>
        <div class="row each_detail_row">
            <div class="col-12 col-md-7">
                <p class="get_funding_ASAP">{{ $gettingfund }}</p>
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
