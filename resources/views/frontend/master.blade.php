
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from templates.thememodern.com/engitech/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 04:05:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>MKsaoverseas LTD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/images/favicon.png')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/drift-basic.min.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/woocommerce.css')}}" />

    <link rel="stylesheet" href="{{url('frontend/style.css')}}" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/plugins/revolution/revolution/css/navigation.css')}}">
</head>

    <body>

        <!---- page-wrapper -->
        <div id="page" class="site">

			<!-- Header -->
			@include("frontend.header")
			<!-- /.Header -->

            <div id="content" class="site-content">
                <!-- Main content -->
                @yield('main_content')
                <!-- /.Main content -->
            </div>
            <!-- Footer -->
            @include("frontend.footer")
            <!-- /Footer -->

        </div>
        <!-- /.page-wrapper -->


        <a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
         <!-- jQuery -->
        <script src="{{url('frontend/js/jquery.min.js')}}"></script>
        <script src="{{url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{url('frontend/js/jquery.isotope.min.js')}}"></script>
        <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{url('frontend/js/easypiechart.min.js')}}"></script>
        <script src="{{url('frontend/js/jquery.countdown.min.js')}}"></script>
        <script src="{{url('frontend/js/Drift.min.js')}}"> </script>
        <script src="{{url('frontend/js/scripts.js')}}"></script>
        <script src="{{url('frontend/js/header-mobile.js')}}"></script>
        <!-- REVOLUTION JS FILES -->

        <script  src="{{url('frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script  src="{{url('frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script  src="{{url('frontend/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

        <!-- REVOLUTION SLIDER SCRIPT FILES -->
        <script  src="{{url('frontend/js/rev-script-2.js')}}"></script>
        <script>
        window.jQuery = window.$ = jQuery;
        (function($) { "use strict";
            //Preloader
            // Royal_Preloader.config({
            //     mode           : 'logo',
            //     logo           : 'images/logo.svg',
            //     logo_size      : [160, 75],
            //     showProgress   : true,
            //     showPercentage : true,
            //     text_colour: '#000000',
            //     background:  '#ffffff'
            // });
            var products = document.querySelectorAll( '.product-slide' );
            for ( var i = 0; i < products.length; ++i ) {
                var imgs = products[i].querySelectorAll( '.single-product img' );
                for ( var j = 0; j < imgs.length; ++j ) {
                    var driftOptions = {
                            paneContainer: products[i].querySelector( '.zoom' ),
                            onHide: function() { $( '.single-product .zoom' ).hide(); },
                            onShow: function() { $( '.single-product .zoom' ).show(); },
                            zoomFactor: 2
                        };
                    new Drift( imgs[j], driftOptions );
                }
            }

        })(jQuery);
    </script>

    </body>
</html>
