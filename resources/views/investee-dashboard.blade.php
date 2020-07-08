@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/investee-dashboard-new.css')}}">
@endpush


@section('content')
    <section class="investee-dashboard-info container-md px-md-0 mt-5">
        <div class="col-md-6 px-0">
            <h1 class="text-fml-primary mb-4 welcome-text">
                Welcome back, <span class="text-fml-secondary">Chandan</span>
            </h1>
        </div>
        <div class="d-block w-100"></div>
        <div class="row px-0 mx-0">
            <div
                class="credit-score col-md-2 rounded position-relative text-md-center text-left text-light bg-fml-secondary px-3 px-md-2 py-3 align-self-start"
            >
                <p class="mb-md-0">CREDIT SCORE</p>
                <span
                    class="display-4 credit-score-value d-block py-md-4 font-weight-medium mb-md-4"
                >1573</span
                >
                <span class="position-absolute refresh-icon p-2">
            <svg
                width="25"
                height="25"
                viewBox="0 0 25 25"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
              <circle cx="12.5" cy="12.5" r="12.5" fill="white" />
              <path
                  d="M17.6019 14.1859C17.3798 15.3953 16.7588 16.4954 15.8381 17.3105C14.9175 18.1255 13.7502 18.6086 12.5228 18.6825C11.2955 18.7563 10.0787 18.4168 9.06691 17.718C8.05513 17.0193 7.30668 16.0016 6.9411 14.8276C6.57551 13.6536 6.61388 12.391 7.05008 11.2413C7.48628 10.0917 8.29514 9.12134 9.34749 8.48531C10.3998 7.84929 11.635 7.58425 12.8556 7.73252C14.0762 7.8808 15.212 8.43383 16.0815 9.3033"
                  stroke="#FB3F5C"
                  stroke-width="2"
              />
              <path
                  d="M12.3145 10.8584L17.3611 9.86042L15.7021 4.99091"
                  stroke="#FB3F5C"
                  stroke-width="2"
                  stroke-linejoin="round"
              />
            </svg>
          </span>
            </div>
            <div class="d-md-none w-100"></div>
            <div
                class="loan-balance offset-md-1 col-7 col-md-3 align-self-center mt-3 mt-md-0"
            >
                <span class="loan-text d-block mb-md-2">TOTAL LOAN BALANCE</span>
                <p>
                    INR
                    <span class="loan-value display-4 font-weight-medium">30,000</span>
                </p>
            </div>
            <div
                class="loan-progress ml-auto col-5 col-md-3 my-4 my-md-0 d-flex justify-content-end align-items-center px-0"
            >
                <img src="../img/paid-progress.svg" class="d-block" />
            </div>
        </div>
    </section>
    <section class="investee-dashboard-tips container-md px-md-0 mt-0 mt-md-5">
        <div class="dashboard-tips-container mx-0 px-0">
            <div class="dashboard-tips-card py-4 px-4 text-fml-primary rounded">
                <h4>Promote your campaign to reach a wider audience</h4>
                <p>
                    Promoting your campaign gives your it more visibility and enables
                    you to be more acessible to potential investors or funders from
                    other mediums.
                </p>
                <div class="promote-social row mx-0 px-0">
                    <p class="col-xl px-0 mb-3 mb-xl-0">
                        Promote your campain through:
                    </p>
                    <div class="promote-social-links px-0 col-xl d-flex">
                        <a href="#">
                            <img src="../img/bx_bxl-twitter.svg" />
                        </a>
                        <a href="#">
                            <img src="../img/ri_whatsapp-fill.svg" />
                        </a>
                        <a href="#">
                            <img src="../img/bx_bxl-facebook.svg" />
                        </a>
                        <a href="#">
                            <img src="../img/bx_bxs-copy.svg" />
                            <span class="text-fml-secondary pl-2">Copy Link</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="dashboard-tips-card py-4 px-4 text-fml-primary rounded">
                <h4>Add materials to improve your legitimacy</h4>
                <p>
                    Cosider including documents or materials that can reassure potential
                    funders that you’re capable of repaying the loan. These could be
                    pictures or text documents.
                </p>
                <p>You’ve added 2 files. Click the bars to view files.</p>
                <div class="files-bars w-100">
                    <span class="file-bar"></span>
                    <span class="file-bar"></span>
                    <span class="file-bar undone"></span>
                </div>
                <button class="btn btn-fml-secondary float-right px-4 mt-3">
                    Add file
                </button>
            </div>
        </div>
    </section>
    <section class="investee-account-overview container-md px-md-0 mt-5 pt-2">
        <h4 class="account-overview-intro font-weight-normal">
            Here's your account overview
        </h4>
        <div class="account-overview-grid mt-3">
            <div class="account-detail">
                <small>Pending Amount</small><br />
                <h2><span class="right">INR </span>30,000</h2>
            </div>
            <div class="account-detail">
                <small>Loaned amount</small><br />
                <h2><span class="right">INR </span>20,000</h2>
            </div>
            <div class="account-detail">
                <small>Paid amount</small><br />
                <h2><span class="right">INR </span>20,000</h2>
            </div>
            <div class="account-detail">
                <small>Interest rate</small><br />
                <h2>2.5<span class="left"> %</span></h2>
            </div>
            <div class="account-detail">
                <small>Amount per month</small><br />
                <h2><span class="right">INR </span>5,125</h2>
            </div>
            <div class="account-detail">
                <small>Interest per month</small><br />
                <h2><span class="right">INR </span>125</h2>
            </div>
            <div class="account-detail">
                <small>Total Term</small><br />
                <h2>10<span class="left"> months</span></h2>
            </div>
            <div class="account-detail">
                <small>Remaining Term</small><br />
                <h2>6<span class="left"> months</span></h2>
            </div>
        </div>
    </section>
    <section class="investee-payment-history container-md px-md-0 mt-5 pt-2">
        <h4 class="payment-history-intro font-weight-normal">
            Repayment History
        </h4>
        <div class="table-container mt-3 overflow-auto">
            <table class="table border-bottom">
                <thead class="bg-fml-secondary text-light font-weight-bold">
                <tr>
                    <td>DATE</td>
                    <td>AMOUNT PAID</td>
                    <td>AMOUNT REMAINING</td>
                    <td>PAYMENT METHOD</td>
                    <td>REFERENCE ID</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="date">
                        <span class="day">25</span>
                        <br />
                        <span class="month">JULY</span>
                    </td>
                    <td>INR 5,000</td>
                    <td>INR 30,000</td>
                    <td>Bank Transfer</td>
                    <td>646872757669746861</td>
                </tr>
                <tr>
                    <td class="date">
                        <span class="day">27</span>
                        <br />
                        <span class="month">JUNE</span>
                    </td>
                    <td>INR 5,000</td>
                    <td>INR 35,000</td>
                    <td>Bank Transfer</td>
                    <td>646872757669746861</td>
                </tr>
                <tr>
                    <td class="date">
                        <span class="day">20</span>
                        <br />
                        <span class="month">MAY</span>
                    </td>
                    <td>INR 5,000</td>
                    <td>INR 4O,000</td>
                    <td>Bank Transfer</td>
                    <td>646872757669746861</td>
                </tr>
                <tr>
                    <td class="date">
                        <span class="day">25</span>
                        <br />
                        <span class="month">APRIL</span>
                    </td>
                    <td>INR 5,000</td>
                    <td>INR 45,000</td>
                    <td>Bank Transfer</td>
                    <td>646872757669746861</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="investee-help-others container-md px-md-0 mt-5 pt-2">
        <div
            class="row mx-0 px-0 justify-content-md-between flex-column flex-md-row"
        >
            <h4 class="help-others-intro font-weight-normal ">
                Invest in helping others get their laptop.
                <a href="#" class="text-fml-secondary"
                >View more <span class="align-middle d-inline">></span></a
                >
            </h4>
            <div class="d-none d-md-flex">
                <h4 class="show-details font-weight-normal pr-md-2 ">
                    Show complete details
                </h4>
                <input type="checkbox" id="toggle" class="checkbox d-none" checked />
                <label for="toggle" class="switch"></label>
            </div>
        </div>
        <div class="contain-arrow-helper">
            <img
                class="slide-control arrow-left d-block"
                src="../img/arrow-left.svg"
            />
            <img
                class="slide-control arrow-right d-block"
                src="../img/arrow-right.svg"
            />

            <div class="help-card-contain row mx-0 px-0 overflow-auto mt-4">
                <div class="help-card rounded p-3 p-md-3">
                    <div class="profile">
                        <span class="placeholder"></span>
                        <div class="profile-text">
                            <h5>John Doe</h5>
                            <small>Intern</small>
                        </div>
                    </div>
                    <p class="loan-amount">Loan Amount: $1,000</p>
                    <div class="funded-progress">
                        <div class="funded"></div>
                    </div>
                    <div class="funded-info">
                        <span class="funded">$700 Funded</span>
                        <span class="fund-left">$300 Left</span>
                    </div>
                    <div class="w-100"></div>
                    <button class="btn btn-fml-secondary mt-3">Invest Now</button>
                </div>
                <div class="help-card rounded p-3 p-md-3">
                    <div class="profile">
                        <span class="placeholder"></span>
                        <div class="profile-text">
                            <h5>John Doe</h5>
                            <small>Intern</small>
                        </div>
                    </div>
                    <p class="loan-amount">Loan Amount: $1,000</p>
                    <div class="funded-progress">
                        <div class="funded"></div>
                    </div>
                    <div class="funded-info">
                        <span class="funded">$700 Funded</span>
                        <span class="fund-left">$300 Left</span>
                    </div>
                    <div class="w-100"></div>
                    <button class="btn btn-fml-secondary mt-3">Invest Now</button>
                </div>
                <div class="help-card rounded p-3 p-md-3">
                    <div class="profile">
                        <span class="placeholder"></span>
                        <div class="profile-text">
                            <h5>John Doe</h5>
                            <small>Intern</small>
                        </div>
                    </div>
                    <p class="loan-amount">Loan Amount: $1,000</p>
                    <div class="funded-progress">
                        <div class="funded"></div>
                    </div>
                    <div class="funded-info">
                        <span class="funded">$700 Funded</span>
                        <span class="fund-left">$300 Left</span>
                    </div>
                    <div class="w-100"></div>
                    <button class="btn btn-fml-secondary mt-3">Invest Now</button>
                </div>
                <div class="help-card rounded p-3 p-md-3">
                    <div class="profile">
                        <span class="placeholder"></span>
                        <div class="profile-text">
                            <h5>John Doe</h5>
                            <small>Intern</small>
                        </div>
                    </div>
                    <p class="loan-amount">Loan Amount: $1,000</p>
                    <div class="funded-progress">
                        <div class="funded"></div>
                    </div>
                    <div class="funded-info">
                        <span class="funded">$700 Funded</span>
                        <span class="fund-left">$300 Left</span>
                    </div>
                    <div class="w-100"></div>
                    <button class="btn btn-fml-secondary mt-3">Invest Now</button>
                </div>
                <div class="help-card rounded p-3 p-md-3">
                    <div class="profile">
                        <span class="placeholder"></span>
                        <div class="profile-text">
                            <h5>John Doe</h5>
                            <small>Intern</small>
                        </div>
                    </div>
                    <p class="loan-amount">Loan Amount: $1,000</p>
                    <div class="funded-progress">
                        <div class="funded"></div>
                    </div>
                    <div class="funded-info">
                        <span class="funded">$700 Funded</span>
                        <span class="fund-left">$300 Left</span>
                    </div>
                    <div class="w-100"></div>
                    <button class="btn btn-fml-secondary mt-3">Invest Now</button>
                </div>
                <div class="help-card rounded p-3 p-md-3">
                    <div class="profile">
                        <span class="placeholder"></span>
                        <div class="profile-text">
                            <h5>John Doe</h5>
                            <small>Intern</small>
                        </div>
                    </div>
                    <p class="loan-amount">Loan Amount: $1,000</p>
                    <div class="funded-progress">
                        <div class="funded"></div>
                    </div>
                    <div class="funded-info">
                        <span class="funded">$700 Funded</span>
                        <span class="fund-left">$300 Left</span>
                    </div>
                    <div class="w-100"></div>
                    <button class="btn btn-fml-secondary mt-3">Invest Now</button>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('scripts')
    <script>
        //slider scroll feature
        const slideArea = document.querySelector(".help-card-contain");
        const slide = document.querySelector(".help-card");
        const controls = document.querySelectorAll(".slide-control");

        function handleScroll(e) {
            const slideItemWidth = slide.getBoundingClientRect().width;
            if (e.target.classList.contains("arrow-left")) {
                console.log(-slideItemWidth);
                slideArea.scroll({
                    left: -slideItemWidth + slideArea.scrollLeft,
                    behavior: "smooth"
                });
            } else {
                slideArea.scroll({
                    left: slideItemWidth + slideArea.scrollLeft,
                    behavior: "smooth"
                });
                console.log(slideItemWidth);
            }
        }

        controls.forEach(control => {
            control.addEventListener("click", handleScroll);
        });
    </script>
    @endpush

