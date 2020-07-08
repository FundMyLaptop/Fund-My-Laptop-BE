@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/album.css')}}">
@endpush


@section('content')

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1>Album</h1>
                <p class="lead text-muted">Gallery from interns meet up.</p>
                <p>

                    <a href="#" class="btn btn-danger btn-primary my-2">Suggest Meet Up</a>
                    <a href="#" class="btn btn-secondary my-2">Join Meet Up</a>
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="{{asset('img/topview-laptop.jpg')}}" alt="album" height="225" width="100%">
                            <div class="card-body">
                                <h3 class="card-title">Meet Up 1</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia ligula at odio aliquet porttitor. In lectus felis, mollis vitae imperdiet quis, bibendum a magna. Suspendisse a orci est. Nullam facilisis efficitur posuere. Etiam gravida venenatis odio, quis mollis lorem fringilla ut. Nunc vel ante vitae tortor sodales interdum at non dolor. Morbi consectetur pretium enim ut faucibus. Quisque porta id quam vel gravida. Suspendisse in mi interdum, ullamcorper purus at, iaculis erat. In hac habitasse platea dictumst. Maecenas sit amet dapibus eros. Maecenas tristique ullamcorper lorem, ultricies vestibulum magna volutpat et. Integer sagittis egestas ve
                                    lit, vel feugiat nisi finibus vel. Phasellus a urna at magna laoreet accumsan vel quis lacus. Praesent quis accumsan sem. Nulla venenatis auctor eleifend.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Read More</button>

                                    </div>
                                    <small class="text-muted">4 weeks ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="../img/topview-laptop.jpg" alt="album" height="225" width="100%">
                            <div class="card-body">
                                <h3 class="card-title">Meet Up 2</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia ligula at odio aliquet porttitor. In lectus felis, mollis vitae imperdiet quis, bibendum a magna. Suspendisse a orci est. Nullam facilisis efficitur posuere. Etiam gravida venenatis odio, quis mollis lorem fringilla ut. Nunc vel ante vitae tortor sodales interdum at non dolor. Morbi consectetur pretium enim ut faucibus. Quisque porta id quam vel gravida. Suspendisse in mi interdum, ullamcorper purus at, iaculis erat. In hac habitasse platea dictumst. Maecenas sit amet dapibus eros. Maecenas tristique ullamcorper lorem, ultricies vestibulum magna volutpat et. Integer sagittis
                                    egestas velit, vel feugiat nisi finibus vel. Phasellus a urna at magna laoreet accumsan vel quis lacus. Praesent quis accumsan sem. Nulla venenatis auctor eleifend.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Read More</button>

                                    </div>
                                    <small class="text-muted">8 weeks ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="{{asset('img/topview-laptop.jpg')}}" alt="album" height="225" width="100%">
                            <div class="card-body">
                                <h3 class="card-title">Meet Up 3</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia ligula at odio aliquet porttitor. In lectus felis, mollis vitae imperdiet quis, bibendum a magna. Suspendisse a orci est. Nullam facilisis efficitur posuere. Etiam gravida venenatis odio, quis mollis lorem fringilla ut. Nunc vel ante vitae tortor sodales interdum at non dolor. Morbi consectetur pretium enim ut faucibus. Quisque porta id quam vel gravida. Suspendisse in mi interdum, ullamcorper purus at, iaculis erat. In hac habitasse platea dictumst. Maecenas sit amet dapibus eros. Maecenas tristique ullamcorper lorem, ultricies vestibulum magna volutpat et. Integer sagittis egestas velit,
                                    vel feugiat nisi finibus vel. Phasellus a urna at magna laoreet accumsan vel quis lacus. Praesent quis accumsan sem. Nulla venenatis auctor eleifend.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Read More</button>

                                    </div>
                                    <small class="text-muted">12 weeks ago</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="{{asset('img/topview-laptop.jpg')}}" alt="album" height="225" width="100%">
                            <div class="card-body">
                                <h3 class="card-title">Meet Up 4</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia ligula at odio aliquet porttitor. In lectus felis, mollis vitae imperdiet quis, bibendum a magna. Suspendisse a orci est. Nullam facilisis efficitur posuere. Etiam gravida venenatis odio, quis mollis lorem fringilla ut. Nunc vel ante vitae tortor sodales interdum at non dolor. Morbi consectetur pretium enim ut faucibus. Quisque porta id quam vel gravida. Suspendisse in mi interdum, ullamcorper purus at, iaculis erat. In hac habitasse platea dictumst. Maecenas sit amet dapibus eros. Maecenas tristique ullamcorper lorem, ultricies vestibulum magna volutpat et. Integer sagittis egestas velit,
                                    vel feugiat nisi finibus vel. Phasellus a urna at magna laoreet accumsan vel quis lacus. Praesent quis accumsan sem. Nulla venenatis auctor eleifend.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Read More</button>

                                    </div>
                                    <small class="text-muted">16 weeks ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="{{asset('img/topview-laptop.jpg')}}" alt="album" height="225" width="100%">
                            <div class="card-body">
                                <h3 class="card-title">Meet Up 5</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia ligula at odio aliquet porttitor. In lectus felis, mollis vitae imperdiet quis, bibendum a magna. Suspendisse a orci est. Nullam facilisis efficitur posuere. Etiam gravida venenatis odio, quis mollis lorem fringilla ut. Nunc vel ante vitae tortor sodales interdum at non dolor. Morbi consectetur pretium enim ut faucibus. Quisque porta id quam vel gravida. Suspendisse in mi interdum, ullamcorper purus at, iaculis erat. In hac habitasse platea dictumst. Maecenas sit amet dapibus eros. Maecenas tristique ullamcorper lorem, ultricies vestibulum magna volutpat et. Integer sagittis egestas velit,
                                    vel feugiat nisi finibus vel. Phasellus a urna at magna laoreet
                                    accumsan vel quis lacus. Praesent quis accumsan sem. Nulla venenatis auctor eleifend.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Read More</button>

                                    </div>
                                    <small class="text-muted">3 months ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="{{asset('img/topview-laptop.jpg')}}" alt="album" height="225" width="100%">
                            <div class="card-body">
                                <h3 class="card-title">Meet Up 6</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nulla lacinia ligula at odio aliquet porttitor. In lectus felis, mollis vitae imperdiet quis, bibendum a magna. Suspendisse a orci est. Nullam facilisis efficitur posuere. Etiam gravida venenatis odio, quis mollis lorem fringilla ut. Nunc vel ante vitae tortor sodales interdum at non dolor. Morbi consectetur pretium enim ut faucibus. Quisque porta id quam vel gravida. Suspendisse in mi interdum, ullamcorper purus at, iaculis erat. In hac habitasse platea dictumst. Maecenas sit amet dapibus eros. Maecenas tristique ullamcorper lorem, ultricies vestibulum magna volutpat et. Integer sagittis egestas velit,
                                    vel feugiat nisi finibus vel. Phasellus a urna at magna laoreet accumsan vel quis lacus. Praesent quis accumsan sem. Nulla venenatis auctor eleifend.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>

                                    </div>
                                    <small class="text-muted">5 months ago</small>
                                </div>
                            </div>
                        </div>
                    </div>



    </main>


@endsection
