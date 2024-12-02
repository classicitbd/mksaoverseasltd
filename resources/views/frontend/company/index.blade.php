@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Company</h1>
            </div>
        </div>
    </div>

    <section class="team-slills pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($company as $val)
                        <p style="text-align: justify; font-size: 16px;">{!! $val->details !!}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
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
