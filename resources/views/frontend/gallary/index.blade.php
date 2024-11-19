@extends('frontend.master')
@section('main_content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Our Gallery</h1>
            </div>
        </div>
    </div>

    <section class="team-slills pt-5">
        <div class="container">
                <h3 style="text-align: center;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    display: inline-block;
    padding: 5px 30px;
    border-radius: 10px;
    position: relative;
    left: 50%;
    transform: translateX(-50%);">Gallery Image</h3>
            <div class="row">
                @foreach ($gallery as $val)
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="product__gallery">
                            <div class="gallery single_pro" id="pills-tabContent">
                                <a href="{{ asset('img/' . $val->image) }}"class="tab-pane fade show active" id="pills-gallery1" role="tabpanel"aria-labelledby="pills-home-tab">
                                    <img class="galleryPic" src="{{ asset('img/' . $val->image) }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <br>
    <br>

    <section class="team-slills pt-5">
        <div class="container">
            <h3 style="text-align: center;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            display: inline-block;
            padding: 5px 30px;
            border-radius: 10px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);">Gallery Video</h3>
            <div class="row">
                @foreach ($video as $val)
                <div class="col-12 col-sm-6 col-md-4">
                        <iframe width="560" height="315" src="{{ $val->video }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <br>
    <br>

    <section class="pt-5">
        <div class="text-center">
            <h3>Our Valuable Clients</h3>
        </div>

        <div class="padding-half bg-light-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partners">
                            <div class="owl-carousel owl-theme home-client-carousel">
                                @foreach ($client as $val)
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{ asset('img/' . $val->logo_img) }}" alt="">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
        $(".gallery a").attr("data-fancybox","mygallery");
        $(".gallery a").each(function(){
          $(this).attr("data-caption", $(this).find("img").attr("alt"));
          $(this).attr("title", $(this).find("img").attr("alt"));
        });
          $(".gallery a").fancybox();
      });

</script>
