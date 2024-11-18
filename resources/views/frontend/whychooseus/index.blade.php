@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Why Choose Us</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li class="active">Choosen</li>
                </ul>    
            </div>
        </div>
    </div>
    <section class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img src="{{url('frontend/images/man1.png')}}" alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="why-right">
                        <div class="ot-heading">
                            <span>// about company</span>
                            <h2 class="main-heading">Syscon Engineering Ltd.</h2>
                        </div>
                        <p class="mb-15" style="text-align: justify;">SYSCON have well experienced skill professional team who can provide you modern & innovative
                        idea for your requirement as well as economic fruitful solution. more dynamic to grab new technologies,
                        more focused to customer needs and even more detailed oriented to solve the complex automation tasks while making it simple
                        to use for end user.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="icon-box-s1">
                                    <div class="icon-main"><span class="flaticon-medal"></span></div>
                                    <h5>Experience</h5>
                                    <div class="line-box"></div>
                                    <p>Our great team of more than 40+ experts.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="icon-box-s1">
                                    <div class="icon-main"><span class="flaticon-gear"></span></div>
                                    <h5>Quick Support</h5>
                                    <div class="line-box"></div>
                                    <p>We’ll help you test bold new ideas while sharing your.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="s-counter4 why">
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
            <div class="space-110"></div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ot-heading">
                        <span>// our services</span>
                        <h2 class="main-heading">We Offer a Wide <br>Variety of Services & Support</h2>
                    </div>
                </div>
            </div>
            <div class="space-30"></div>
            <div class="row">
                @foreach($service as $val) 
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="icon-box-s2 s2 border-s1 bg bg{{$val->id}} text-center">
                        <style>
                        .icon-box-s2.bg<?php echo $val->id?>:before {
                        background-image: url("{{asset('/img/'.$val->image)}}") ;
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        }
                        </style>
                        <div class="content-box">
                        <div class="icon-main"><span class="{{$val->icon}}"></span></div>
                            <h5><a href="{{$val->url}}">{{$val->title}}</a></h5>
                            <p style="text-align: justify;">{!! $val->details !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="padding-half bg-light-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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