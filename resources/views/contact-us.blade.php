@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/contact-us.css')}}">
@endpush


@section('content')

    <div class="nav-container container-fluid shadow-sm">
        <nav class="navbar nav-top navbar-expand-md navbar-light container-md px-0">
            <a class="navbar-brand" href="#">
            <img src="../img/layer1.png" />
            </a>
            <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item">
                <a class="nav-link px-4 font-weight-bold" href="#">Lend</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-4 font-weight-bold" href="#">Borrow</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-4 font-weight-bold" href="#">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link pl-md-4 font-weight-bold" href="#">
                    <button class="btn btn-fml-secondary px-4">
                    Login
                    </button>
                </a>
                </li>
            </ul>
            </div>
        </nav>
    </div>

    <main class="container-fluid px-0">
    <div class="top-image">
        <img class="top-image__title" src="../img/contact-text.svg" alt="">
        <p class="top-image__text">Feel free to contact us anytime. We will get back to you as soon as possiblle</p>
    </div>
    <section class="back-wrap">
        <div class="row container-fluid mx-auto main-wrap">
        <div class="col contact--wrap container-fluid">
            <div class="contact--wrap-1">
            <div class="py-2 contact-item d-flex align-items-center mb-4">
                <img class="mx-4" src="../img/call-icon.svg" alt="">
                <div class="contact-item__group">
                <p class="contact-item__title mb-0">Phone Number</p>
                <span class="contact-item__num">(+234) 81 770 47279 </span>
                </div>
            </div>
            <div class="py-2 contact-item nth-3 d-flex align-items-center mb-4">
                <img class="mx-4" src="../img/email-icon.svg" alt="">
                <div class="contact-item__group">
                <p class="contact-item__title mb-0">Email Address</p>
                <span class="contact-item__num">example@gmail.com</span>
                </div>
            </div>
            </div>
            <div class="contact--wrap-2">
            <div class="py-2 contact-item d-flex align-items-center mb-4">
                <img class="mx-4" src="../img/location-icon.svg" alt="">
                <div class="contact-item__group">
                <p class="contact-item__title mb-0">Location</p>
                <span class="contact-item__num">Plot 1, Awolowo Way, Ikeja, Lagos</span>
                </div>
            </div>
            <div class="py-2 contact-item d-flex align-items-center justify-content-between px-4">
                <a href="#"><img class="my-1" src="../img/facebook-icon.svg" alt=""></a>
                <a href="#"><img class="my-1" src="../img/instagram-icon.svg" alt=""></a>
                <a href="#"><img class="my-1" src="../img/twitter-icon.svg" alt=""></a>
                <a href="#"><img class="my-1" src="../img/linkedin-icon.svg" alt=""></a>
            </div>
            </div>
        </div>
        <div class="col px-0">
            <div class="container px-0 form--wrap">
            <div class="form--case">
                <div>
                <p class="contact-item__title">Send a Message</p>
                <span class="contact-item__num">Do you have anything you want to tell us? Get in touch with us today.</span>
                </div>
                <form class="form-field">
                <div class="row m-0 d-flex justify-content-between">
                    <div class="form-group form-item--input">
                    <label for="exampleFormControlInput1">Full Name</label>
                    <input type="text" class="contact-item__num py-4 form-control" id="exampleFormControlInput1" placeholder="Input full name">
                    </div>
                    <div class="form-group form-item--input">
                    <label for="exampleFormControlInput1">Email Address</label>
                    <input type="email" class="contact-item__num py-4 form-control" id="exampleFormControlInput1" placeholder="Input email">
                    </div>
                </div>
                <div class="row m-0 d-flex justify-content-between">
                    <div class="form-group form-item--input">
                    <label for="exampleFormControlInput1">Phone Number</label>
                    <input type="phone" class="contact-item__num py-4 form-control" id="exampleFormControlInput1" placeholder="Input phone number">
                    </div>
                    <div class="form-group form-item--input">
                    <label for="exampleFormControlInput1">Subject</label>
                    <input type="text" class="contact-item__num py-4 form-control" id="exampleFormControlInput1" placeholder="Input subject">
                    </div>
                </div>
                <div class="form-group w-100">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="pt-3 form-item--text-area contact-item__num form-control" id="exampleFormControlTextarea1" rows="" placeholder="Input message"></textarea>
                </div>
                <button class="form-submit" type="submit">Send Message</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </section>
    </main>

@endsection