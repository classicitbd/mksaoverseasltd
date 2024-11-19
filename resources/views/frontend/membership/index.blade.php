@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Membership</h1>
            </div>
        </div>
    </div>

    <section class="team-slills">
        <div class="container">
            <h3 class="text-center pb-3">Our Membership</h3>
            <div class="row">
                @foreach($membership as $val)
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="certificate_item">
                            <h6>{{ $val->title}}</h6>
                            <img class="w-100" src="{{ asset('img/' . $val->image) }}" style="border: 2px solid #1b1225 !important; height: 375px;" />
                            <p style="text-align: justify !important;">{!! \Illuminate\Support\Str::words(strip_tags($val->details), 50,'....')  !!}</p>
                        </div>
                    </div>
                @endforeach
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
