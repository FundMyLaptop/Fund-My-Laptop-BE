@extends('layout.app')

@push('styles')
<link rel="stylesheet" href="{{asset('css/custom-css/listofcampaigns.css')}}" />
@endpush

@section('content')
<section class="container">
    <div class="top">
      <ol class="breadcrumb" style="font-size: 23px; background:none;">
        <li class="breadcrumb-item"><a style="color: black; " href="index.html">Home</a></li>
        <li class="breadcrumb-item active "><a style="color: blue;" href="">Campaign</a></li>
      </ol>
    </div>

    <h2 class="topCampaigns">Top Campaigns</h2>

    <div class="row">
      @forelse($topcampaigns as $topcampaigns)
      <div class="box ">
        <img class="img" src="{{ $topcampaigns->photoURL }}" />
        <div class="boxContent">
          <h2 class="name">{{ $topcampaigns->user->firstName}} {{$topcampaigns->user->lastName }}</h2>
          <p class="reason">{{ $topcampaigns->title }}</p>
          <p class="description">{{ $topcampaigns->description }}</p>

          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: {{ $topcampaigns->transaction->sum('amount') / ($topcampaigns->amount) * (100) }}%; max-width: 100%"></div>
          </div>


          <div class="d-flex justify-content-between amount">
            <h3> &#x20a6;{{ number_format($topcampaigns->transaction->sum('amount')) ?? 0 }}</h3>
            <h3>{{ round($topcampaigns->transaction->sum('amount') / ($topcampaigns->amount) * (100), 0) }}%</h3>
          </div>
          <p class="raisedAmount">Raised of &#x20a6;{{ number_format($topcampaigns->amount) }}</p>
        </div>
        <button onclick="location.href='{{ url('/campaign/'.$topcampaigns->id) }}'" class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>
      @empty
      <div class="col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
          <h3 class="mt-4 text-center"> {{ "No Top Campaigns" }} </h3>
      </div>
      @endforelse

    </div>
    <div class="d-flex justify-content-end">
      <button  onclick="location.href='{{ url('/campaign-grossing') }}'" class="btn btn-white see-more" style="color:#FB3F5C">See more ></button>
    </div>
    
</section>
   

  
  <section class="container">
    <h2 class="topCampaigns">Featured Campaigns</h2>
    
    <div class="row">
      @forelse($featuredCampaigns as $featuredCampaign)
      <div class="box ">
        <img class="img" src="{{ $featuredCampaign->photoURL }}" />
        <div class="boxContent">
          <h2 class="name">{{ $featuredCampaign->user->firstName}} {{$featuredCampaign->user->lastName }}</h2>
          <p class="reason">{{ $featuredCampaign->title }}</p>
          <p class="description">{{ $featuredCampaign->description }}</p>

          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: {{ $topcampaigns->transaction->sum('amount') / ($topcampaigns->amount) * (100) }}%; max-width: 100%"></div>
          </div>

          <div class="d-flex justify-content-between amount">
            <h3>&#x20a6;{{ number_format($topcampaigns->transaction->sum('amount')) ?? 0 }}</h3>
            <h3>{{ round($topcampaigns->transaction->sum('amount') / ($topcampaigns->amount) * (100), 0) }}%</h3>
          </div>
          <p class="raisedAmount">Raised of &#x20a6;{{ number_format($featuredCampaign->amount) }}</p>
        </div>
        <button onclick="location.href='{{ url('/campaign/'.$featuredCampaign->id) }}'" class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>

          @empty
          <div class="col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
              <h3 class="mt-4 text-center"> {{ "No Featured Campaigns" }} </h3>
          </div>
          @endforelse
    </div>
    <div class="d-flex justify-content-end">
      <button onclick="location.href='{{ url('/featured-request') }}'"  class="btn btn-white see-more" style="color:#FB3F5C">See more ></button>
    </div>
    
  </section>
@endsection


