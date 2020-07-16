@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/blog.css')}}">
@endpush


@section('content')

    <div class="container mt-5 pt-5">
        <h1 class="text-center">Recent News</h1>
        <p class="text-center">Read through our Blog</p>
        <div class="row">
        @if(count($blogs) > 0)
            @foreach($blogs as $blog) 
                <div class="col-md-4">
                    <div class="single-blog">
                        <p class="blog-meta">By Admin<span>{{ date('F d, Y', strtotime($blog->created_at)) }}</span></p>
                        <img src="{{ $blog->image }}">
                        <h2><a href="blog/{{ $blog->id }}">{{ $blog->title }}</a></h2>
                        <p class="blog-text">{{ $blog->post }}</p>
                        <p><a href="blog/{{ $blog->id }}" class="read-more-btn">Read More</a>
                        </p>
                    </div>
                </div>
            @endforeach
        @else
            <p> No blog found </p>
        @endif
        </div>
    </div>
@endsection
