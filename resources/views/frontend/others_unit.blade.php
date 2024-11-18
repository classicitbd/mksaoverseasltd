@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">{{$imgData->heading}}</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="{{url($imgData->url)}}">Business Unit</a></li>
                    <li class="active">{{$imgData->heading}}</li>
                </ul>    
            </div>
        </div>
    </div>
    
    <section class="over-hidden" style="padding-top:100px; padding-bottom:100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="ot-heading">
                        <h4 class="main-heading">{{$imgData->title}}</h4>
                    </div>
                    <p class="mb-15" style="text-align: justify;">{!! $imgData->details !!}</p>
                </div>
                <div class="offset-lg-1 col-lg-6 col-md-12">
                    <div class="about-right">
                        <div class="home-about-video d-flex justify-content-center">
                            <img class="video-btn align-self-center" src="{{ asset('img/' . $imgData->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    </section>
</div>
@endsection