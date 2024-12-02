@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Career</h1>
            </div>
        </div>
    </div>

    <section class="team-slills">
        <div class="container">
            <h3 class="text-center pb-3">Career Info</h3>
            <div class="row">
                @foreach($career as $val)
                    <div class="col-12 col-sm-6 col-md-4 mt-3">
                        <div class="certificate_item">
                            <h6>{{ $val->title}}</h6>
                            <div style="position: relative; border: 0px solid #1b1225; height: 375px;" class="w-100">
                                @if(pathinfo($val->image, PATHINFO_EXTENSION) == 'pdf')
                                    <embed src="{{ asset('img/' . $val->image) }}" type="application/pdf" style="height: 100%; width: 100%; border: 2px solid #1b1225 !important;" />
                                    <a href="{{ asset('img/' . $val->image) }}" download class="btn btn-secondary"
                                       style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><i class="fa fa-download"></i>
                                    </a>
                                @else
                                    <img class="w-100" src="{{ asset('img/' . $val->image) }}" style="border: 2px solid #1b1225 !important; height: 375px;" />
                                @endif
                            </div>
                            <p class="mt-2 font-weight-bold">Expired Date: {{ $val->expired_date }}</p>
{{--                            <p style="text-align: justify !important;">{!! \Illuminate\Support\Str::words(strip_tags($val->details), 50,'....')  !!}</p>--}}
                            <p style="text-align: justify !important;">{!! $val->details !!}</p>
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
