@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/investor-dashboard.css')}}">
@endpush


@section('content')
    <div class="container-main">
        <div class="">
            <main>
                <section class="user">
                    <h1 class="user__intro">Welcome Back, <span class="text--secondary">Chandan</span></h1>
                    <p>Campaingn available for investing. <span><a class="pink-text" href="#">View More
                                        ></a></span>
                    </p>
                </section>
                <section class="user-carousel" id="user-main">
                    <div class="left-arrow">
                        <i id="left-button" class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="user-financials">
                        <div style="margin-left: 20px;">
                            <div class="user-details">
                                <img src="../img/Ellipse_43.png" alt="A" style="height: 60px; width: 60px;">
                                <div style="margin-left: 10px;">
                                    <h1 style="font-size: 24px; line-height: 24px; margin-bottom: 0;">John Doe
                                    </h1>
                                    <p style="margin: 0;">Intern</p>
                                </div>
                            </div>
                            <p style="margin-bottom: 20px;"><b>Loan Amount: $1,000</b></p>
                            <progress style="margin: 0;" value="70" max="100"></progress>
                            <div style="display: flex;">
                                <p style="font-size: 10px; line-height: 10px; margin-top: 10px;">$700 Funded</p>
                                <div style="flex: 1"></div>
                                <p
                                    style="font-size: 10px; line-height: 10px; margin-top: 10px; margin-right: 15px;">
                                    $300 Left</p>
                            </div>
                            <button>
                                Invest Now
                            </button>
                        </div>
                    </div>

                    <div class="user-financials">
                        <div style="margin-left: 20px;">
                            <div class="user-details">
                                <img src="../img/Ellipse_44.png" alt="A" style="height: 60px; width: 60px;">
                                <div style="margin-left: 10px;">
                                    <h1 style="font-size: 24px; line-height: 24px; margin-bottom: 0;">John Doe
                                    </h1>
                                    <p style="margin: 0;">Intern</p>
                                </div>
                            </div>
                            <p style="margin-bottom: 20px;"><b>Loan Amount: $1,000</b></p>
                            <progress style="margin: 0;" value="70" max="100"></progress>
                            <div style="display: flex;">
                                <p style="font-size: 10px; line-height: 10px; margin-top: 10px;">$700 Funded</p>
                                <div style="flex: 1"></div>
                                <p
                                    style="font-size: 10px; line-height: 10px; margin-top: 10px; margin-right: 15px;">
                                    $300 Left</p>
                            </div>
                            <button>
                                Invest Now
                            </button>
                        </div>
                    </div>

                    <div class="user-financials">
                        <div style="margin-left: 20px;">
                            <div class="user-details">
                                <img src="../img/Ellips_ 46.png" alt="A" style="height: 60px; width: 60px;">
                                <div style="margin-left: 10px;">
                                    <h1 style="font-size: 24px; line-height: 24px; margin-bottom: 0;">Jane Doe
                                    </h1>
                                    <p style="margin: 0;">Intern</p>
                                </div>
                            </div>
                            <p style="margin-bottom: 20px;"><b>Loan Amount: $1,000</b></p>
                            <progress style="margin: 0;" value="70" max="100"></progress>
                            <div style="display: flex;">
                                <p style="font-size: 10px; line-height: 10px; margin-top: 10px;">$700 Funded</p>
                                <div style="flex: 1"></div>
                                <p
                                    style="font-size: 10px; line-height: 10px; margin-top: 10px; margin-right: 15px;">
                                    $300 Left</p>
                            </div>
                            <button>
                                Invest Now
                            </button>
                        </div>
                    </div>

                    <div class="user-financials">
                        <div style="margin-left: 20px;">
                            <div class="user-details">
                                <img src="../img/Ellipse_47.png" alt="A" style="height: 60px; width: 60px;">
                                <div style="margin-left: 10px;">
                                    <h1 style="font-size: 24px; line-height: 24px; margin-bottom:0px;">Jane Doe
                                    </h1>
                                    <p style="margin: 0;">Intern</p>
                                </div>
                            </div>
                            <p style="margin-bottom: 20px;"><b>Loan Amount: $1,000</b></p>
                            <progress style="margin: 0;" value="70" max="100"></progress>
                            <div style="display: flex;">
                                <p style="font-size: 10px; line-height: 10px; margin-top: 10px;">$700 Funded</p>
                                <div style="flex: 1"></div>
                                <p
                                    style="font-size: 10px; line-height: 10px; margin-top: 10px; margin-right: 15px;">
                                    $300 Left</p>
                            </div>
                            <button>
                                Invest Now
                            </button>
                        </div>
                    </div>

                    <div class="user-financials">
                        <div style="margin-left: 20px;">
                            <div class="user-details">
                                <img src="../img/Ellipse_48.png" alt="A"
                                     style="height: 60px; width: 60px; margin-top: 10px;">
                                <div style="margin-left: 10px;">
                                    <h1 style="font-size: 24px; line-height: 24px; margin-bottom: 0px;">John Doe
                                    </h1>
                                    <p style="margin: 0;">Intern</p>
                                </div>
                            </div>
                            <p style="margin-bottom: 20px;"><b>Loan Amount: $1,000</b></p>
                            <progress style="margin: 0;" value="70" max="100"></progress>
                            <div style="display: flex;">
                                <p style="font-size: 10px; line-height: 10px; margin-top: 10px;">$700 Funded</p>
                                <div style="flex: 1"></div>
                                <p
                                    style="font-size: 10px; line-height: 10px; margin-top: 10px; margin-right: 15px;">
                                    $300 Left</p>
                            </div>
                            <button>
                                Invest Now
                            </button>
                        </div>
                    </div>
                    <div class="right-arrow">
                        <i id="right-button" class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </section><br />
                <header class='account-header'>Here is your account overview</header>
                <section class="account">
                    <div class="account__block">
                        <div class="account__block--details">
                            <small>Invested Amount</small><br>
                            <h2><span>INR</span>50,000</h2>
                        </div>
                        <div class="account__block--details">
                            <small>Repaid Amount</small><br>
                            <h2><span>INR</span>20,000</h2>
                        </div>
                        <div class="account__block--details">
                            <small>Remaining Amount</small><br>
                            <h2><span>INR</span>30,000</h2>
                        </div>
                        <div class="account__block--details">
                            <small>Investments</small><br>
                            <h2>6</h2>
                        </div>
                        <div class="account__block--details">
                            <small>Average Investment</small><br>
                            <h2><span>INR</span>25,000</h2>
                        </div>
                        <div class="account__block--details">
                            <small>Average Interest</small><br>
                            <h2>2.5<span>%</span></h2>
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
                            <td>TERM</td>
                            <td>TOTAL RETURNS</td>
                            <td>PAYMENT DUE</td>
                            <td>STATUS</td>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#7646446</td>
                                <td>INR 50,000</td>
                                <td>2.5%</td>
                                <td>10</td>
                                <td>INR 1,250</td>
                                <td> <span><b style="font-size: 22px;">27</b></span> JUNE</td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td>#7646446</td>
                                <td>INR 50,000</td>
                                <td>2.5%</td>
                                <td>10</td>
                                <td>INR 1,250</td>
                                <td> <span><b style="font-size: 22px;">27</b></span> JUNE</td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td>#7646446</td>
                                <td>INR 50,000</td>
                                <td>2.5%</td>
                                <td>10</td>
                                <td>INR 1,250</td>
                                <td> <span><b style="font-size: 22px;">27</b></span> JUNE</td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td>#7646446</td>
                                <td>INR 50,000</td>
                                <td>2.5%</td>
                                <td>10</td>
                                <td>INR 1,250</td>
                                <td> <span><b style="font-size: 22px;">27</b></span> JUNE</td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td>#7646446</td>
                                <td>INR 50,000</td>
                                <td>2.5%</td>
                                <td>10</td>
                                <td>INR 1,250</td>
                                <td> <span><b style="font-size: 22px;">27</b></span> JUNE</td>
                                <td>Active</td>
                            </tr>
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

        const progress_value = 40;
        const displayed_value = document.querySelector('#displayed_value')
        displayed_value.innerHTML = `${progress_value}%`
        setProgress(progress_value);


    </script>
@endpush
