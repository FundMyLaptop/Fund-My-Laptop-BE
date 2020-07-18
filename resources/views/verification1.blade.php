@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap-css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-css/verification-upload-address.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
@endpush

@section('content')

    <div class="container col-md-6 mx-auto">
        <div class="verification-progress-container col-12 col-md-8 mx-auto mt-5 text-center">
            <h4 class="font-weight-bold">Verification</h4>
            <div class="verification-progress mt-4 mt-md-5">
                <div class="verify-item active">
                <span class="verify-circle active">
                    <span class="progress-number">1</span>
                </span>
                <span class="text">Residential Address</span>
            </div>
            <div class="verify-item">
                <span class="verify-circle"> </span>
            </div>
            <div class="verify-item">
                <span class="verify-circle"></span>
            </div>
            <div class="verify-item">
                <span class="verify-circle"></span>
            </div>
        </div>
    </div>

    <form class="needs-validation verify-form-address" novalidate>
      <div class="address-section">
        <h3 class="mt-5">
          <i class="fa fa-map-marker" aria-hidden="true"></i> Address
        </h3>
        <p class="verify-intro-text text-left mb-4 col-sm-10 px-0">
          Don't worry your information is private and will not be shared with
          anyone except
          <a class="text-fml-secondary" href="https://fundmylaptop.com/">FundMyLaptop</a>
        </p>
        <div class="form-row">
          <div class="col-md-6 mb-4 pr-md-3">
            <label for="address">Address <span class="required">*</span></label>
            <input type="text" class="form-control" id="address" placeholder="Type your address" required />
            <div class="invalid-feedback">
              Please provide your address
            </div>
          </div>
          <div class="col-md-6 mb-4 pl-md-3">
            <label for="city">City <span class="required">*</span></label>
            <input type="text" class="form-control" id="firstName" placeholder="Your city" required />
            <div class="invalid-feedback">
              Please provide your city
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-4 pr-md-3">
            <label for="state">State <span class="required">*</span></label>
            <select class="custom-select" id="state" required>
              <option selected disabled value="">Select your state</option>
              <option value="abia">Abia</option>
              <option value="adamawa">Adamawa</option>
              <option value="akwa-ibom">Akwa Ibom</option>
              <option value="anambra">Anambra</option>
              <option value="bauchi">Bauchi</option>
              <option value="bayelsa">Bayelsa</option>
              <option value="benue">Benue</option>
              <option value="borno">Borno</option>
              <option value="cross-river">Cross River</option>
              <option value="delta">Delta</option>
              <option value="ebonyi">Ebonyi</option>
              <option value="edo">Edo</option>
              <option value="ekiti">Ekiti</option>
              <option value="enugu">Enugu</option>
              <option value="gombe">Gombe</option>
              <option value="imo">Imo</option>
              <option value="jigawa">Jigawa</option>
              <option value="kaduna">Kaduna</option>
              <option value="kano">Kano</option>
              <option value="katsina">Katsina</option>
            </select>
          </div>
          <div class="col-md-6 mb-4 pl-md-3">
            <label for="bank">Country <span class="required">*</span></label>
            <select class="custom-select" id="country" required>
              <option selected disabled value="">Select your country</option>
              <option value="afghanistan">Afghanistan</option>
              <option value="albania">Albania</option>
              <option value="algeria">Algeria</option>
              <option value="andorra">Andorra</option>
            </select>
          </div>
        </div>
      </div>
      <div class="apartment-section">
        <h3 class="mt-5">
          <i class="fa fa-home" aria-hidden="true"></i> Apartment
        </h3>
        <p class="verify-intro-text text-left mb-4 col-sm-10 px-0">
          Tell us soemthing more to easily identify your house. Click
          applicable box
        </p>
        <div class="row">
          <div class="col-12">
            <button type="button" class="btn btn-outline-fml-secondary mr-2 my-1">
              Duplex
            </button>
            <button type="button" class="btn btn-outline-fml-secondary mr-2 my-1">
              Bungalow
            </button>
          </div>
          <div class="col-12">
            <button type="button" class="btn btn-outline-fml-secondary mr-2 my-2">
              Single
            </button>
            <button type="button" class="btn btn-outline-fml-secondary mr-2 my-2">
              2 bedrooms
            </button>
            <button type="button" class="btn btn-outline-fml-secondary my-2">
              3 bedrooms
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4">
            <label for="apartment-number">Apartment Number <span class="required">*</span></label>
            <input type="text" class="form-control" id="apartment-number" required />
            <div class="invalid-feedback">
              Please provide your apartment number
            </div>
          </div>
        </div>
      </div>
      <div class="image-upload-section">
        <h3 class="mt-5">
          <i class="fa fa-picture-o" aria-hidden="true"></i> Upload Image
        </h3>
        <p class="verify-intro-text text-left mb-4 col-sm-10 px-0">
          Your are required to provide atleast three pictures of your house
        </p>
        <div class="row">
          <div class="col-6 col-sm-4 col-md-3 my-2">
            <div action="/" class="dropzone dz-clickable" id="my-dropzone">
              <div class="dz-message d-flex flex-column">
                <i class="fa fa-upload" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 my-2">
            <div action="/" class="dropzone dz-clickable" id="my-dropzone">
              <div class="dz-message d-flex flex-column">
                <i class="fa fa-upload" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 my-2">
            <div action="/" class="dropzone dz-clickable" id="my-dropzone">
              <div class="dz-message d-flex flex-column">
                <i class="fa fa-upload" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 my-2">
            <div action="/" class="dropzone dz-clickable" id="my-dropzone">
              <div class="dz-message d-flex flex-column">
                <i class="fa fa-upload" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>

        <p class="px-0 py-2">
          Maximum of 4mb for each
        </p>

      </div>



      <div class="form-buttons d-flex flex-column flex-md-row justify-content-center justify-content-md-end">
        <button class="submit btn btn-fml-secondary align-self-center ml-md-3 mb-3 mb-md-0" type="submit" href="{{url('verification2')}}">
          Next
      </div>
    </form>

  </div>

@push('scripts');

<script src="{{asset('js/bootstrap-js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap-js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap-js/popper.js')}}"></script>
<script src="{{asset('js/custom-js/dropzone.js')}}"></script>
<script src="{{asset('js/custom-js/verification-upload-address.js')}}"></script>
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
