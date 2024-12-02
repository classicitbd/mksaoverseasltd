<footer id="site-footer" class="site-footer footer-v1">
    <div class="container" style="margin-top: -70px; margin-bottom: -35px;">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    {{-- <h5 style="color: #bbbbbb">About Us</h5> --}}
                    {{-- <p style="text-align: justify;">{{ get_setting('business_description')->value ?? 'null' }}</p> --}}
                    <h5 style="color: #bbbbbb">Contact Us</h5>
                    <strong>Address:</strong> {{ get_setting('business_address')->value ?? 'null' }}</br>
                    <strong>Phone:</strong> {{ get_setting('phone')->value ?? 'null' }}</br>
                    <strong>Email:</strong> {{ get_setting('email')->value ?? 'null' }}
                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1343 pt-3" method="post">
                        <div class="mc4wp-form-fields">
                            <div class="subscribe-inner-form">
                                <input type="email" name="email" placeholder="Your Email">
                                <button type="submit" class="subscribe-btn-icon"><i class="flaticon-telegram"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-1 col-md-6 col-sm-6 col-12"></div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h5 style="color: #bbbbbb">Quick Links</h5>
                    <ul class="list-items">
                        <li class="list-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-item"><a href="#">Environmental Policy</a></li>
                        <li class="list-item"><a href="#">Compliance</a></li>
                        <li class="list-item"><a href="{{url('/contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h5 style="color: #bbbbbb">OUR PARTNER</h5>
                    <div class="row text-center">
                        <div class="col-4">
                            <p class="footer-text">Accredited Member</p>
                            <div class="d-flex">
                                <img class="footer-logo" src="{{asset('backend/image/footer/atab.png')}}" alt="ATAB Logo" />
                                <img class="footer-logo" src="{{asset('backend/image/footer/toab.png')}}" alt="TOAB Logo" />
                                <img class="footer-logo" src="{{asset('backend/image/footer/pata.png')}}" alt="PATA Logo" />
                            </div>
                        </div>
                        <div class="col-4">
                            <p class="footer-text">Authorized by</p>
                            <img class="footer-logo" src="{{asset('backend/image/footer/iata.png')}}" alt="IATA Logo" />
                        </div>
                        <div class="col-4">
                            <p class="footer-text">Approved Agent</p>
                            <img class="footer-logo" src="{{asset('backend/image/footer/bimanbangladesh.png')}}" alt="Biman Logo" />
                        </div>
                    </div></br>

                    <div class="row">
                        <div class="col-12">
                            <p class="footer-text">We Accept</p>
                            <div class="d-flex">
                                <img class="footer-logo" src="{{asset('backend/image/footer/visa.jpg')}}" alt="Visa Logo" />
                                <img class="footer-logo" src="{{asset('backend/image/footer/amex.png')}}" alt="Amex Logo" />
                                <img class="footer-logo" src="{{asset('backend/image/footer/mastercard.png')}}" alt="Mastercard Logo" />
                                <img class="footer-logo" src="{{asset('backend/image/footer/dbbl.png')}}" alt="DBBL Logo" />
                                <img class="footer-logo" src="{{asset('backend/image/footer/bkash.png')}}" alt="Bkash Logo" />
                                <img class="footer-logo" src="{{asset('backend/image/footer/nogod.png')}}" alt="Nogod Logo" />
                                <img class="footer-logo" src="{{asset('backend/image/footer/upai.png')}}" alt="Upai Logo" />
                                <img class="footer-logo" src="{{asset('backend/image/footer/unionpay.png')}}" alt="Unionpay Logo" />
                                <img class="footer-logo" src="{{asset('backend/image/footer/tap.png')}}" alt="Tap Logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset(get_setting('site_footer_logo')->value ?? 'null') }}" height="85px" width="85px" alt="MKsaoverseas LTD" class="lazyloaded" data-ll-status="loaded">
            </div>

            <div class="col-md-6 text-left text-md-right align-self-center">
                <p class="copyright-text">All Rights Reserved © 2024 by {{ get_setting('copy_right')->value ?? 'null' }}.</p>
            </div>
        </div>

         <div class="row">
             <div class="col-md-12 text-center text-md-center align-self-center">
                <p class="developer-text">Developed by: <a target="_blank" href="https://classicit.com.bd/" style="color: #ffffff !important;">Classic IT & Sky Mart Ltd</a></p>
            </div>
        </div>
    </div>
</footer>
