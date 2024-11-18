@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Service & Support</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li class="active">Service & Support</li>
                </ul>    
            </div>
        </div>
    </div>
    
    <section class="over-hidden" style="padding-top:100px; padding-bottom:100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="ot-heading">
                        <h4 class="main-heading">Service and Support:</h4>
                    </div>
                    <p class="mb-15">
                        We’re committed to building sustainable and high-quality Java solutions.
                        SYSCON always try to provide prompt support for every single call as well as
                        service & support is our main strength, you can get the service and support
                        from SYSCON for industry sector as following mentioned field & products:-
                    </p>
                        <p>1.Siemens Based Automation</p>
                        <p>2.Load Re-assessing</p>
                        <p>3.Testing & Monitoring</p>
                        <p>4.Annual Maintenance</p>
                        <p>5.Report Generating</p>
                        <p>We committed to provide all sorts of service & support to the owners for
                        short or long term based. Which may include spare parts also. It gives the
                        customer comfort in keeping the price of parts and services valid for several
                        years.</p>
                </div>
                <div class="offset-lg-1 col-lg-6 col-md-12">
                    <div class="about-right">
                        <div class="home-about-video d-flex justify-content-center">
                            <img class="video-btn align-self-center" src="{{url('frontend/images/pic1-service1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section >  
        <div class="padding-half bg-light-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partners">
                            <div class="owl-carousel owl-theme home-client-carousel">
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client1.svg')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client2.svg')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client3.svg')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client4.png')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client5.svg')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client6.svg')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client1.svg')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client2.svg')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client3.svg')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client4.png')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client5.svg')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="index-3.html" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/client-logos/client6.svg')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>







@endsection