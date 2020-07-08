@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/benefits.css')}}">
@endpush


@section('content')


    <!-- Benefits section-->
    <section class="benefits" id="benefits">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h1>Benefits</h1>
                </div>
            </div>
            <div class="row">
                <div class="benefit-content">
                    <div class="box">
                        <div class="icon"><i class="fa fa-laptop"></i></div>
                        <h5>Get Funding</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga reiciendis voluptates rem tenetur minus officiis similique eius odio perspiciatis nemo.
                        </p>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-code"></i></div>
                        <h5>Advance your Career</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos deleniti pariatur necessitatibus, ipsum quam eveniet ut officia tenetur voluptates corporis. Vel sit reiciendis dolorum magnam.
                        </p>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fas fa-palette"></i></div>
                        <h5>Unbeatable Payback plan</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia omnis impedit non alias sapiente aliquam eum quia, sunt natus fuga.
                        </p>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fas fa-wallet"></i></div>
                        <h5>Get Sponsors</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem debitis iste illo excepturi nesciunt saepe inventore dolorem, voluptatem doloremque, aperiam.
                        </p>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-mobile"></i></div>
                        <h5>Fund your passion</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo est doloribus accusamus. Iste excepturi assumenda suscipit quia, cumque hic voluptate illum, officiis saepe impedit, maxime non quis ut nisi nostrum.
                        </p>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-rocket"></i></div>
                        <h5>Endorse Friends</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore illo earum, velit ullam esse? Cum voluptates, in suscipit voluptas enim.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Benefactors -->
    <section class="benefactor">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h1>benefactors</h1>
                </div>
            </div>
            <div class="row">
                <div class="benefactor-content">
                    <div class="benefactor-box">
                        <div class="benefactor-img">
                            <div class="test-img">
                                <img src="../img/Ellipse_43.png" />
                            </div>
                            <div class="benefactor-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, aliquam. Corrupti molestias quae culpa accusamus magni accusantium itaque dolore soluta.</p>
                                <h6>John Doe</h6>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                        <div class="benefactor-img">
                            <div class="test-img">
                                <img src="../img/Ellipse_47.png" />
                            </div>
                            <div class="benefactor-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, aliquam. Corrupti molestias quae culpa accusamus magni accusantium itaque dolore soluta.</p>
                                <h6>Ryan Doe</h6>
                                <p>React Enthusiast</p>
                            </div>
                        </div>
                        <div class="benefactor-img">
                            <div class="test-img">
                                <img src="../img/Ellipse_48.png" />
                            </div>
                            <div class="benefactor-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, aliquam. Corrupti molestias quae culpa accusamus magni accusantium itaque dolore soluta.</p>
                                <h6>Jane Doe</h6>
                                <p>Front-End Developer</p>
                            </div>
                        </div>
                        <div class="benefactor-img">
                            <div class="test-img">
                                <img src="../img/Ellipse_44.png" />
                            </div>
                            <div class="benefactor-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, aliquam. Corrupti molestias quae culpa accusamus magni accusantium itaque dolore soluta.</p>
                                <h6>Kyle Doe</h6>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
