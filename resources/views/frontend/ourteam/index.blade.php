@extends('frontend.master')
@section('main_content')
<style>
    .team_text {
        background-color: #0868a0;
        margin-bottom: 10px;
    }
    h4.team_text_h1 {
        margin: 8px 5px 8px 5px;
        color: #fff;
    }
</style>
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Management Team</h1>
            </div>
        </div>
    </div>

    <section class="team-v3">
        <div class="container">
            <div class="space-20"></div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ot-heading">
                        <span>our team</span>
                        <h2 class="main-heading">Our Leadership Team</h2>
                    </div>
                    <div class="space-5"></div>
                    <p style="font-size: 15px;">MKsaoverseas LTD have well experienced skilled professional team who can provide you modern & innovative idea<br>for your requirement as well as economic fruitful solution.</p>
                    <div class="space-20"></div>
                </div>
            </div>

            @if(count($directorTeam) > 0)
            <div class="container">
                <div class="row no-margin team_text">
                    <h4 class="team_text_h1">Managing Directors</h4>
                </div>
                <div class="row no-margin">
                    @foreach($directorTeam as $val)
                    <div class="col-lg-3 col-md-6 pb-2">
                        <div class="team-wrap v3">
                            <div class="team-thumb">
                                <img src="{{asset('img/'.$val->image)}}" alt="" style="height: 275px; width: 225px; object-fit: cover;">
                            </div>
                            <div class="team-info">
                                <h6 style="margin: 0px;">{{$val->name}}</h6>
                                <span>{{$val->qualification}}</span>
                                <p style="margin: 0 0 5px;">{{$val->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="space-20"></div>

            @if(count($marketingTeam) > 0)
            <div class="container">
                <div class="row no-margin team_text">
                    <h4 class="team_text_h1">Sales & Marketing</h4>
                </div>
                <div class="row no-margin">
                    @foreach($marketingTeam as $val)
                    <div class="col-lg-3 col-md-6 pb-2">
                        <div class="team-wrap v3">
                            <div class="team-thumb">
                                <img src="{{asset('img/'.$val->image)}}" alt="" style="height: 275px; width: 225px; object-fit: cover;">
                            </div>
                            <div class="team-info">
                                <h6 style="margin: 0px;">{{$val->name}}</h6>
                                <span>{{$val->qualification}}</span>
                                <p style="margin: 0 0 5px;">{{$val->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <div class="space-20"></div>
            @if(count($accountTeam) > 0)
            <div class="container">
                <div class="row no-margin team_text">
                    <h4 class="team_text_h1">Accounts Management and Executives</h4>
                </div>
                <div class="row no-margin">
                    @foreach($accountTeam as $val)
                    <div class="col-lg-3 col-md-6 pb-2">
                        <div class="team-wrap v3">
                            <div class="team-thumb">
                                <img src="{{asset('img/'.$val->image)}}" alt="" style="height: 275px; width: 225px; object-fit: cover;">
                            </div>
                            <div class="team-info">
                                <h6 style="margin: 0px;">{{$val->name}}</h6>
                                <span>{{$val->qualification}}</span>
                                <p style="margin: 0 0 5px;">{{$val->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </section>

    <section class="pt-1">
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
