@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Mission / Vission</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="{{url('/about')}}">About Us</a></li>
                    <li class="active">Mission & Vission</li>
                </ul>    
            </div>
        </div>
    </div>

    <section class="service-web">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center mb-5 mb-lg-0 align-self-center">
                    <img src="{{url('frontend/images/mission.webp')}}" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="service-process">
                        <div class="ot-heading">
                        <h3 class="main-heading">Mission & Vision</h3>
                            <span>// Our Vision</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="process-box">
                                    <p style="text-align: justify; font-size: 15px;">To be a respectable, innovative and trusted manufacturer of flexible printing & packaging solution provider
                                    for every industry as well as be the first choice for Printing Industrial Ltd.
                                    </p>
                                    <p style="font-size: 15px;">1. 3 layer film making machine.</p>
                                    <p style="font-size: 15px;">2. A lamination extrusion machine.</p>
                                    <p style="font-size: 15px;">3. A 9-color printing machine.</p>
                                    <p style="font-size: 15px;">4. A state-of-the-art Quality Control Lab.</p>
                                    <p style="font-size: 15px;">5. 5-layer packaging with spot lamination.</p>
                                    <p style="font-size: 15px;">6. The highest quality of packaging.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="app-projects">
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-5">
                    <div class="ot-heading mb-0">
                        <span>// Our Mission</span>
                        <p style="text-align: justify; font-size: 15px;">To procure project at competitive pricing, provide safe working conditions
                        and deliver quality work within reasonable time frame.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-40"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel owl-theme project-slider">
                    <div class="project-item projects-style-2">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="">
                                    <img src="{{url('frontend/images/mission1.webp')}}" class="" alt="">                         
                                    <span class="overlay"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item projects-style-2">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="">
                                    <img src="{{url('frontend/images/mission2.webp')}}" class="" alt="">                         
                                    <span class="overlay"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item projects-style-2">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="">
                                    <img src="{{url('frontend/images/mission3.webp')}}" class="" alt="">                         
                                    <span class="overlay"></span>
                                </a>
                            </div>
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