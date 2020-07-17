@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/investor-dashboard.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
@endpush


@section('content')
    <div class="container-main">
        <div class="">
            <main>
                
                <section class="user">
                <h1 class="user__intro">Welcome Back, <span class="text--secondary">{{$user->firstName}}</span></h1>
                    <p>Campaingn available for investing. <span><a class="pink-text" href="{{ url('unfunded-campaigns') }}">View More
                                        ></a></span>
                    </p>
                </section>
                <section class="user-carousel" id="user-main">
                    <div class="left-arrow">
                        <i id="left-button" class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>

                    @foreach($requests as $request)
                        <div class="user-financials">
                            <div style="margin-left: 20px;">
                                <div class="user-details">
                                    <img src="{{ $request->photoURL }}" alt="A" style="height: 60px; width: 60px;">
                                    <div style="margin-left: 10px;">
                                        <h1 style="font-size: 24px; line-height: 24px; margin-bottom: 0;">{{ $request->user->name }}</h1>
                                        <p style="margin: 0;">Intern</p>
                                    </div>
                                </div>
                                <p style="margin-bottom: 20px;"><b>Loan Amount: ₦ {{ $request->amount }}</b></p>
                                <progress style="margin: 0;" value="{{ ($request->transaction->sum('amount')/$request->amount)*100}}" max="100"></progress>
                                <div style="display: flex;">
                                    <p style="font-size: 10px; line-height: 10px; margin-top: 10px;">₦ {{$request->transaction->sum('amount') }} Funded</p>
                                    <div style="flex: 1"></div>
                                    <p style="font-size: 10px; line-height: 10px; margin-top: 10px; margin-right: 15px;"> ₦ {{ $request->amount - $request->transaction->sum('amount') }} Left</p>
                                </div>
                               
                                   
                                <a href="{{ url('payment/'.$request->id) }}">
                                  <button class="
                                  @if($request->transaction->sum('amount')<0)
                                  disabled
                                  @endif ">  Invest Now</button>
                            </a>
                          
                            </div>
                        </div>
                    @endforeach

                 

                    <div class="right-arrow" >
                        <i id="right-button" style="display:inline;"class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </section><br />
                @if(session('success')){
                    {{ session('success') }}
                }
                @endif
                <header class='account-header'>Here is your account overview</header>
                <section class="account">
                    <div class="account__block">
                        <div class="account__block--details">
                            <small>Invested Amount</small><br>
                            <h2><span>NGN</span>{{$transactiontotal}}</h2>
                        </div>
                        <div class="account__block--details">
                            <small>Repaid Amount</small><br>
                            <h2><span>NGN</span>{{$repaymenttotal}}</h2>
                        </div>
                        <div class="account__block--details">
                            <small>Remaining Amount</small><br>
                            <h2><span>NGN</span>{{$transactiontotal-$repaymenttotal}}</h2>
                        </div>
                        <div class="account__block--details">
                            <small>Investments</small><br>
                            <h2>{{$transactions->count()}}</h2>
                        </div>
                        <div class="account__block--details">
                            <small>Average Investment</small><br>
                            <h2><span>NGN</span>{{round($transactions->avg('amount'),1)}}</h2>
                        </div>
                        <div class="account__block--details">
                            <small>Average Interest</small><br>
                            <h2>{{$intrestAverage}}<span>%</span></h2>
                        </div>
                    </div>
                    <div class="account__progress">
                        <svg class="progress-ring" width="100%" height="280">
                            <circle stroke="#eee" stroke-dasharray="2,2" stroke-width="20" fill="none" r="90"
                                    cx="50%" cy="50%" />
                            <circle id="circle-level" class="progress-ring__circle" stroke="#FB3F5C"
                                    stroke-width="20" fill="none" r="90" cx="50%" cy="50%" />
                        </svg>
                        <div class="progress__value">
                            <h1 id="displayed_value"></h1>
                            <h6>REPAID</h6>
                        </div>
                    </div>
                </section>
                <section class="table">
                    
                    <header>Here is your account overview</header>
                    <div class="table__container">
                        <table>
                            <thead>
                            <td>LOAN</td>
                            <td>AMOUNT</td>
                            <td>INTEREST RATE</td>
                            <td>REPAYMENTS LEFT</td>
                            <td>TOTAL RETURNS</td>
                            <td>REPAYMENT PERIOD</td>
                            <td>STATUS</td>
                            </thead>
                            <tbody>
                                @foreach($transactions as $invests )
                                <tr>
                                    <td>#{{$invests->request_id }}</td>
                                    <td>₦ {{$invests->amount }}</td>
                                    <td>{{$invests->request->accrual->avg('rate') }}%</td>
                                    <td>{{$invests->request->repayment->last()->num_repayments_left ?? '0'}}</td>
                                    <td>₦ 
                                        {{$invests->request->repayment->sum('amount_paid') ?? '0'}}</td>
                                    <td> 
                                        <span><b style="font-size: 22px;"> </b></span> {{ $invests->request->repaymentPeriod   }}
                                    </td>
                                    <td>
                                        @if($invests->amount == $invests->request->repayment->sum('amount_paid'))
                                            Inactive
                                        @else
                                        Active
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                         
                           
                            </tbody>
                        </table>
                    </div>
                </section>
            </main>
        </div>

    </div>

@endsection

@push('scripts')
    <script>
        $("#right-button").click(function () {
            event.preventDefault();
            $("#user-main").animate(
                {
                    scrollLeft: "+=200px"
                },
                "fast"
            );
        });

        $("#left-button").click(function () {
            event.preventDefault();
            $("#user-main").animate(
                {
                    scrollLeft: "-=200px"
                },
                "fast"
            );
        });
    </script>

    <script>
        var circle = document.getElementById('circle-level');
        var radius = circle.r.baseVal.value;
        var circumference = radius * 2 * Math.PI;

        circle.style.strokeDasharray = `${circumference} ${circumference}`;
        circle.style.strokeDashoffset = `${circumference}`;

        function setProgress(percent) {
            const offset = circumference - percent / 100 * circumference;
            circle.style.strokeDashoffset = offset;
        }

@if($repaymenttotal>0)
const progress_value = {{round(($repaymenttotal/$transactiontotal)*100,1) }};
@else
        const progress_value = 0;
        @endIf
        const displayed_value = document.querySelector('#displayed_value')
        displayed_value.innerHTML = `${progress_value}%`
        setProgress(progress_value);


    </script>
@endpush
