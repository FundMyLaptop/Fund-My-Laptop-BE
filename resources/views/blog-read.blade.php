@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/album.css')}}">
@endpush


@section('content')

    <section class="blog-main container mt-5"></article>
        <article class="row pb-2 col-md-9 align-self-center mx-auto border-bottom mb-5 px-0">
            <nav aria-label="breadcrumb" class="">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item"><a href="#" class="text-fml-secondary">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('blog-list')}}" class="text-fml-secondary">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}... </li>
                </ol>
                
            </nav>
         
            <h1 class="article-read-title font-weight-bold">
                {{$blog->title}}
                
            </h1>
            <div class="article-read-meta">
                
                <p><a class="font-weight-bold text-dark">{{$blog->category}}</a> - {{date("M D, Y",strtotime($blog->created_at))}}</p>
            </div>
            <div class="article-read-image">
                <img src="{{$blog->image}}" class="d-block w-100" />
            </div>
            <section class="article-body mt-4">
                {{$blog->body}}
               

                <div class="blog-share-links col-auto px-0 mt-5">
                    <h6 class="font-weight-bold">Share:</h3>
                        
                        <a href="https://www.addtoany.com/add_to/twitter?linkurl={{urlencode(Request::url())}}">
                            <svg width="29" height="29" class="q"><path d="M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z"></path></svg>
                        </a>
                        <a href="#">
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" class="q"><path d="M5 6.36C5 5.61 5.63 5 6.4 5h16.2c.77 0 1.4.61 1.4 1.36v16.28c0 .75-.63 1.36-1.4 1.36H6.4c-.77 0-1.4-.6-1.4-1.36V6.36z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.76 20.9v-8.57H7.89v8.58h2.87zm-1.44-9.75c1 0 1.63-.65 1.63-1.48-.02-.84-.62-1.48-1.6-1.48-.99 0-1.63.64-1.63 1.48 0 .83.62 1.48 1.59 1.48h.01zM12.35 20.9h2.87v-4.79c0-.25.02-.5.1-.7.2-.5.67-1.04 1.46-1.04 1.04 0 1.46.8 1.46 1.95v4.59h2.87v-4.92c0-2.64-1.42-3.87-3.3-3.87-1.55 0-2.23.86-2.61 1.45h.02v-1.24h-2.87c.04.8 0 8.58 0 8.58z" fill="#fff"></path></svg>
                        </a>
                        <a href="https://www.addtoany.com/add_to/facebook?linkurl={{urlencode(Request::url())}}">
                            <svg width="29" height="29" class="q"><path d="M23.2 5H5.8a.8.8 0 0 0-.8.8V23.2c0 .44.35.8.8.8h9.3v-7.13h-2.38V13.9h2.38v-2.38c0-2.45 1.55-3.66 3.74-3.66 1.05 0 1.95.08 2.2.11v2.57h-1.5c-1.2 0-1.48.57-1.48 1.4v1.96h2.97l-.6 2.97h-2.37l.05 7.12h5.1a.8.8 0 0 0 .79-.8V5.8a.8.8 0 0 0-.8-.79"></path></svg>
                        </a>
                </div>
            </section>
        </article>
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
