@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/recommendation.css')}}">
@endpush

@section('content')
<div class="container mt-5 ">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <h4>Recommender’s form</h4>
            <div class="mt3">
            <span class="bizbut1">1</span>
            <p>Provide Name and Scan ID</p>
            </div>
            <div class="mt3">
            <a href="#"><span class="bizbut2">2</span></a>
            <p>Link Social Accounts</p>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
          <span class="bizbut1">1</span>
          <span class="borderRight leftCol"></span>
          <a href="#"><span class="bizbut2 float-right">2</span></a>
          <div class="form-row mt-5">
              <div class="col-md-6 mb-4 pr-md-3">
                <label for="address">Name </label>
                <input type="text" class="form-control" id="address" placeholder="Name" required="">
              </div>
              <div class="col-md-6 mb-4 pl-md-3">
                <label for="city">Uplaod Scanned ID </label>
                <div class="file-box">
                  <span id="placeholder">Upload Image</span>
                <input type="file" class="form-control custom-file-input" id="firstName" placeholder="Your city" style="color:transparent;" onchange="this.style.color = 'black';" required="">
                  <img id="upload-icon" src="../img/uploadicon.svg" alt="">
                </div>
              </div>
            </div>
        </div>
     </div>
     <div class="form-buttons d-flex flex-column flex-md-row justify-content-center justify-content-md-end">
       <button class="submit btn btn-fml-secondary align-self-center ml-md-3 mb-3 mb-md-0" type="submit">
         Next
     </div>
 </div>


@endsection