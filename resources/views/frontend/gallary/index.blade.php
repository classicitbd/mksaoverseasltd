@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Gallary</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="{{url('/about')}}">About Us</a></li>
                    <li class="active">Gallary</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="portfolio-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="ot-heading">
                        <span>// latest Gallary Pic</span>
                        <h2 class="main-heading">Introduce Our Corporation</h2>
                    </div>
                    <div class="space-5"></div>
                    <p style="font-size: 16px;">MKsaoverseas LTD is a growing company, specializing in the manufacture of flexible packaging products. We supply quality products
                    of printed flexible packaging material using fully automated Roto-gravure printing technologies for various forms of laminates with foil & film.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-filter-wrapper">
                        <ul class="project_filters">
                            <li><a href="#" data-filter="*" class="selected">All</a></li>
                            <li><a href="" data-filter=".1">Company Photo</a></li>
                            <li><a href="" data-filter=".2">Seminer</a></li>
                            <li><a href="" data-filter=".3">Occational</a></li>
                            <li><a href="" data-filter=".4">Corporate</a></li>
                        </ul>

                        <div class="projects-grid projects-style-1 projects-col3">
                            @foreach($gallerycatrgories as $val)
                            <div class="project-item {{$val->g_group}}">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="#">
                                            <img src="{{ asset('public/img/' . $val->image) }}" alt="" style="width:100%; height:370px; object-fit:cover !important;">
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <a class="overlay" href="#"></a>
                                        <div class="portfolio-info-inner">
                                            <h5><a href="{{$val->url}}">{{$val->title}}</a></h5>
                                            <!--<p class="portfolio-cates">-->
                                            <!--    <h5>{{$val->gc_name}}</h5>-->
                                            <!--</p> -->
                                        </div>
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
