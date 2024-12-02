@extends('frontend.master')
@section('main_content')
<style>
    .member-info li {
        padding-bottom: 0px !important;
    }
</style>
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Board Of Directors</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="{{url('/about')}}">About Us</a></li>
                    <li class="active">Board Of Directors</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($director as $val)
        <div class="col-lg-6">
            <section class="team-about sm-space">
                <div class="container">
                    <div class="steam-info">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="team-info-left pt-3 pl-3">
                                    <img src="{{ asset('img/' . $val->image) }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="team-detail pt-5">
                                    <h4>{{$val->name}}</h4>
                                    <span class="location">{{$val->designation}}</span>
                                    <ul class="bold member-info">
                                        {{-- <li><span class="text-dark">Qualification: </span>{{$val->qualification}}</li> --}}
                                        <li><span class="text-dark">Email: </span>{{$val->email}}</li>
                                        <li><span class="text-dark">Phone: </span>{{$val->phone}}</li>
                                    </ul>
                                    <div class="otf-social-share clearfix shape-circle pb-4">
                                        <a class="share-facebook" href="{{$val->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a class="share-twitter" href="{{$val->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="share-pinterest" href="{{$val->pinterest}}" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                        <a class="share-linkedin" href="{{$val->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endforeach
    </div>

    <section class="team-slills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Biography</h3>
                    <p style="text-align: justify; font-size: 16px;">MKsaoverseas LTD is a growing company, specializing in the manufacture of flexible packaging products.
                    We supply quality products of printed flexible packaging material using fully automated Roto-gravure printing technologies for various forms of
                    laminates with foil & film. Our operations are expanding rapidly to meet the growing needs of local markets. We are continuously developing ourselves
                    to penetrate the growing export sector in the flexible packaging industry.
                    end user.</p>
                </div>
            </div>
            <div class="space-25"></div>
            <div class="row">
                @foreach($skill as $val)
                <div class="col-xl-3 col-lg-6 col-md-6 text-center text-md-right">
                    <div class="circle-progress" data-color="#43BAFF" data-height="10" data-size="135">
                        <div class="inner-bar" data-percent="{{$val->skill_amount}}">
                            <span><span class="percent">{{$val->skill_amount}}</span>%</span>
                        </div>
                        <h4>{{$val->skill_name}}</h4>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="space-50"></div>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Hard Skills</h3>
                    <p style="text-align: justify; font-size: 16px;">Just as a Industrial Printing business in real life is remembered not just for its product
                    offerings but also because of its services, support, and customer-friendliness,
                    <span class="text-dark bold">helpful customer support system</span>
                    Over the years, <b>MKsaoverseas LTD Industrial Printing Ltd</b> has engineered numerous challenging and multidimensional projects through
                    which we enriched our skills, expertise and experiences. We set our benchmark in design and Printing. The future looks bright for
                    the business as we have started to bring in new technological extensions to their product line and grow with our business partners.
                    MKsaoverseas LTD is planning to expand technological innovation through the Lami Tube production project, Alu-Alu foil for pharmaceutical
                    packaging and also expanding the production capacity by adding a second line of expansion.
                  </p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

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
