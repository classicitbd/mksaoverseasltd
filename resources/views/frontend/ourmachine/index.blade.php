@extends('frontend.master')
@section('main_content')
<style>
    .projects-style-1 .projects-box img {
    width: 100%;
    height: 370px;
    object-fit: cover;
}
</style>
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Our Machinaries</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li class="active">Our Machinaries</li>
                </ul>
            </div>
        </div>
    </div>
        <section class="portfolio-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="ot-heading">
                        <span>// latest case studies</span>
                        <h2 class="main-heading">Our All Machineries</h2>
                    </div>
                    <div class="space-5"></div>
                    <p>We can provide you following service & support with economical & innovative idea.<br>to get worthwhile results without cooperation and trust between a client company.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-filter-wrapper">
                        <ul class="project_filters">
                           <li><a href="#" data-filter="*" class="selected">All</a></li>
                            <li><a href="" data-filter=".1">Printing Machineries</a></li>
                        </ul>

                        <div class="projects-grid projects-style-1 projects-col3">
                            @foreach($allmachine as $val)
                            <div class="project-item {{$val->am_group}}">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="{{$val->url}}">
                                            <img src="{{ asset('public/img/' . $val->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <a class="overlay" href="{{$val->url}}"></a>
                                        <div class="portfolio-info-inner">
                                            <h5><a href="{{$val->url}}">{{$val->title}}</a></h5>
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
