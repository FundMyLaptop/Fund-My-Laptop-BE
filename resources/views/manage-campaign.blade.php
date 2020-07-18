@extends('layout.app')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap-css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-css/manage-campaign.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .fs-13 {
            font-size: 13px !important;
        }

        .fs-14 {
            font-size: 14px !important;
        }

        .fs-20 {
            font-size: 20px;
        }

        .fw-500 {
            font-weight: 500;
        }

        .height-400 {
            height: 400px;
        }

        .height-10 {
            height: 10px;
        }

        .shadow-sm {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1) !important;
        }

        .shadow-light {
            box-shadow: 0px 3px 20px rgba(162, 14, 14, 0.059);
        }

        .shadow-sm-primary {
            z-index: 1;
            box-shadow: 0px 4px 10px #fb3f5ca6;
        }

        .border-rounded-30 {
            border-radius: 30px;
        }

        .laptop-img {
            object-fit: cover;
        }

        .icon {
            width: 12px;
            height: 12px;
        }

        .icon-cancel {
            content: url("/img/cancel.svg");
        }

        .icon-pen {
            content: url("/img/pen.svg");
        }

        .icon-share {
            content: url("/img/share.svg");
        }

        .icon-money-bag {
            content: url("/img/money-bag.svg");
        }

        .fml-primary-color {
            color: #FB3F5C;
        }

        .fml-bg-primary {
            background-color: #FB3F5C;
            color: white;
        }

        .fml-bg-secondary {
            background-color: #FFE0E5;
        }

        .fml-bg-secondary-2 {
            background-color: #fff0f0;
        }

        .fml-bg-secondary-2:hover {
            background-color: #FFE0E5;
        }

        .sign {
            font-size: 20px;
        }

        .dot {
            content: "";
            height: 5px !important;
            width: 5px !important;
            border-radius: 2px;
            margin-bottom: 3px;
            background-color: #FB3F5C;
            display: inline-block;
        }

        @media (max-width: 768px) {
            .width-md-900 {
                width: 900px !important;
            }

            .overflow-x-auto {
                overflow-x: auto;
            }

            .fs-md-14 {
                font-size: 14px;
            }
        }
    </style>
@endpush
@section('content')
    <div class="container mb-4">
        <div class="d-flex justify-content-between py-3 fs-md-14">
            <div class="d-flex align-items-center"><span class="text-secondary pr-2">Main Dashboard</span> <span
                    class="sign fw-500">&gt;</span> <span class="pl-2">Manage Campaign</span></div>
            <div>
                <a href="{{ url('/campaigns/create') }}">
                    <button class="btn fml-bg-primary fs-md-14">Create New Campaign</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="d-md-flex">
                <div class="col-md-6 px-md-3 px-4">
                    <img class="w-100 h-100 laptop-img" src="{{ $campaign->photoURL }}" alt="">
                </div>
                <div class="col-md-6 px-0">
                    <div class="px-4 pt-4">
                        <h1 class="mb-4">{{ $campaign->title }}</h1>
                        <h2 class="">
                            <span class="icon-money-bag pr-2"></span>
                            <span>&#x20a6;{{ number_format($campaign->transaction->sum('amount')) }}</span>
                        </h2>
                        <div class="pt-3 position-relative">
                            <div class="progress border-rounded-30 height-10">
                                <div
                                    class="progress-bar position-absolute border-rounded-30 fml-bg-primary height-10 shadow-sm-primary"
                                    role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="width: {{ round($campaign->transaction->sum('amount') / ($campaign->amount) * (100), 0)}}%; max-width: 100%">
                                </div>
                            </div>
                        </div>
                        <div
                            class="fs-20 pt-2">{{ round($campaign->transaction->sum('amount') / ($campaign->amount) * (100), 0) }}
                            % of &#x20a6;{{ number_format($campaign->amount) }} goal
                        </div>
                        <div class="py-4 fs-20">
                            <div class="fw-500">My Story:</div>
                            <div>
                                {{ $campaign->description }}
                            </div>
                        </div>
                        <div class="d-flex align-items-center fs-20 fs-md-14">
                            <div>
                            <!-- <span class="mx-md-3 mx-2">@if($userDonation > 0) {{$userDonation. ' Donator(s)'}} @else '' @endif </span>
                                <span class="dot"></span> -->
                                <span
                                    class="mr-md-3 mr-2">@if($funder > 0) {{$funder. ' Lender(s)'}} @else {{''}} @endif </span>
                                <!--<span class="dot"></span>
                                <span class="mx-md-3 mx-2">50 Shares</span>-->
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        @if(session('suspend_success'))
                            <div class="alert alert-success mt-4 p-3">{{ session('suspend_success') }}</div>
                        @elseif(session('suspend_error'))
                            <div class="alert alert-danger mt-4 p-3">{{ session('suspend_error') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start flex-column flex-md-row py-3 w-100">
                <div class="mx-3 py-2 py-md-5 text-center">
                    <form action="{{ url('/campaigns/'.$campaign->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn shadow-sm fml-bg-primary align-self-center fs-13"><span>End your campaign</span>
                            <span class="icon icon-cancel ml-2"></span></button>
                    </form>
                </div>
                <div class="mx-3 py-2 py-md-5 text-center">
                    <a href="{{ url('/campaigns/edit/'.$campaign->id) }}">
                        <button class="btn shadow-sm fml-primary-color bg-white rounded fs-13">
                            <span>Edit your campaign</span> <span class="icon icon-pen ml-2"></span></button>
                    </a>
                </div>
                <div class="mx-3 py-2 py-md-5 text-center">
                    <button class="btn shadow-sm fml-primary-color bg-white rounded fs-13" data-toggle="modal"
                            data-target="#exampleModal"><span>Share your campaign</span> <span
                            class="icon icon-share ml-2"></span></button>
                </div>
            </div>
        </div>

        <div class="py-4">
            <div class="mb-4"><strong>Recent Involvements</strong></div>
            <div class="w-100 overflow-x-auto">
                @if(count($requests) > 0)
                    <div class="width-md-900">
                        <div class="d-flex py-3 fml-bg-secondary mb-3 font-weight-bold">
                            <div class="col pl-5">Type</div>
                            <div class="col">Name</div>
                            <div class="col">Purpose</div>
                            <div class="col">Amount</div>
                            <div class="col">Payback period</div>
                            <div class="col">Payback Times</div>
                            <div class="col">Campaign Status</div>
                        </div>
                        <div class="shadow-light">
                            @foreach ($requests as $campaigns)
                                <div class="d-flex fs-14 fw-500 py-3">
                                    <div class="col pl-5">@if($campaigns->user_id) Lendee @else Donator @endif</div>
                                    <div
                                        class="col">{{ $campaigns->user->firstName.''.$campaigns->user->lastName}}</div>
                                    <div class="col">{{ $campaigns->title ?? "Not found" }}</div>
                                    <div class="col">&#x20a6;{{number_format($campaigns->amount) }}</div>
                                    <div class="col">{{$campaigns->repaymentPeriod. ' '}} Months</div>
                                    <div class="col">{{$campaigns->repaymentTimes. ' '}} Times</div>
                                    <div class="col">@if($campaign->isFunded == 1) {{'Funded '.Carbon::parse(date('Y-m-d H:i:s'))->diffInDays(Carbon::parse($campaigns->updated_at)). ' day(s) ago'}} @else Unfunded @endif</div>
                                </div>
                                <hr>
                            @endforeach
                            @if(method_exists($requests, 'links'))
                                {{$requests->appends(['sort' => 'campaign'])->links()}}
                            @endif
                        </div>
                    </div>
                @else
                    No Recent Involvements.
                @endif
            </div>
        </div>
        <div class="pt-4">
            <div class="mb-4"><strong>Past Campaigns</strong></div>
            <div class="w-100 overflow-x-auto">
                @if(count($pastcampaign) > 0)
                    <div class="width-md-900">
                        <div class="d-flex py-3 fml-bg-secondary mb-3 font-weight-bold">
                            <div class="col pl-5">Type</div>
                            <div class="col">Name</div>
                            <div class="col">Purpose</div>
                            <div class="col">Amount</div>
                            <div class="col">Payback period</div>
                            <div class="col">Payback Times</div>
                            <div class="col">Campaign Status</div>
                        </div>
                        <div class="shadow-light">
                            @foreach ($pastcampaign as $past)
                                <div class="d-flex fs-14 fw-500 py-3">
                                    <div class="col pl-5">Lendee</div>
                                    <div class="col">{{$fundee->firstName.' '.$fundee->lastName ?? "Not found"}}</div>
                                    <div class="col">{{$past->title ?? ""}}</div>
                                    <div class="col">&#x20a6;{{number_format($past->amount) ?? ""}}</div>
                                    <div class="col">{{$past->repaymentPeriod. ' '}} Months</div>
                                    <div class="col">{{$past->repaymentTimes. ' '}} Times</div>
                                    <div class="col">@if($past->isSuspended == 1) Suspended @else Funded @endif</div>
                                </div>
                                <hr>
                            @endforeach
                            @if(method_exists($pastcampaign, 'links'))
                                {{$pastcampaign->appends(['sort' => 'campaign'])->links()}}
                            @endif
                        </div>
                    </div>
                @else
                    No Past Campaigns.
                @endif
            </div>
        </div>
        <br>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content col-12">
                    <div class="modal-header">
                        <h5 class="modal-title">Share on social media</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="icon-container1 d-flex">

                            <div id="social-links">
                                <div class="row">

                                    <div class="col-12 mb-1">
                                        <div class="col-6 pull-left">
                                            <a href="{{'https://www.facebook.com/sharer/sharer.php?'.url()->current()}}"
                                               class="social-button" id=""><span class="fa fa-facebook-square"
                                                                                 style="font-size:40px;color:#3b5998; padding:5%"></span></a>
                                        </div>
                                        <div class="col-6 pull-right">
                                            <a href="{{'https://twitter.com/intent/tweet?text='.$campaign->title.' '. url()->current().'&amp;url='.url()->current()}}"
                                               class="social-button pull-right" id=""><span class="fa fa-twitter"
                                                                                            style="font-size:40px;color:#00acee; padding:5%"></span></a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="col-6 pull-left">
                                            <a href="{{'http://www.linkedin.com/shareArticle?mini=true&amp;url='.url()->current().'&amp;title='.$campaign->title.'&amp;summary='.$campaign->description}}"
                                               class="social-button " id=""><span class="fa fa-linkedin"
                                                                                  style="font-size:40px;color:#0e76a8; padding:5%"></span></a>
                                        </div>
                                        <div class="col-6 pull-right">
                                            <a href="{{'https://wa.me/?text='.$campaign->title.' '.url()->current()}}"
                                               class="social-button pull-right" id=""><span class="fa fa-whatsapp"
                                                                                            style="font-size:40px;color:#075e54; padding:5%"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
