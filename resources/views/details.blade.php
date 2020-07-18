@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/FML_LandingPage.css')}}">
@endpush

@section('content')

@php
    $amountFunded = $request->transaction()->where('status','success')->get()->sum->amount;
    $percentage = intval(($amountFunded * 100) / $request->amount);
@endphp

<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 <h4 class='text-danger'>Details of <i>{{$request->user->firstName}}</i></h4>
                </div>
                <div class="card-body">
                <span class='card-subtitle'>{{$request->title}}</span><br>

                <p class='card-text mt-4'>{{$request->description}}</p>

                <div class="progress">
                    <div class="progress-bar" id='card-progress-bar' role="progressbar" style="width: {{ $percentage }}%;"
                        aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between mt-3 mb-2">
                    <span class="card-price">
                        N{{ number_format($amountFunded) }}
                    </span>
                    <span class="card-progress-num">
                        {{ $percentage }}%
                    </span>
                </div>
                <span class="card-fonds">
                    Raised of N{{ number_format($request->amount) }}
                </span>
                <br>
                    <span style='font-weight:bold;font-size:16px;'>Account Status:</span> <span class='card-subtitle text-danger'>{{$request->isActive}}</span><br>
                    <span style='font-weight:bold;font-size:16px;'>Email:</span> <span class='card-subtitle'>{{$request->user->email}}</span><br>
                    <span style='font-weight:bold;font-size:16px;'>Mobile:</span> <span class='card-subtitle'>{{$request->user->phone}}</span>
                    <hr>
                    <p class="lead">Posted {{$request->created_at->diffForHumans()}}</p>

                    <a href="/" class='btn btn-outline-primary'>Go Back</a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
