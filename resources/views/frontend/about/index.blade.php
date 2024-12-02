@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">About Us</h1>
            </div>
        </div>
    </div>

    <section class="about-offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-30 mb-lg-0">
                    @foreach($aboutus as $val)
                    <div class="ot-heading">
                        <span>//{{$val->title}}</span>
                        <h2 class="main-heading">{{$val->heading}}</h2>
                    </div>
                    <div class="space-5"></div>
                    <div style="text-align: justify;">{!! $val->details !!}</div>
                    <div class="space-20"></div>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st3" href="{{url('/boardofdirectors')}}">
                                <div class="overlay">
                                    <h4>Board Of <br>Directors</h4>
                                </div>
                                <img src="{{url('frontend/images/director.webp')}}" alt="Directors">
                            </a>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st2" href="{{url('/missionvission')}}">
                                <div class="overlay">
                                    <h4>Our Mission & Vision</h4>
                                </div>
                                <img src="{{url('frontend/images/mission2.webp')}}" alt="Our Mission & Vision">
                            </a>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st1" href="{{url('/our-management-team')}}">
                                <div class="overlay">
                                    <h4>Our Team</h4>
                                </div>
                                <img src="{{url('frontend/images/ourteam.webp')}}" alt="Our Team">
                            </a>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st4 mb-0" href="{{url('/gallary')}}">
                                <div class="overlay">
                                    <h4>Gallery</h4>
                                </div>
                                <img src="{{url('frontend/images/gallery.webp')}}" alt="Our Gallery">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-v5">
        <div class="overlay overlay-image-about5"></div>
        <div class="container" style="margin-top: -70px;">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="pabout-left">
                        <img src="{{url('frontend/images/what-we-do.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pabout-right">
                        <div class="ot-heading">
                            <span>// Quality. diversifications. customer satisfaction.</span>
                            <h2 class="main-heading">What We Actually Do</h2>
                        </div>
                        <p style="text-align: justify;">MKsaoverseas LTD is a growing company, specializing in the manufacture of flexible packaging products.
                        We supply quality products of printed flexible packaging material using fully automated Roto-gravure printing technologies for various
                        forms of laminates with foil & film. Our operations are expanding rapidly to meet the growing needs of local markets. We are continuously
                        developing ourselves to penetrate the growing export sector in the flexible packaging industry. end user.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-v4">
        <div class="container">
            <div class="row">
                <div class=col-lg-12>
                    <div class="s-counter4">
                        <div class="row">
                            @foreach($count as $val)
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-lg-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="{{$val->client_num}}" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">active Clients</h6>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-lg-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="{{$val->project_num}}" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">projects done</h6>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-sm-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="{{$val->support_num}}" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">Supports</h6>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="{{$val->worker_num}}" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">Hard Workere</h6>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="padding-half bg-light-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner_title">
                        <h3>OUR PARTNER</h3>
                    </div>
                    
                    <div class="partners">
                        <div class="owl-carousel owl-theme home-client-carousel">
                            @foreach($partner as $val)
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{ asset('img/' . $val->image) }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
