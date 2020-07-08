@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/album.css')}}">
@endpush


@section('content')

    <main id="main">
        <section class="header">
            <div class="container">
                <div id="titi" class="mb-4 mt-5 pt-5 d-flex justify-content-center text-center align-center">
                    <h3> How can we help you </h3>
                </div>
                <div class="form mb-4">
                    <form>
                        <div class="search-bar">
                            <input type="text" class="form-control " placeholder="Describe your issue...">
                            <i class="fa fa-search "></i>
                        </div>
                    </form>
                </div>

                <div class="text-center mt-4">
                    <p class="lead"> You can also browse the topics below to find what you're looking for</p>
                </div>
            </div>
        </section>

        <section id="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 mt-5">
                        <aside>

                            <ul class="list-unstyled ">
                                <li class="list-item row">
                                    <header> Getting Started</header>
                                    <i class="fa fa-chevron-right d-lg-none ml-auto"></i>
                                </li>
                                <li class="list-item row">
                                    <a href=""> Funding </a>
                                    <i class="fa fa-chevron-right  d-lg-none ml-auto inactive"></i>
                                </li>
                                <li class="list-item row">
                                    <a href=""> Menu III </a>
                                    <i class="fa fa-chevron-right  d-lg-none ml-auto inactive"></i>
                                </li>
                                <li class="list-item row">
                                    <a href=""> Menu IV </a>
                                    <i class="fa fa-chevron-right  d-lg-none ml-auto inactive"></i>
                                </li>
                                <li class="list-item row">
                                    <a href=""> Menu V </a>
                                    <i class="fa fa-chevron-right d-lg-none ml-auto inactive"></i>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-md-9 col-lg-9">
                        <div  id="titi">
                            <h3> Getting Started</h3>
                        </div>

                        <div class="my-5">
                            <div id="accordion" class="accordion">
                                <div class="card mb-0">
                                    <div class="card-header bg-fml-primary collapsed" data-toggle="collapse" href="#fund1">
                                        <a class="card-title">
                                            What is FundMy<span class="text-fml-secondary">Laptop</span> and how does it work ?
                                        </a>
                                    </div>
                                    <div id="fund1" class="card-body border rounded-bottom collapse" data-parent="#accordion" >
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Repellendus vitae velit inventore natus ratione eligendi sit dicta tempore,
                                            numquam similique, iste esse odit necessitatibus ut? Aliquid ipsum quo iure nesciunt.
                                        </p>
                                    </div>
                                </div>

                                <div class="my-5">
                                    <div id="accordion" class="accordion">
                                        <div class="card mb-0">
                                            <div class="card-header bg-fml-primary collapsed" data-toggle="collapse" href="#fund2">
                                                <a class="card-title">
                                                    In what countries can i apply for a laptop ?
                                                </a>
                                            </div>
                                            <div id="fund2" class="card-body collapse  border rounded-bottom" data-parent="#accordion" >
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Repellendus vitae velit inventore natus ratione eligendi sit dicta tempore,
                                                    numquam similique, iste esse odit necessitatibus ut? Aliquid ipsum quo iure nesciunt.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="my-5">
                                            <div id="accordion" class="accordion">
                                                <div class="card mb-0">
                                                    <div class="card-header bg-fml-primary collapsed" data-toggle="collapse" href="#fund3">
                                                        <a class="card-title">
                                                            Question III ?
                                                        </a>
                                                    </div>
                                                    <div id="fund3" class="card-body border rounded-bottom collapse" data-parent="#accordion" >
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Repellendus vitae velit inventore natus ratione eligendi sit dicta tempore,
                                                            numquam similique, iste esse odit necessitatibus ut? Aliquid ipsum quo iure nesciunt.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="my-5">
                                                    <div id="accordion" class="accordion">
                                                        <div class="card mb-0">
                                                            <div class="card-header bg-fml-primary collapsed" data-toggle="collapse" href="#fund4">
                                                                <a class="card-title">
                                                                    Question IV ?
                                                                </a>
                                                            </div>
                                                            <div id="fund4" class="card-body collapse" data-parent="#accordion" >
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Repellendus vitae velit inventore natus ratione eligendi sit dicta tempore,
                                                                    numquam similique, iste esse odit necessitatibus ut? Aliquid ipsum quo iure nesciunt.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        </section>

        <section class="col cta">
            <div class="mx-auto text-center">
                <h4> Looking for Something Else ?</h4>
                <button class="btn btn-fml-secondary btn-faq"> Contact Us <i class="fa fa-chevron-right"></i></button>
            </div>
        </section>
    </main>

@endsection
