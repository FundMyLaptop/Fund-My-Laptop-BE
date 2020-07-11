@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/campaign.css')}}">
@endpush

@section('content')
    <!-- Pleading for fund title -->
    <div class="container pleading_funding">
        <div class="row">
            <div class="page-links">
                <a href="">Home</a> <span>/</span>
                <a href="" class="text-primary">Unfunded Campaigns</a>
            </div>
        </div>

        <table class='table table-bordered table-striped'>
            <tr  style='background-color:tomato;color:white;'>
                <th>ID</th>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>ADDRESS</th>
                <th>STATUS</th>
            </tr>
            @foreach ($unattendedFundingRequests as $unattendedFundingRequest )
                <tr>
                    <td>{{$unattendedFundingRequest->id}}</td>
                    <td>{{$unattendedFundingRequest->user->firstName}}</td>
                    <td>{{$unattendedFundingRequest->user->lastName}}</td>
                    <td>{{$unattendedFundingRequest->user->email}}</td>
                    <td>{{$unattendedFundingRequest->user->phone}}</td>
                    <td>{{$unattendedFundingRequest->user->address}}</td>
                    <td><button class='btn btn-danger'>{{$unattendedFundingRequest->isFunded}}</button></td>
                </tr>
            @endforeach
        </table>
        <div class="container">
            <div class="row">
                    <div class="col-md-9 offset-4">
                        {{$unattendedFundingRequests->links()}}
                    </div>
            </div>
        </div>
    </div>


@endsection
