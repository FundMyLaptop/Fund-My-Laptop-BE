@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/blog.css')}}">
@endpush


@section('content')

    <div class="container mt-5 pt-5">
        <h1 class="text-center">Recent News</h1>
        <p class="text-center">Read through our Blog</p>
        <div class="row">
            <div class="col-md-4">
                <div class="single-blog">
                    <p class="blog-meta">By Admin<span>July 1, 2020</span></p>
                    <img src="../img/blog1.jpg">
                    <h2><a href="#">Why choose FundMyLaptop</a></h2>
                    <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <p><a href="" class="read-more-btn">Read More</a>

                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="single-blog">
                    <p class="blog-meta">By Admin<span>July 1, 2020</span></p>
                    <img src="../img/blog2.jpg">
                    <h2><a href="#">Why choose FundMyLaptop</a></h2>
                    <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <p><a href="" class="read-more-btn">Read More</a>

                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="single-blog">
                    <p class="blog-meta">By Admin<span>July 1, 2020</span></p>
                    <img src="../img/blog3.jpg">
                    <h2><a href="#">Why choose FundMyLaptop</a></h2>
                    <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <p><a href="" class="read-more-btn">Read More</a>

                    </p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="single-blog">
                    <p class="blog-meta">By Admin<span>July 1, 2020</span></p>
                    <img src="../img/blog3.jpg">
                    <h2><a href="#">Why choose FundMyLaptop</a></h2>
                    <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <p><a href="" class="read-more-btn">Read More</a>

                    </p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="single-blog">
                    <p class="blog-meta">By Admin<span>July 1, 2020</span></p>
                    <img src="../img/blog1.jpg">
                    <h2><a href="#">Why choose FundMyLaptop</a></h2>
                    <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <p><a href="" class="read-more-btn">Read More</a>

                    </p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="single-blog">
                    <p class="blog-meta">By Admin<span>July 1, 2020</span></p>
                    <img src="../img/blog2.jpg">
                    <h2><a href="#">Why choose FundMyLaptop</a></h2>
                    <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <p><a href="" class="read-more-btn">Read More</a>

                    </p>

                </div>
            </div>


        </div>

    </div>
@endsection
