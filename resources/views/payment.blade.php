@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/payment-page.css')}}">
@endpush


@section('content')

    <div class="container mx-auto mb-5" style="margin-top: 88px;">
        <header>
            <h1 id="title" class="mt-5 mb-4">Fund John Doe's Laptop Purchase</h1>

            <h3 class="text-muted">Loan Amount</h3>
            <p style="font-size: 2rem;"><strong>&#x20A6; 250,000</strong></p>
        </header>
        <div class="row">
            <div class="col-md-6 mt-4">
                <!-- Video -->
                <div class="video embed-responsive-4by3">
                    <img class="img img-fluid" src="../img/video-placeholder.png" alt="video-placeholder">
                    <!-- <iframe src="" frameborder="0"></iframe> -->
                </div>

                <p class="my-4" id="creationDate">Created July 16, 2020</p>
                <hr>

                <div class="user-info my-4">
                    <img src="../img/card-image (4).png" height="40px" width="40px" alt="user photo"
                         class="img-icon rounded-circle">
                    <p class="m-0">John Doe</p>
                </div>

                <div class="repayment-info">
                    <h3 class="text-muted">Proposed Repayment Period:</h3>
                    <p>3 months</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="alert alert-danger d-none" style="padding: 0.5rem 1rem;" id="alert" role="alert">
                    <p class="my-0" id="alertMessage"></p>
                </div>
                <form class="payment-form d-flex flex-column p-4" method="POST" novalidate>
                    <div class="form-group mb-4">
                        <label class="form__label" for="amount">Amount</label>
                        <div class="input-group">
                            <span class="input-group-text" id="selectedCurrency">&#x20A6;</span>
                            <input class="form-control form-control-lg form__input" type="number" id="amount"
                                   placeholder="Enter Amount to Donate">
                            <select class="input-group-text" id="chooseCurrency">
                                <option value="NGN" selected>NGN</option>
                                <option value="USD">USD</option>
                                <option value="GBP">GBP</option>
                                <option value="EUR">EUR</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <label class="form__label" for="fullName">Full Name</label>
                        <input class="form-control form-control-lg form__input" type="text" id="fullName"
                               placeholder="Enter your full name">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mg-4">
                        <input class="" type="checkbox" id="stayAnonymous">
                        <label class="form__label" for="stayAnonymous">Donate Anonymously</label>
                    </div>


                    <div class="form-group mb-4">
                        <label class="form__label" for="email">Email Address</label>
                        <input class="form-control form-control-lg form__input" type="email" id="email"
                               placeholder="Enter your email address">
                        <div class="invalid-feedback"></div>
                    </div>


                    <!-- <h3>Select Payment Method</h3> -->

                    <h2 class="my-3">Card Details</h2>

                    <div class="form-group">
                        <label class="form__label" for="cardNumber">Card Number</label>
                        <input class="form-control form-control-lg form__input" type="number" id="cardNumber"
                               placeholder="Enter card number">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group my-2">
                            <label class="form__label" for="expirationDate">Expiration Date</label>
                            <input class="form-control form-control-lg form__input" type="text" id="expirationDate"
                                   placeholder="mm/yyyy">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="col-sm-6 form-group my-2">
                            <label class="form__label" for="cvv">CVV</label>
                            <input class="form-control form-control-lg form__input" type="number" id="cvv" placeholder="Enter CVV">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <button class="btn btn-danger btn-lg mx-auto btn-block my-4 form__button" type="submit">Pay &#x20A6;</button>
                </form>
            </div>
        </div>
    </div>

@endsection
