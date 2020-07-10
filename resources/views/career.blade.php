@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/custom-css/careerpage.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-css/nav.css')}}">
@endpush


@section('content')

    <!-- My task starts here -->
    <section class="bk-color pt-5">
        <div class="container" style="position:relative; z-index:10;">
            <div class="row">
                <div class="col-md-12 col-sm-12 caption-header">
                    <h2>Careers at FundmyLaptop</h2>
                    <p>Join FundmyLaptop and help power growth
                        for a new generation in Africa</p>
                    <button class="btn btn-opening">See Job Opening
                        <i class="fa fa-long-arrow-down pl-3 pl-2"></i>
                    </button>

                </div>
            </div>
        </div>
        <div class="patterns">
            <img src="../img/career-curved-pattern.png" class="img-fluid" alt="">
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 inner-text">
                    <h2>Help turn compassion into action</h2>
                    <p>There are a billion good intentions tucked inside each and every one of us. At FundmyLaptop, we
                        believe that the impulse to
                        help a person, fix a neighborhood, or change a nation should never be ignored. In fact, it
                        should be shared with the
                        entire world. Check out current job openings, join our team, and be a part of the change.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="pad-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card mb-4">
                        <div class="img-holder">
                        </div>
                        <div class="card-body">
                            <div class="card-pattern"></div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="card-title">Digital Marketer Specialist</h2>

                                    <p class="card-sub mb-2 mt-2">Lagos, Nigeria</p>
                                    <p class="card-text">We're looking for developer-entrepreneurs and technical
                                        business owners to join the
                                        Growth team at FundmyLaptop as Technical Product Specialists. Developers are one
                                        of
                                        the most important
                                        groups in FundmyLaptop's community of partners, and as the Technical Product
                                        Specialist, you'll own our
                                        developer relations and give Paystack developers the superpowers they need to
                                        build amazing
                                        products.</p>
                                    <p class="card-subtitle mb-2 mt-2"><span>Stack:</span> Word Press </p>
                                    <p class="card-subtitle mb-2 mt-2"><span>Amount:</span> ₦100,000 - ₦150,000</p>
                                    <p class="card-subtitle mb-2 mt-2"><span>Level:</span> Senior</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-apply">
                                        <a href="#" class="btn btn-more">Read More &rarr;</a>
                                        <p class="card-status">Status: ongoing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="img-holder">
                        </div>
                        <div class="card-body">
                            <div class="card-pattern"></div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="card-title">Digital Marketer Specialist</h2>

                                    <p class="card-sub mb-2 mt-2">Abuja, Nigeria</p>
                                    <p class="card-text">We're looking for developer-entrepreneurs and technical
                                        business owners to join the
                                        Growth team at FundmyLaptop as Technical Product Specialists. Developers are one
                                        of
                                        the most important
                                        groups in FundmyLaptop's community of partners, and as the Technical Product
                                        Specialist, you'll own our
                                        developer relations and give Paystack developers the superpowers they need to
                                        build amazing
                                        products.</p>
                                    <p class="card-subtitle mb-2 mt-2"><span>Stack:</span> Word Press </p>
                                    <p class="card-subtitle mb-2 mt-2"><span>Amount:</span> ₦100,000 - ₦150,000</p>
                                    <p class="card-subtitle mb-2 mt-2"><span>Level:</span> Senior</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-apply">
                                        <a href="#" class="btn btn-more">Read More &rarr;</a>
                                        <p class="card-status">Status: ongoing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- My task ends here -->

@endsection
