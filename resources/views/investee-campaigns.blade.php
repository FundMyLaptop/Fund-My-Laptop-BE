@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap-css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-css/investee-campaigns.css')}}">
@endpush


@section('content')
    <section class="container">
        <div class="top">
            <ol class="breadcrumb" style="font-size: 23px; background:none;">
                <li class="breadcrumb-item"><a style="color: black; " href="#">Main Dashboard</a></li>
                <li class="breadcrumb-item active "><a style="color: blue;" href="#">Campaign</a>
                </li>
            </ol>
        </div>

        <h2 class="topCampaigns">Featured Campaigns</h2>
        <div class="row">
            @forelse($featured_requests as $isFeatured)
                <div class="box campaign_display_box">
                    <img class="img" src="{{ $isFeatured->photoURL }}"/>
                    <div class="boxContent">
                        <h2>{{ $isFeatured->title }}</h2><br>
                        <p class="description">{{ $isFeatured->description }}</p>


                        <!--Progress Bar-->
                        <div class="meter">
                            <div class="span" style="width: {{ $isFeatured->transaction->sum('amount') / ($isFeatured->amount) * (100) }}%; max-width: 100%"></div>
                        </div>


                        <div class="d-flex justify-content-between amount">
                            <h3>&#x20a6;{{ number_format($isFeatured->transaction->sum('amount')) }}</h3>
                            <h3>{{ round($isFeatured->transaction->sum('amount') / ($isFeatured->amount) * (100), 0) }}%</h3>
                        </div>
                        <p class="raisedAmount">Raised of &#x20a6;{{ number_format($isFeatured->amount) }}</p>
                    </div>
                    <p class="reason"></p>
                    <a href="{{ url('/campaigns/manage/'.$isFeatured->id) }}" class="view_details_btn">
                        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
                    </a>
                </div>
            @empty
                <div class="col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                    <h3 class="mt-4 text-center"> {{ "You don't have featured campaigns yet" }} </h3>
                </div>
            @endforelse
        </div>
    </section>


    <section class="container">
        <h2 class="topCampaigns">Campaign Requests</h2>
        <div class="row">
            @forelse($campaign_requests as $campaign_request)
                <div class="box campaign_display_box">
                    <img class="img" src="{{ $campaign_request->photoURL }}"/>
                    <div class="boxContent">
                        <h2>{{ $campaign_request->title }}</h2><br>
                        <p class="description">{{ $campaign_request->description }}</p>

                        <!--Progress Bar-->
                        <div class="meter">
                            <div class="span" style="width: {{ $campaign_request->transaction->sum('amount') / ($campaign_request->amount) * (100) }}%; max-width: 100%"></div>
                        </div>

                        <div class="d-flex justify-content-between amount">
                            <h3>&#x20a6;{{ number_format($campaign_request->transaction->sum('amount')) ?? 0 }}</h3>
                            <h3>{{ round($campaign_request->transaction->sum('amount') / ($campaign_request->amount) * (100), 0) }}%</h3>
                        </div>
                        <p class="raisedAmount">Raised of &#x20a6;{{ number_format($campaign_request->amount) }}</p>
                    </div>
                    <p class="reason"></p>
                    <a href="{{ url('/campaigns/manage/'.$campaign_request->id) }}" class="view_details_btn">
                        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
                    </a>
                </div>
            @empty
                <div class="col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                    <h3 class="mt-4 text-center"> {{ "You don't have campaign requests yet" }} </h3>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-white see-more" style="color:#FB3F5C">{{ $campaign_requests->links() }}</button>
        </div>
    </section>
@endsection
