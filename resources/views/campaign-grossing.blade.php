@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/campaign-grossing.css')}}">
@endpush


@section('content')

    <main>
        <div class="container-fluid">
            <div class="page-links">
                <a href="">Home</a> <span>/</span>
                <a href="">Campaigns Page</a> <span>/</span>
                <a href="" class="text-primary">Campaign grossing</a>
            </div>
        </div>
        <div class="container-fluid campaign_gross_heading">
            <div class="heading">
                <h2>Discover Campaign Grossings</h2>
                <p>Take a glimpse of how much has been raised for various campaigns</p>
            </div>

        </div>
        <div class="container">
            <div class="card-deck grossings">
                <div class="row mb-4">
                    <div class="card gross">
                        <div class="profile_title">
                            <div class="profile_image_container">
                                <img src="../img/janePix.png" alt="" />
                            </div>
                            <p class="subdetail">Jane Doe</p>
                        </div>
                        <div class="description">
                            <a href="">Fund Jane Doe's laptop Purchase</a>
                            <p class="description_text">
                                I run a small freelancing business in the heart of Lagos.  My former
                                laptop finally packed up after several attempts at refurbishing it,
                                I would like a loan to get a new laptop to continue my business...
                            </p>
                            <p class="no_of_recommmendations">
                                7 successsful recommendations
                            </p>
                        </div>
                        <div class="amount_raised">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>N170,000 raised of N250,000</p>
                        </div>
                    </div>

                    <div class="card gross">
                        <div class="profile_title">
                            <div class="profile_image_container">
                                <img src="../img/profileImage1.png" alt="" />
                            </div>
                            <p class="subdetail">John Doe</p>
                        </div>
                        <div class="description">
                            <a href="">Fund John Doe's laptop Purchase</a>
                            <p class="description_text">
                                I run a small freelancing business in the heart of Lagos.  My former
                                laptop finally packed up after several attempts at refurbishing it,
                                I would like a loan to get a new laptop to continue my business...
                            </p>
                            <p class="no_of_recommmendations">
                                7 successsful recommendations
                            </p>
                        </div>
                        <div class="amount_raised">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>N200,000 raised of N250,000</p>
                        </div>
                    </div>

                    <div class="card gross">
                        <div class="profile_title">
                            <div class="profile_image_container">
                                <img src="../img/janePix.png" alt="" />
                            </div>
                            <p class="subdetail">Sophia Doyle</p>
                        </div>
                        <div class="description">
                            <a href="">Fund Sophia Doyle's laptop Purchase</a>
                            <p class="description_text">
                                I run a small freelancing business in the heart of Lagos.  My former
                                laptop finally packed up after several attempts at refurbishing it,
                                I would like a loan to get a new laptop to continue my business...
                            </p>
                            <p class="no_of_recommmendations">
                                9 successsful recommendations
                            </p>
                        </div>
                        <div class="amount_raised">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>N140,000 raised of N450,000</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="card gross">
                        <div class="profile_title">
                            <div class="profile_image_container">
                                <img src="../img/unledoePix.png" alt="" />
                            </div>
                            <p class="subdetail">Brian Doe</p>
                        </div>
                        <div class="description">
                            <a href="">Fund Brain Doe's laptop Purchase</a>
                            <p class="description_text">
                                I run a small freelancing business in the heart of Lagos.  My former
                                laptop finally packed up after several attempts at refurbishing it,
                                I would like a loan to get a new laptop to continue my business...
                            </p>
                            <p class="no_of_recommmendations">
                                5 successsful recommendations
                            </p>
                        </div>
                        <div class="amount_raised">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>N100,000 raised of N250,000</p>
                        </div>
                    </div>

                    <div class="card gross">
                        <div class="profile_title">
                            <div class="profile_image_container">
                                <img src="../img/janetPix.png" alt="" />
                            </div>
                            <p class="subdetail">Janet Doyle</p>
                        </div>
                        <div class="description">
                            <a href="">Fund Janet Doyle's laptop Purchase</a>
                            <p class="description_text">
                                I run a small freelancing business in the heart of Lagos.  My former
                                laptop finally packed up after several attempts at refurbishing it,
                                I would like a loan to get a new laptop to continue my business...
                            </p>
                            <p class="no_of_recommmendations">
                                10 successsful recommendations
                            </p>
                        </div>
                        <div class="amount_raised">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>N175,500 raised of N350,000</p>
                        </div>
                    </div>

                    <div class="card gross">
                        <div class="profile_title">
                            <div class="profile_image_container">
                                <img src="../img/janePix.png" alt="" />
                            </div>
                            <p class="subdetail">Janet Doe</p>
                        </div>
                        <div class="description">
                            <a href="">Fund Janet Doe's laptop Purchase</a>
                            <p class="description_text">
                                I run a small freelancing business in the heart of Lagos.  My former
                                laptop finally packed up after several attempts at refurbishing it,
                                I would like a loan to get a new laptop to continue my business...
                            </p>
                            <p class="no_of_recommmendations">
                                7 successsful recommendations
                            </p>
                        </div>
                        <div class="amount_raised">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>N10,000 raised of N150,000</p>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="..." class="pagination-container">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </main>


@endsection
