@extends('frontend.master')
@section('main_content')
<div class="slider__active owl-carousel">
    @foreach ($sliders as $slider)
        <div class="item">
            <img src="{{ asset('/img/slider/'. $slider->slider_image) }}" style="width:100%" alt="slider Image">
        </div>
    @endforeach
</div>

<section class="over-hidden" style="padding-top:50px; padding-bottom:50px;">
    <div class="container">
        <div class="row">
            @foreach($aboutus as $val)
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="ot-heading">
                        <span>// {{ $val->heading }}</span>
                    </div>
                    <p class="mb-15" style="text-align: justify;">{!! \Illuminate\Support\Str::words(strip_tags($val->details), 100,'....')  !!}</p>
                </div>
                <div class="offset-lg-1 col-lg-6 col-md-12 align-self-center">
                    <div class="about-right">
                        <div class="home-about-video d-flex justify-content-center">
                            <img class="video-btn align-self-center" src="{{ asset('img/' . $val->image) }}" alt="">
                        </div>
                        <div class="home-about-btn">
                            <div class="ot-button">
                                <a href="{{url('/about')}}" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEANR MORE ABOUT US</a>
                            <div class="space-15"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="pt-0 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ot-heading">
                    <span>// our service</span>
                    <h4 class="main-heading">We Offer a Wide Variety of Services</h4>
                </div>
                <div class="space-20"></div>
            </div>
        </div>
        <div class="row">
            @foreach($service_unit as $val)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="icon-box-s2 s1 pb-60">
                    <div class="content-box">
                        <h5>{{$val->title}}</h5>
                        <p style="text-align: justify;">{!! \Illuminate\Support\Str::words(strip_tags($val->details), 30,'....')  !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-dark-primary pt-2" style="padding-bottom:10px; min-width: 100%; height: 470px;">
    <div class="container ">
        <div class="row" style="padding-top: 115px;">
            @foreach($choosesection as $val)
            <div class="col-md-12 text-center">
                <div class="ot-heading">
                    <h2 class="main-heading text-white">{{$val->title}}</h2>
                </div>
                <p style="font-size: 16px; color: #ffffff">{!!$val->detail!!}</p>
                <div class="ot-button">
                    <a href="{{asset('attach-file/'.$val->attach_file)}}" class="octf-btn octf-btn-primary" style="border-radius: 38px; height: 45px;" target="_blank">DOWNLOAD OUR COMPANY PROFILE</a>;
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="faq pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="ot-heading">
                    <span>// FAQ</span>
                    <h4 class="main-heading">OUR PRODUCTION CAPACITY</h4>
                    <p style="font-size:16px;">We produce almost 2.5 Millions different materials each day including Printing and trims & accessories.</p>
                </div>
                <div class="space-25"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="ot-accordions">
                    @foreach($frequentsection as $val)
                    <div class="acc-item">
                        <span class="acc-toggle">{{$val->fre_question}}
                            <i class="down flaticon-download-arrow"></i><i class="up flaticon-up-arrow"></i>
                        </span>
                        <div class="acc-content">
                            <p>{!!$val->fre_answer!!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ot-accordions">
                    @foreach($frequentsection2 as $val)
                    <div class="acc-item">
                        <span class="acc-toggle">{{$val->fre_question}}
                            <i class="down flaticon-download-arrow"></i><i class="up flaticon-up-arrow"></i>
                        </span>
                        <div class="acc-content">
                            <p>{!!$val->fre_answer!!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

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

<div class="no-padding">
    <div class="map">
        <iframe src="{{ get_setting('google_map')->value ?? 'null' }}" width="1800" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
       $("#snd_msg").click(function(){
      $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#snd_msg').html('Please Wait...');
      $("#snd_msg"). attr("disabled", true);

      $.ajax({
        url: "message_store",
        type: "POST",
        data: $('#ajaxmsg').serialize(),
        success: function( response ) {
          $('#snd_msg').html('Submit');
          $("#snd_msg"). attr("disabled", false);

          $("#txtName").val('');
          $("#txtEmail").val('');
          $("#txtMessage").val('');
          alert('Your Message has been submitted successfully');
        }
       });
    });
</script>
<script>
    $(document).ready(function() {
        $('.slider__active').owlCarousel({
            items: 1
            , loop: true
            , margin: 0
            , animateOut: 'fadeOut'
            , animateIn: 'fadeIn'
            , nav: false
            , navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
            , dots: false
            , autoplay: true
            , autoplayTimeout: 5000
        });
    });
</script>
@endsection
