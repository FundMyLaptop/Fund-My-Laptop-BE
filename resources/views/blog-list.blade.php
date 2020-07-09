@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/blog-list.css')}}">
@endpush


@section('content')

    <section class="blog-main container mt-5">
        <article class="row pb-5 justify-content-between">
            <div class="article-image col-md-4 order-md-2">
                <img src="../img/404.png" class="d-block w-100 border rounded" />
            </div>
            <div class="article-info col-md-7 order-md-1">
                <div class="article-meta">
                    <p><a href="#" class="font-weight-bold text-dark">Business </a>- July 1st, 2020</p>
                </div>
                <h1 class="article-title font-weight-bold">
                    <a href="blog-read.html" class="text-dark">If I survive HNGI, I can survive any tech-work-life</a>
                </h1>
                <p class="article-desc">
                    This is an article based on the frivoluos party life style of the
                    internal space-ship in the american floss of heirarchy
                </p>
            </div>
        </article>
        <article class="row pb-5 justify-content-between">
            <div class="article-image col-md-4 order-md-2">
                <img src="../img/404.png" class="d-block w-100 border rounded" />
            </div>
            <div class="article-info col-md-7 order-md-1">
                <div class="article-meta">
                    <p><a href="#" class="font-weight-bold text-dark">Business </a>- July 1st, 2020</p>
                </div>
                <h1 class="article-title font-weight-bold">
                    <a href="blog-read.html" class="text-dark">If I survive HNGI, I can survive any tech-work-life</a>
                </h1>
                <p class="article-desc">
                    This is an article based on the frivoluos party life style of the
                    internal space-ship in the american floss of heirarchy
                </p>
            </div>
        </article>
        <article class="row pb-5 justify-content-between">
            <div class="article-image col-md-4 order-md-2">
                <img src="../img/404.png" class="d-block w-100 border rounded" />
            </div>
            <div class="article-info col-md-7 order-md-1">
                <div class="article-meta">
                    <p><a href="#" class="font-weight-bold text-dark">Business </a>- July 1st, 2020</p>
                </div>
                <h1 class="article-title font-weight-bold">
                    <a href="blog-read.html" class="text-dark">If I survive HNGI, I can survive any tech-work-life</a>
                </h1>
                <p class="article-desc">
                    This is an article based on the frivoluos party life style of the
                    internal space-ship in the american floss of heirarchy
                </p>
            </div>
        </article>
        <article class="row pb-5 justify-content-between">
            <div class="article-image col-md-4 order-md-2">
                <img src="../img/404.png" class="d-block w-100 border rounded" />
            </div>
            <div class="article-info col-md-7 order-md-1">
                <div class="article-meta">
                    <p><a href="#" class="font-weight-bold text-dark">Business </a>- July 1st, 2020</p>
                </div>
                <h1 class="article-title font-weight-bold">
                    <a href="blog-read.html" class="text-dark">If I survive HNGI, I can survive any tech-work-life</a>
                </h1>
                <p class="article-desc">
                    This is an article based on the frivoluos party life style of the
                    internal space-ship in the american floss of heirarchy
                </p>
            </div>
        </article>
        <article class="row pb-5 justify-content-between">
            <div class="article-image col-md-4 order-md-2">
                <img src="../img/404.png" class="d-block w-100 border rounded" />
            </div>
            <div class="article-info col-md-7 order-md-1">
                <div class="article-meta">
                    <p><a href="#" class="font-weight-bold text-dark">Business </a>- July 1st, 2020</p>
                </div>
                <h1 class="article-title font-weight-bold">
                    <a href="blog-read.html" class="text-dark">If I survive HNGI, I can survive any tech-work-life</a>
                </h1>
                <p class="article-desc">
                    This is an article based on the frivoluos party life style of the
                    internal space-ship in the american floss of heirarchy
                </p>
            </div>
        </article>
        <article class="row pb-5 justify-content-between">
            <div class="article-image col-md-4 order-md-2">
                <img src="../img/404.png" class="d-block w-100 border rounded" />
            </div>
            <div class="article-info col-md-7 order-md-1">
                <div class="article-meta">
                    <p><a href="#" class="font-weight-bold text-dark">Business </a>- July 1st, 2020</p>
                </div>
                <h1 class="article-title font-weight-bold">
                    <a href="blog-read.html" class="text-dark">If I survive HNGI, I can survive any tech-work-life</a>
                </h1>
                <p class="article-desc">
                    This is an article based on the frivoluos party life style of the
                    internal space-ship in the american floss of heirarchy
                </p>
            </div>
        </article>
        <nav aria-label="Blog pages">
            <ul class="pagination mx-auto justify-content-center mb-5 border-none">
                <li class="page-item"><a class="page-link">1</a></li>
                <li class="page-item"><a class="page-link">2</a></li>
                <li class="page-item"><a class="page-link">3</a></li>
            </ul>
        </nav>
    </section>

    <section class="row mx-0 blog-subscribe justify-content-center mb-5">
        <div class="col-md-7 rounded bg-fml-accent py-5 text-center">
            <h2 class="text-white">Get stories like this</h2>
            <p class="text-white">Straight to your inbox the come</p>
            <form-inline>
                <div class="form-group col-md-6 mx-auto">
                    <label for="subscribe" class="sr-only"> Enter your email </label>
                    <input
                        type="text"
                        class="form-control text-dark pl-4 py-4"
                        id="subscribe"
                        placeholder="Enter your email"
                    />
                </div>
                <button type="submit" class="btn btn-dark text-white px-3 py-2">
                    Subscribe
                </button>
            </form-inline>
        </div>
    </section>
@endsection
