@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap-css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-css/blog-list.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-css/verificationBVN.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
@endpush

@section('content')
  <!--Header-->
  <div class="container col-md-6 mx-auto">
    <div class="verification-progress-container col-12 col-md-8 mx-auto mt-5 text-center">
      <h4 class="font-weight-bold">Verification</h4>
      <div class="verification-progress mt-4 mt-md-5">
        <div class="verify-item">
          <span class="verify-circle"></span>
        </div>
        <div class="verify-item active">
          <span class="verify-circle active">
            <span class="progress-number">2</span>
          </span>
          <span class="text">Link an Account</span>
        </div>
        <div class="verify-item">
          <span class="verify-circle"></span>
        </div>
        <div class="verify-item">
          <span class="verify-circle"></span>
        </div>
      </div>
    </div>
    <p class="verify-intro-text text-left my-5 col-sm-10 px-0">
      Don't worry your information is private and will not be shared with
      anyone except <a class="text-fml-secondary">FundMyLaptop</a>
    </p>

    <form class="needs-validation mt-5 verify-form-bvn" novalidate>
      <div class="form-row">
        <div class="col-md-6 mb-4 pr-md-3">
          <label for="firstName">First name <span class="required">*</span></label>
          <input type="text" class="form-control" id="firstName" required />
          <div class="invalid-feedback">
            Please provide your first name
          </div>
        </div>
        <div class="col-md-6 mb-4 pl-md-3">
          <label for="bank">Bank</label>
          <select class="custom-select" id="bank">
            <option selected disabled value="">Select your bank</option>
            <option value="access">Access Bank</option>
            <option value="citibank">Citibank</option>
            <option value="diamond">Diamond Bank</option>
            <option value="ecobank">Ecobank</option>
            <option value="fidelity">Fidelity Bank</option>
            <option value="fcmb">First City Monument Bank (FCMB)</option>
            <option value="fsdh">FSDH Merchant Bank</option>
            <option value="gtb">Guarantee Trust Bank (GTB)</option>
            <option value="heritage">Heritage Bank</option>
            <option value="Keystone">Keystone Bank</option>
            <option value="rand">Rand Merchant Bank</option>
            <option value="skye">Skye Bank</option>
            <option value="stanbic">Stanbic IBTC Bank</option>
            <option value="standard">Standard Chartered Bank</option>
            <option value="sterling">Sterling Bank</option>
            <option value="suntrust">Suntrust Bank</option>
            <option value="union">Union Bank</option>
            <option value="uba">United Bank for Africa (UBA)</option>
            <option value="unity">Unity Bank</option>
            <option value="wema">Wema Bank</option>
            <option value="zenith">Zenith Bank</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-4 pr-md-3">
          <label for="middleName">Middle name <span class="required">*</span></label>
          <input type="text" class="form-control" id="middleName" required />
          <div class="invalid-feedback">
            Please provide your middle name
          </div>
        </div>
        <div class="col-md-6 mb-4 pl-md-3">
          <label for="accountNumber">Account number</label>
          <input type="number" class="form-control" id="accountNumber" />
          <div class="invalid-feedback">
            Please provide a valid account number
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-4 pr-md-3">
          <label for="lastName">Last name <span class="required">*</span></label>
          <input type="text" class="form-control" id="lastName" required />
          <div class="invalid-feedback">
            Please provide your last name
          </div>
        </div>
        <div class="col-md-6 mb-4 pl-md-3">
          <label for="BVN">BVN</label>
          <input type="number" class="form-control" id="BVN" />
          <div class="invalid-feedback">
            Please provide a valid BVN
          </div>
        </div>
      </div>
      <p class="px-0 py-4">
        Any questions? <a class="text-fml-secondary">Call Us Now</a>
      </p>
      <div class="form-buttons d-flex flex-column flex-md-row justify-content-center justify-content-md-end">
        <button class="submit btn btn-fml-secondary order-1 order-md-2 align-self-center ml-md-3 mb-3 mb-md-0" type="submit" href="{{url('verification3')}}">
          Save and Continue
        </button>
        <button class="skip text-dark btn btn-outline-fml-secondary fml-btn-icon order-2 order-md-1 align-self-center" href="{{url('verification3')}}">
          Skip
        </button>
      </div>
    </form>
  </div>
@push('scripts');

<script src="{{asset('js/bootstrap-js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap-js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap-js/popper.js')}}"></script>

  <script>
    (function() {
      'use strict';
      window.addEventListener(
        'load',
        function() {
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function(
            form
          ) {
            form.addEventListener(
              'submit',
              function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              },
              false
            );
          });
        },
        false
      );
    })();
  </script>
@endpush

@endsection