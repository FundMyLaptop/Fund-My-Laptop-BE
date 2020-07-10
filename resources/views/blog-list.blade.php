@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/blog-list.css')}}">
@endpush


@section('content')

    <section class="blog-main container mt-5">

    @if(count($blogs) > 1)
        @foreach($blogs as $blog)
        <article class="row pb-5 justify-content-between">
            <div class="article-image col-md-4 order-md-2">
                <img src="{{$blog->image}}" class="d-block w-100 border rounded" />
            </div>
            <div class="article-info col-md-7 order-md-1">
                <div class="article-meta">
                    <p><a href="blog/urlencode({{$blog->title}})" class="font-weight-bold text-dark">{{$blog->category}} </a>- {{$blog->created_at}}</p>
                </div>
                <h1 class="article-title font-weight-bold">
                    <a href="blog/urlencode({{$blog->title}})" class="text-dark">{{$blog->title}}</a>
                </h1>
                <p class="article-desc">
                    {{str_split($blog->post,20)[0]}}
                </p>
            </div>
        </article>
        @endforeach
        {{$blogs->links()}}
    @else
        <p> No blog found </p>
    @endif


       
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
