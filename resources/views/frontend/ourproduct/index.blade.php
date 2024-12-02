@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Our Product</h1>
            </div>
        </div>
    </div>

    <section class="contact-page" style="padding-top: 40px; padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                @foreach ($product as $val)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="#" class="single__product__info text-center mb-4">
                        <div class="product__photo">
                            <img class="w-100"
                                src="{{ asset('img/' . $val->image) }}" alt="{{ $val->title }}" />
                        </div>

                        <div class="product__info">
                            <h6>{{ Str::limit($val->title, 30) }}</h6>
                            <button>Read more</button>
                        </div>
                    </a>
                </div>
                @endforeach
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
