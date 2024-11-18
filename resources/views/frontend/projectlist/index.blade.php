@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Project List</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li class="active">Project List</li>
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
                        <h2 class="main-heading">Our All Projects</h2>
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
                            <li><a href="" data-filter=".1">Plumbing</a></li>
                            <li><a href="" data-filter=".2">Erection</a></li>
                            <li><a href="" data-filter=".3">Substation</a></li>
                            <li><a href="" data-filter=".4">Civil Work</a></li>
                            <li><a href="" data-filter=".5">Industrial Automation</a></li>
                            <li><a href="" data-filter=".6">Mechanical</a></li>
                            <li><a href="" data-filter=".7">Power Generation, Transmission & Distribution</a></li>
                            <li><a href="" data-filter=".8">Service & Support</a></li>
                            <li><a href="" data-filter=".9">Testing & Commissioning</a></li>
                            <li><a href="" data-filter=".10">Busbar Trunking System</a></li>
                            <li><a href="" data-filter=".11">Transmission Line Supervision</a></li>
                            <li><a href="" data-filter=".12">Electrical Design</a></li>  
                        </ul>

                        <div class="projects-grid projects-style-1 projects-col3">
                            @foreach($allproject as $val)   
                            <div class="project-item {{$val->ap_group}}">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="{{$val->url}}">
                                            <img src="{{ asset('img/' . $val->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <a class="overlay" href="{{$val->url}}"></a>
                                        <div class="portfolio-info-inner">
                                            <h5><a href="{{$val->url}}">{{$val->title}}</a></h5>
                                            <p class="portfolio-cates">
                                                <h5>{{$val->ap_name}}</h5>
                                            </p> 
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