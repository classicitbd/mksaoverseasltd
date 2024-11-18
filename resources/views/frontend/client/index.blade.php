@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Our Clients</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li class="active">Clients</li>
                </ul>    
            </div>
        </div>
    </div>

    <section class="bg-map-dots pt-4"> 
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ot-heading text-center">
                        <span>// our clients</span>
                        <h2 class="main-heading">We are Trusted <br>5+ Countries Worldwide</h2>
                    </div>
                </div>
            </div>
            <div class="space-35"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ot-testimonials">
                        <div class="owl-carousel owl-theme testimonial-inner ot-testimonials-slider">
                            @foreach($ourclient as $val)  
                            <div class="testi-item">
                                <div class="layer1"></div>
                                <div class="layer2">
                                    <div class="t-head flex-middle pl-4 pt-2 pb-2" style="background-color:#F2F3F4; box-shadow: 2px 2px 3px;">
                                        <img src="{{ asset('public/img/' . $val->logo_img) }}" alt="Emilia Clarke" class="lazyloaded" data-ll-status="loaded" style="height: 60px; width: 60px; border-radius: 50%; object-fit:cover;">
                                        <div class="tinfo">
                                            <h6>{{$val->c_name}}</h6>
                                            <span>{{$val->c_type}}</span>                             
                                        </div>
                                    </div>
                                    <div class="ttext" style="text-align: justify;">
                                    {!! $val->c_details !!}                           
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="pt-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sister Concern Company</h2>
                    <div class="space-20"></div>
                </div>
            </div>
            <div class="padding-half bg-light-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partners">
                            <div class="owl-carousel owl-theme sisterconcern-slider">
                                <div class="partners-slide">
                                    <a href="https://sysconsolutionbd.com/" target="blank" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/sisterconcern/SysconSolutionLtd.webp')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="https://sysconsolutionbd.com/" target="blank" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/sisterconcern/SysconPower&Construction.webp')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="https://sysconbazar.com/" target="blank" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{url('frontend/images/sisterconcern/sysconbazar.webp')}}" alt="">
                                        </figure>                             
                                    </a>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section> --}}

    <section class="pt-5">  
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
                                            <img class="partners-slide-image" src="{{ asset('public/img/' . $val->image) }}" alt="">
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
    </section>
</div>
@endsection