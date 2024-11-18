@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">{{$BusinessData->title}}</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="#">Business Unit</a></li>
                    <li class="active">{{$BusinessData->title}}</li>
                </ul>    
            </div>
        </div>
    </div>

    <section class="team-top space-sm-top bg-light-1 pb-5">
        <div class="container">
            <h5 class="team-top-title">Syscon Training Schedule & Details</h5>
        </div>
    </section>

    <section class="elements-pricing pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Training For Fresh Bsc Engineers(Electrical)</h3>
                    <div class="space-20"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($bsctraining as $val)
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 pb-5">
                    <div class="ot-pricing-table">
                    <div class="icon-main"><span class="{{$val->icon}}"></span></div>
                        <div class="inner-table">
                            <h4 class="title-table pt-5">{{$val->bt_name}}</h4>
                            <h2><sup>$</sup>{{$val->price}}</h2>
                            <span>{{$val->duration}}</span>
                            <div class="details" style="text-align: justify;">
                                <p>{!! $val->bt_details !!}</p> 
                            </div>
                            <a href="#" class="octf-btn">Choose Plane</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="elements-pricing pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Special Training For Fresh Diploma Engineers(Electrical)</h2>
                    <div class="space-20"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($diplomatraining as $val)
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="ot-pricing-table">
                    <div class="icon-main"><span class="{{$val->icon}}"></span></div>
                        <div class="inner-table">
                            <h4 class="title-table pt-5">{{$val->dt_name}}</h4>
                            <h2><sup>$</sup>{{$val->price}}</h2>
                            <span>{{$val->duration}}</span>
                            <div class="details " style="text-align: justify;">
                                <p>{!! $val->dt_details !!}</p>
                            </div>
                            <a href="#" class="octf-btn">Choose Plane</a>
                        </div>
                    </div>
                </div>
                @endforeach
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