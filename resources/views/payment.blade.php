@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/payment-page.css')}}">
    
@endpush


@section('content')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <div class="container mx-auto mb-5" style="margin-top: 88px;">
        <header>
            <h1 id="title" class="mt-5 mb-4">Fund {!! $request->user->firstName !!} {!! $request->user->lastName !!}'s Laptop Purchase</h1>

            <h3 class="text-muted">Loan Amount</h3>
            <p style="font-size: 2rem;"><strong>&#x20A6; {!! $request->amount !!}</strong></p>
        </header>
        <div class="row">
            <div class="col-md-6 mt-4">
                <!-- Video -->
                <div class="video embed-responsive-4by3">
                    <img class="img img-fluid" src="{{$request->photoURL  }}" alt="video-placeholder">
                    <!-- <iframe src="" frameborder="0"></iframe> -->
                </div>

                <p class="my-4" id="creationDate">Created {{date("M d,Y",strtotime($request->created_at))  }}</p>
                <hr>

                <div class="user-info my-4">
                    <img src="../img/card-image (4).png" height="40px" width="40px" alt="user photo"
                         class="img-icon rounded-circle">
                    <p class="m-0">{{$request->user->firstName  }}</p>
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
                <form class="payment-form d-flex flex-column p-4" action="{{ route('campaign/pay') }}" method="POST" novalidate>
        @csrf
                    <div class="form-group mb-4">
                        <label class="form__label" for="amount">Amount</label>
                        <div class="input-group">
                            <span class="input-group-text" id="selectedCurrency">&#x20A6;</span>
                            <input class="form-control form-control-lg form__input" type="number" id="amounta" name="amount"
                                   placeholder="Enter Amount to Donate">
                                   <input  type="hidden" name="request_id"
                                   value="{{ $request->id }}">
                                   <input  type="hidden" name="user_id"
                                   value="{{ $user->id }}">
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
                        <input class="form-control form-control-lg form__input" type="text" id="fullNamea"
                               placeholder="Enter your full name" name="fullName" value="{!! $user->firstName !!} {!! $user->lastName !!}">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mg-4">
                        <input class="" type="checkbox" id="stayAnonymous">
                        <label class="form__label" for="stayAnonymous">Donate Anonymously</label>
                    </div>


                    <div class="form-group mb-4">
                        <label class="form__label" for="email">Email Address</label>
                        <input class="form-control form-control-lg form__input" type="email" name="email" id="emaila"
                               placeholder="Enter your email address" value="{!! $user->email !!}" disabled>
                        <div class="invalid-feedback"></div>
                    </div>
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="email" value="{{ $user->email }}">
                    <input id="orderid" type="hidden" name="orderID">
                    <input type="hidden" name="metadata" value="{{ json_encode($metadata)}}" >
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">

                    <!-- State the payment processor for users to know -->
                    {{-- <h2 class="my-3">Payment processor: Flutterwave</h2> --}}

                    <!-- <h3>Select Payment Method</h3> -->

                  <!--   <h2 class="my-3">Card Details</h2>

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
                    </div> -->
                    <button class="btn btn-danger btn-lg mx-auto btn-block my-4 form__button" type="submit" >Pay &#x20A6;</button>
                    </form>
                        
                        {{-- <button class="btn btn-danger btn-lg mx-auto btn-block my-4 form__button" onClick="payWithRave()">Pay &#x20A6;</button> --}}
                        
                        {{-- <script>
                            var emailA = "test@test.com";
                            var fullname = "test";
                            var amountA = 20000;   
                        </script>
                        <script src="https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script> --}}
                    
            </div>
        </div>
    </div>


@endsection
<!-- Flutterwave JavaScript Starts -->

{{-- <script>
    const API_publicKey = "FLWPUBK-676417a64e495aff7f3e3c37571605e9-X"; 

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: emailA,
            amount: amountA,
            customer_phone: "",
            currency: "NGN",
            payment_options: "card",
            customer_firstname: fullname,
            customer_lastname: "",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
            var txref = response.tx.txRef; // collect flwRef returned and pass to a                     server page to complete status check
            var status = response.data.status;
            console.log(response);

            var paymentReference = response.tx.flwRef;
            var transactionId = response.tx.txRef;
            var paymentType = response.tx.paymentType;
            var amount = response.tx.amount;
            

            
        if(response.data.status == "success" || response.tx.status == "successful") {

            window.alert("Payment Successful");

          } else {
             window.location = "confirmPayment.php";
          }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
</script> --}}
<!-- Flutterwave JavaScript Ends -->
