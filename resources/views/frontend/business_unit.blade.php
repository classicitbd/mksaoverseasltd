@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">{{$BusinessData->title}}</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="#">What We Offer</a></li>
                    <li class="active">{{$BusinessData->title}}</li>
                </ul>    
            </div>
        </div>
    </div>

    <section class="over-hidden" style="padding-top:100px; padding-bottom:100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="ot-heading">
                        <h4 class="main-heading">{{$BusinessData->heading}}:</h4>
                    </div>
                    <p class="mb-15" style="text-align: justify;">{!! $BusinessData->details !!}</p>
                </div>
                <div class="offset-lg-1 col-lg-6 col-md-12">
                    <div class="about-right">
                        <div class="home-about-video d-flex justify-content-center">
                            <img class="video-btn align-self-center" src="{{ asset('public/img/' . $BusinessData->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="elemnts-flip-boxed">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>{{$BusinessData->other_title}}</h4>
                    <div class="space-20"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($multiImg as $imgData)
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 pb-5">
                    <div class="support-box">
                        <div class="inner-box">
                            <div class="overlay flex-middle">
                                <div class="inner">
                                    <a href="{{URL('business_unit/'.$BusinessData->url.'/'.$imgData->id)}}" target="blank" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN MORE</a>
                                </div>
                            </div>
                            <div class="content-box">
                                <h6 style="color:black; padding-top:10px; padding-left:25px;">{{ $imgData->title }}</h6>
                                <img src="{{url('img/'.$imgData->image)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
