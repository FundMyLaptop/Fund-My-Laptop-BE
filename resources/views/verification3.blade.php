@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap-css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-css/verification3footer.css">
    <link rel="stylesheet" href="{{asset('css/custom-css/verification3.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
@endpush

@section('content')
  <div class="verification-title mt-5">
    <h2>Verification</h2>
  </div>

  <div class="line"></div>
  <div class="line3"></div>
  <div class="numbers">
    <span class="number">1</span>
    <span class="number">2</span>
    <span style="background-color:#FB3F5C;" class="number">3</span>
    <span class="number">4</span>
  </div>
  <div class="numbers">
    <span class="number-texts">Residential Address</span>
    <span class="number-texts">Link an Account</span>
    <span class="number-texts">Confirm Identity</span>
    <span class="number-texts">Overview</span>
  </div>
  </br>
  <div class="container">
    <div class="row row-body">
      <div id="images" class="col-md-6">
        <p class="text-heading">Your identification document </br>will help us validate your identity</p>
        <p class="sub-heading">What i should do to confirm my identity?</p>
        <ul class="container-fluid lists">
          <li class="list1">Take a selfie by holding your ID Card</li>
          <li class="list1"><span>Card Cardholder Name on ID Card should match and be visible</span></li>
        </ul>
        <p class="example">Here’s an example :</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img style="width:100%;" src="{{asset('img/Rectangle 322.png')}}" alt="correct">
        <button class="btn-correct">Correct</button>
      </div>

      <div class="col-md-6">
        <img style="width:100%;" src="{{asset('img/Rectangle 323.png')}}" alt="incorrect">
        <button class="btn-incorrect">Incorrect</button>
      </div>
    </div>
  </div>

  <div id="upload" class="container input-group mb-3">
    <input type="text" class="form-control" placeholder="Choose File to upload" aria-label="Email Address" aria-describedby="basic-addon2" style="color: #ffffff; background: #FFFFFF;">
    <div class="input-group-append">
      <span class="input-group-text text-white" id="basic-addon2" style="background: #FB3F5C;"><b>Choose File</b></span>
    </div>
  </div>
  </br>

  <div class="terms-text text-center">
    <p class="click">By clicking submit you are agreeing to </br>
      our Terms and Conditions</p>
  </div>
  </br>
  <div class="button text-center">
    <button class="submit">
      Submit
    </button>
  </div>
  </br>
  </br>
  </br>
  </br>

@push('scripts');

  <script src="https://kit.fontawesome.com/7d4482d100.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endpush

@endsection
