<!--Footer-->
<footer class="footer ">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-md-between m-auto">
            <div class="col-md-5 col-lg-5 col-sm-12 ">
                <ul class="list-unstyled">
                    <li class="list-item"><img src="{{asset('img/Group 3005.png')}}" alt="" /></li>
                    <li class="list-item">Address</li>
                    <li class="list-item">Email address</li>
                    <li class="list-item">Phone Number</li>
                </ul>
                <div class="mt-5 mb-5">
                    <ul class="footer-icons list-unstyled">
                        <li class="social-item">
                            <a href="#"><img src="{{asset('img/Vector (1).png')}}" alt="" /></a>
                        </li>
                        <li class="social-item"><a href="#"><img src="{{asset('img/Vector (2).png')}}" alt="" /></li></a>
                        <li class="social-item"><a href="#"><img src="{{asset('img/Vector (3).png')}}" alt="" /></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-5 col-lg-5 col-sm-12 d-flex justify-content-lg-end resources">
                <div>
                    <ul class="list-unstyled">
                        <li class="list-item">
                            <h5>RESOURCES </h5>
                        </li>
                        <li class="list-item"><a href="{{ url('why-choose-us') }}"> Why choose FundMyLaptop </a></li>
                        <li class="list-item"><a href="{{ url('how-it-works') }}"> How P2P Lending works</a></li>
                        <li class="list-item"><a href="{{ url('about') }}"> About FundMyLaptop</a></li>
                        <li class="list-item"><a href="{{ url('contact') }}"> Contact Us</a></li>
                    </ul>
                </div>

            </div>

        </div>
        <hr class="bg-white mob-hr">
        <div class="d-flex justify-content-between credits">
            <div>
                <p> 2020 &copy; Copyright All Rights Reserved</p>
            </div>

            <div class="ml-lg-auto credits-list">
                <ul class="list-unstyled d-inline-flex credits-list">
                    <li class="mr-lg-4 mr-md-4"><a href="{{ url('faq') }}"> FAQ</a></li>
                    <li class="mr-lg-4 mr-md-4"><a href="{{ url('privacy-policy') }}"> Privacy Policy</a></li>
                    <li class="mr-lg-4 mr-md-4"><a href="{{ url('terms-and-conditions') }}"> Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
