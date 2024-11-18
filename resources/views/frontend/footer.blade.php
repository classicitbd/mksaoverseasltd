<footer id="site-footer" class="site-footer footer-v1">
    <div class="container" style="margin-top: -70px; margin-bottom: -35px;">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h5 style="color: #bbbbbb">About Us</h5>
                    <p style="text-align: justify;">2012, MKsaoverseas LTD is a number one printing company in Bangladesh.
                        MKsaoverseas LTD is your global brand packaging and woven trim and accessories solution, more dynamic
                    to grab new technologies.
                    </p>
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
                        <li class="list-item"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h5 style="color: #bbbbbb">Factory Locations</h5>
                    <p style="margin-bottom: 0px! important;">90/01 Noraibagh, Mirpara, Amulia road Demra, Dhaka-1361</p>
                    <strong>Phone:</strong> 7500554, 7501090(RAI)</br>
                    <strong>Fax:</strong> 880-2-7501090</br>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h5 style="color: #bbbbbb">Contact Us</h5>
                    <strong>Address:</strong><p style="margin-bottom: 0px! important;">37/2, Purana Paltan, Zaman Tower(7th Floor) Dhaka-1000, Bangladesh</p>
                    <strong>Phone:</strong> +8801713001870</br>
                    <strong>Email:</strong> info@mksaoverseasltd.com
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
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                @foreach($frontlogo as $val)
                 <img src="{{asset('public/img/'.$val->logo_img)}}" height="85px" width="85px" alt="MKsaoverseas LTD" class="lazyloaded" data-ll-status="loaded">
                @endforeach
            </div>

            <div class="col-md-6 text-left text-md-right align-self-center">
                <p class="copyright-text">All Rights Reserved © 2024 by MKsaoverseas LTD.</p>
            </div>
        </div>

         <div class="row">
             <div class="col-md-12 text-center text-md-center align-self-center">
                <p class="developer-text">Developed by: <a target="_blank" href="https://classicit.com.bd/" style="color: #ffffff !important;">Classic IT & Sky Mart Ltd</a></p>
            </div>
        </div>
    </div>
</footer>
