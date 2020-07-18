@extends('layout.app')
 
 @push('styles')
     <link rel="stylesheet" href="{{asset('css/custom-css/about.css')}}">
 @endpush
 
 @section('content')
     <div class="container">
        <ol class="f-12 mt-5 breadcrumb" style="background:none;">
          <li class="breadcrumb-item"><a class="pcolor" href="#">Home</a></li>
          <li class="breadcrumb-item active text-dark"><a class="pcolor" href="#"><b>About FundMyLaptop</b></a></li>
        </ol>
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-5 my-5">
                <h1>We connect <span>investors</span> and interns</h1>
                <p>FundMylaptop is a platform where people who are willing to invest in tech talent get connected to
                    individuals who are in need of funds for a laptop purchase or repair. This platform is not just
                    connecting individuals, it is also breaking barriers and constraints of the tech industry.</p>
            </div>
            <div class="col-md-8 col-sm-12 mb-5 my-5">
                 <img src="../img/abt1.png" alt="image one" class="img-fluid abt-img">
            </div>
        </div>
 
 
        <!--Row 3-->
        <div class="row flex-md-row-reverse mb-5">
            <div class="col-md-6 my-auto">
                <!--Inner row-->
                <div class="row mb-4">
                    <div class="col-sm-10 mb-5 my-5">
                        <h1>Helping <span>You</span> achieve that goal</h1>
                        <p>We don't just connect investors to interns. We are trying to build a community where
                            absolutley no one is left behind in the tech community. Whether you are unable to pursue that tech dream of
                            yours,bcause of lack of funds, MyFundLaptop is the best platform for you to get adequate funding.
                        </p>
                    </div>
                </div>
                <!--End Inner row-->
            </div>
            <div class="col-md-6 mb-5 my-5">
                <img src="../img/abt2.png" alt="image one" class="img-fluid abt-img">
            </div>
        </div>
 
        <!--Row 4-->
        <div class="row mb-5">
            <div class="col-md-6 my-auto">
                <!--Inner row-->
                <div class="row mb-4">
                    <div class="col-sm-10 mb-5 my-5">
                        <h1>Setting <span>Standard</span> Pace</h1>
                        <p>FundMylaptop has a system in place that verifies indivuals who wish to get funded.
                            Verification checks ranges from BVN, KYC checks of fundees, also long-time reliable fundees vouch for new,
                            incomingfundees.</p>
                    </div>
                </div>
                <!--End Inner row..-->
            </div>
            <div class="col-md-6 mb-5 my-5">
               <img src="../img/abt3.png" alt="image one" class="img-fluid abt-img">
            </div>
        </div>
 
         <div class="container text-center my-5">
             <h3 class="my-5">Join other investors on Fund My Laptop</h3>
             <div><a href="{{ url('investee-dashboard') }}" class="start-btn btn btn-secondary btn-lg align-self-center mb-5">Start funding</a></div>
         </div>
     </div>
 @endsection