@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/FML_LandingPage.css')}}">
@endpush


@section('content')
    <div class="jumbotron jumbotron px-0 px-md-4 mb-0 mb-md-4 mt-0">
        <div class="row mt-lg-5 px-2 px-md-5 mx-auto mt-5">
            <div class="col-xl-8 px-0  mb-2 mb-sm-5 px-md-5 header-text mt-5
        d-flex
        flex-column
        justify-content-center">
                <h1 class="mb-lg-5">Support or Start a Campaign today</h1>
                <p class="pr-md-5">Fundmylaptop is a
                    platform where fundees can
                    place requests for help to either
                    get funding for the purchase of a new
                    laptop or repair an existing one.
                </p>
            </div>
            <div class="  header-form col-xl-4 my-5  pt-3 pb-5 bg-white"
            >
                <!-- here should be form -->
                <form class=" px-md-3 d-flex flex-column justify-content-center" method="post" action="{{ url('/campaigns') }}">
                @csrf
                    <h5 class=" text-center mb-5 mt-0">Laptop Funding</h5>
                    <div class="form-group">
                        <label for="inputAddress">Campaign Name</label>
                        <input type="text" class="form-control" name="title" id="CampaignName" placeholder="Campaign name here..">
                    </div>
                    <div class="form-group">
                        <label for="inputState">Target</label>
                        <select id="inputState" class="form-control" name="amount">
                            <option selected value="1000">$1000</option>
                            <option value="20000">$20000</option>
                            <option value="30000">$30000</option>
                        </select>
                    </div>
                    <!-- date row -->
                    <div class="row">
                        <div class="form-group col-md-6 pr-lg-1">
                            <label for="example-date-input" class=" col-form-label">Start Date</label>
                            <input class="form-control" type="date"  id="example-date-input">

                        </div>
                        <div class="form-group col-md-6  pl-lg-1">
                            <label for="example-date-input" class=" col-form-label">End Date</label>
                            <input class="form-control" type="date"  id="example-date-input">
                        </div>
                    </div>
                    <button type="submit" class="btn-form mx-auto my-4">Start Compaign</button>
                </form>
            </div>
        </div>

    </div>
    <!-- ***** Header content Finish here*******-->
    <!-- ******* Main section Start Here ******** -->
    <main >
        <!-- trending section -->
        <section class="container trending-section my-md-5">
            <h3 class="mb-4">Trending Now !</h3>
            <div class="row trending-cards ">
                @if(count($oldRequests) > 0)
                <!-- card start here -->
                @foreach($oldRequests as $oldRequest)
                    @php
                        $amountFunded = $oldRequest->transaction()->where('status','success')->get()->sum->amount;
                        $percentage = intval(($amountFunded * 100) / $oldRequest->amount);
                    @endphp
                    <div class="col-lg-4 mb-4">
                        <div class="card ">
                            <img class="card-img-top" @isset($oldRequest->user->verificaton)src="{{ ($oldRequest->user->verification->photoURL ) ?? '' }}" @else src="" @endisset alt="Card image cap">
                            <!-- card body -->
                            <div class="card-body">
                                <h5 class="card-title mb-0">
                                    {{ $oldRequest->user->firstName.' '.$oldRequest->user->lastName }}
                                </h5>
                                <span class="card-subtitle ">
                                    {{ $oldRequest->title }}
                                </span>
                                <p class="card-text mt-4">
                                    {{ $oldRequest->description }}
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" id='card-progress-bar' role="progressbar" style="width: {{ $percentage }}%;"
                                        aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between mt-3 mb-2">
                                    <span class="card-price">
                                        N{{ number_format($amountFunded) }}
                                    </span>
                                    <span class="card-progress-num">
                                        {{ $percentage }}%
                                    </span>
                                </div>
                                <span class="card-fonds">
                                    Raised of N{{ number_format($oldRequest->amount) }}</span>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex align-center justify-content-between p-0">
                                <a href='' class="m-auto "> view details <img src="/img/card-arrow.png" alt=""> </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                <div class="col-lg-12 mb-4">
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <h5 class="card-title mb-0">No Available Request</h5>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </section>
        <!-- about us section -->
        <section class="container-fluid bg-white about-us-section my-5">
            <div class="container">
                <h3 class="mb-4">About Us</h3>
                <div class="  row">
                    <div class="col-lg-6">
                        <img class='aboutus-img img-fluid 'src="/img/about-us.png" alt="">
                    </div>
                    <div class="col-lg-6 pr-4 pl-lg-5
                d-flex flex-column
                justify-content-center
                ">
                        <h3  class=' mb-4 mt-4 mt-md-0 mb-md-5  about-us-title'>We are here because of you</h3>
                        <p class="aboutus-text">We are a group of tech experts trying to help
                            the younger generation of tech enthusiast get
                            into tech with the limitation
                            of gadgets and other important stuff limiting
                            the african tech community</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Compaign Section -->
        <section class="compaign-section">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <h3 class="col-7">Featured Campaigns </h3>
                    <span class="mt-1 btn-view-all "><a href="{{ url('featured-request') }}"> View All+ </a></span>
                </div>
                <div class="row compaign-cards ">
                    <!-- card start here -->
                    @if(count($featuredCampaigns) > 0)
                        @foreach($featuredCampaigns as $featuredCampaign)
                        @php
                            $amountFunded = $featuredCampaign->transaction()->where('status','success')->get()->sum->amount;
                            $percentageFunded = intval(($amountFunded * 100) / $featuredCampaign->amount);
                        @endphp
                            <div class="col-lg-4 my-3">
                                <div class="card ">
                                    <img class="card-img-top" @isset($featuredCampaign->user->verification)src="{{ ($featuredCampaign->user->verification->photoURL ) ?? '' }}" @else src="" @endisset  alt="Card image cap">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">{{ $featuredCampaign->user->firstName.' '.$featuredCampaign->user->lastName }}</h5>
                                        <span class="card-subtitle ">{{ $featuredCampaign->title }}</span>
                                        <p class="card-text mt-4">{{ $featuredCampaign->description }}</p>
                                        <div class="progress">
                                            <div class="progress-bar"  id='card-progress-bar' role="progressbar" style="width: {{ $percentageFunded }}%;" aria-valuenow="{{ $percentageFunded }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3 mb-2">
                                            <span class="card-price"> N{{ number_format($amountFunded) }}</span>
                                            <span class="card-progress-num">{{ $percentageFunded }}%</span>
                                        </div>
                                        <span class="card-fonds">Raised of N{{ number_format($featuredCampaign->amount) }}</span>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex align-center justify-content-between p-0">
                                        <a href="{{ url('campaign/'.$featuredCampaign->id) }}" class="m-auto "> view details <img src="/img/card-arrow.png" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @else
                            <p> No featured requests </p>
                        @endif
                </div>
            </div>
        </section>
        <!-- Testimonials section -->
        <section class=" container-fluid testimonials-section mt-md-5
       row
       justify-content-center
      ">
            <h3 class="col-md-8 text-center text-white mb-4">Testimonials</h3>
            <div class="testimonials-text col-md-9 mb-4">
                <p class=" text-white px-5">“Graduating university without a job, I needed a laptop computer to
                    kickstart my freelance business. A friend referred
                    my to Fund my Laptop, I had my doubts but they were easily
                    erased, Within an hour of posting a campaign i got full funding
                    for my laptop and my account was immediately credited, Within three months
                    i was able to pay back the loan and grow my business”</p>

            </div>
            <div class=" col-md-10 text-center " >
                <img  class='mb-3 'src="/img/testimenoal-pic.png" alt="">
                <h5  class='mb-0' style="color: white">Abiodun Popoola</h5>
                <span style="color: white"
                      class="card-subtitle">
                Raise 500k for his macbook pro</span>
            </div>
        </section>
    </main>

    <!-- ******* Main section Finish Here ******** -->
    <div class="spacer py-md-5"></div>
    <!-- News Letter -->
    <div class=" container-fluid mx-0 news-letter row">

        <div class="col-md-11 news-letter-text ml-md-5  my-auto my-lg-5 px-0" >
            <h2 class="text-center text-md-left">Subscribe to our Newsletter</h2>
            <p  class="mx-auto mx-md-0">Stay in touch with our regular updates and tech news alert,
                we only send newsletter weekly and we promise not to spam</p>
        </div>
        <div class="col-md-8 news-letter-form ml-md-5" >
            <form action="">
                <input type="text" name="" id="subscribe-input" class="mb-5 subscribe-input" placeholder="Enter Email">
                <button class="mb-5 subscribe-btn"> Subscribe</button>
            </form>
        </div>

    </div>

@endsection
