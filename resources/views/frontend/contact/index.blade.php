@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Contact</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li class="active">Contact</li>
                </ul>    
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
                            <h2 class="main-heading">{{$val->heading}}</h2>
                        </div>
                        <div class="space-5"></div>
                        <p>{!! $val->details !!}</p>
                        <div class="contact-info box-style1">
                            <i class="flaticon-world-globe"></i>                    
                            <div class="info-text">
                                <h6>Our Address:</h6>
                                <p>{{$val->address}}</p>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116814.08263882325!2d90.33364732792431!3d23.802945008569647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b914aa255fa1%3A0x3c4fb2e975619650!2sZaman%20Tower!5e0!3m2!1sen!2sbd!4v1670488225198!5m2!1sen!2sbd" width="1800" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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