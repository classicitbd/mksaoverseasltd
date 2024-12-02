@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">{{$BusinessData->title ?? ''}}</h1>
            </div>
        </div>
    </div>

    <section class="over-hidden" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="ot-heading">
                        <h4 class="main-heading">{{$BusinessData->heading ?? ''}}:</h4>
                    </div>
                    <p class="mb-15" style="text-align: justify;">{!! $BusinessData->details ?? ''!!}</p>
                </div>
                <div class="offset-lg-1 col-lg-6 col-md-12">
                    <div class="about-right">
                        <div class="home-about-video d-flex justify-content-center">
                            @if(isset($BusinessData->image))
                            <img class="video-btn align-self-center" src="{{ asset('img/' . $BusinessData->image ?? '') }}" alt="">
                            @endif
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
                        <div class="partner_title">
                            <h3>OUR PARTNER</h3>
                        </div>
                        <div class="partners">
                            <div class="owl-carousel owl-theme home-client-carousel">
                                @foreach($partner as $val)
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{ asset('img/' . $val->image ?? '') }}" alt="">
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
