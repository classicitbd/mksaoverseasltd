@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">All-Service</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li class="active">All-Service</li>
                </ul>    
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="space-120"></div>
            <div class="row">
                <div class="col-md-8 col-sm-8 mb-4 mb-sm-0">
                    <div class="ot-heading mb-0">
                        <h2 class="main-heading">We Offer a Wide <br>Variety of Services & Support</h2>
                    </div>
                </div>
            </div>
            <div class="space-55"></div>
            <div class="row">
                @foreach($service as $val) 
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1 pb-60">
                        <div class="icon-main"><span class="{!! $val->icon !!}"></span></div>
                        <div class="content-box">
                            <h5>{{$val->title}}</h5>
                            <p style="text-align: justify;">{!! $val->details !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <section class="elemnts-flip-boxed">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>our service</h2>
                    <div class="space-20"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($service as $val)
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 pb-5">
                    <div class="support-box">
                        <div class="inner-box">
                            <div class="overlay flex-middle">
                                <span class="number-box">{{$val->id}}</span>
                                <div class="inner">
                                    <p style="text-align: justify; color: white;">{!! $val->details !!}</p>
                                    <a href="{{$val->url}}" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN MORE</a>
                                </div>
                            </div>
                            <div class="content-box">
                                <h3>{{$val->title}}</h3>
                                <img src="{{ asset('img/' . $val->image) }}" alt="">
                            </div>
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