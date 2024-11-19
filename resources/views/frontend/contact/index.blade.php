@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Contact</h1>
            </div>
        </div>
    </div>
    <br>
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    @foreach($contactus as $val)
                    <div class="contact-left">
                        <div class="ot-heading">
                            <span>// contact details</span>
                            <h2 class="main-heading">{{$val->title}}</h2>
                        </div>
                        <div class="space-5"></div>
                        <p>{!! $val->details !!}</p>
                        <div class="contact-info box-style1">
                            <i class="flaticon-world-globe"></i>
                            <div class="info-text">
                                <h6>Our Address:</h6>
                                <p>{{$val->address_1}}</p>
                            </div>
                        </div>
                        <div class="contact-info box-style1">
                            <i class="flaticon-envelope"></i>
                            <div class="info-text">
                                <h6>Our Mailbox:</h6>
                                <p>{{$val->email}}</p>
                            </div>
                        </div>
                        <div class="contact-info box-style1">
                            <i class="flaticon-phone-1"></i>
                            <div class="info-text">
                                <h6>Our Phone:</h6>
                                <p>{{$val->phone}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <form class="wpcf7" id="ajaxmsg">
                        @csrf
                        <div class="main-form">
                            <h2>Ready to Get Started?</h2>
                            <p class="font14">Your email address will not be published. Required fields are marked *</p>
                            <p>
                                <input id="txtName" type="text" name="txtName" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required="">
                            </p>
                            <p>
                                <input type="email" name="txtEmail" id="txtEmail" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Email *" required="">
                            </p>
                            <p>
                              <textarea name="txtMessage" id="txtMessage" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required=""></textarea>
                            </p>
                            <button  id="snd_msg" class="octf-btn octf-btn-light">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>

    <div class="no-padding">
        <div class="map">
            <iframe src="{{ get_setting('google_map')->value ?? 'null' }}" width="1800" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
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
@endsection
