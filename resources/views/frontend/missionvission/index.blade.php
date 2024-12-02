@extends('frontend.master')
@section('main_content')
    <style>
        .owl-theme .owl-dots .owl-dot {
            display: none;
            zoom: 1;
        }
        .mission_img{
            height: 400px;
            width: 100%;
            object-fit: contain;
        }
        .service-web {
            padding-top: 50px;
            padding-bottom: 50px;
        }
    </style>
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            @foreach($mission as $val)
                <div class="inner flex-middle">
                    <h1 class="page-title" style="font-weight:600;">{{$val->title_two}} / {{$val->title_one}}</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li class="active">{{$val->title_two}} & {{$val->title_one}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    <section class="service-web">
        <div class="container">
            <div class="row">
                @foreach($mission as $val)
                    <div class="col-lg-6 text-center mb-5 mb-lg-0 align-self-center">
                        @if(isset($val->image))
                        <img class="mission_img" src="{{asset('img/'.$val->image)}}" alt="">
                        @endif
                    </div>
                @endforeach
                @foreach($mission as $val)
                <div class="col-lg-6">
                    <div class="service-process">
                        <div class="ot-heading">
                        <h3 class="main-heading">{{$val->heading}}</h3>
                            <span>{{$val->title_one}}</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="process-box">
                                    <p style="text-align: justify; font-size: 15px;">{!! $val->long_description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>

    <section class="app-projects">
        <div class="container">
            <div class="row pt-4">
                @foreach($mission as $val)
                    <div class="col-md-5">
                        <div class="ot-heading mb-0">
                            <span>{{ $val->title_two ?? ''}}</span>
                            <p style="text-align: justify; font-size: 15px;">{!! $val->short_description ?? ''!!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="space-40"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel owl-theme project-slider">
                    @foreach($mission as $val)
                        @if(isset($val->multi_image) && is_array(json_decode($val->multi_image, true)))
                            @foreach(json_decode($val->multi_image, true) as $image)
                                <div class="project-item projects-style-2">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('img/' . $image) }}" class="" alt="">
                                                <span class="overlay"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="project-item projects-style-2">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <p>No images found.</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
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
