<header id="site-header" class="site-header sticky-header header-static">
    <!-- Main Header start -->
    <div class="header-topbar style-2">
        <div class="octf-area-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="social-list">
                            <li><a href="http://twitter.com/" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://facebook.com/" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://linkedin.com/" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="http://instagram.com/" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <ul class="topbar-info align-self-end clearfix">
                            <li><a href="tel:+8801713001870"><i class="fas fa-phone-alt"></i>+8801713001870</a></li>
                            <li><a href="mailto:info@mksaoverseasltd.com"><i class="fas fa-envelope"></i>info@mksaoverseasltd.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="octf-main-header">
        <div class="octf-area-wrap">
            <div class="container octf-mainbar-container">
                <div class="octf-mainbar">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col logo-col">
                            <div id="site-logo" class="site-logo">
                                @foreach ($frontlogo as $val)
                                    <a href="{{url('/')}}">
                                        <img src="{{ asset('public/img/' . $val->logo_img) }}" alt="MKsaoverseas LTD"
                                            class="logo">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="octf-col menu-col">
                            <nav id="site-navigation" class="main-navigation">
                                <ul class="menu">
                                    <li><a href="{{url('/home')}}">HOME</a></li>
                                    <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                        <a href="#">ABOUT US<i class="fa fa-chevron-down" style="font-size: 9px;" aria-hidden="true"></i></a>
                                        <ul class="sub-menu">
                                            @foreach($choosesection as $val)
                                                <li><a href="{{asset('public/attach-file/'.$val->attach_file)}}" target="_blank">COMPANY PROFILE</a></li>
                                            @endforeach
                                            <li><a href="{{url('/boardofdirectors')}}">BOARD OF DIRECTORS</a></li>
                                            <li><a href="{{url('/our-management-team')}}">MANAGEMENT TEAM</a></li>
                                            <li><a href="{{url('/missionvission')}}">MISSION/VISSION</a></li>
                                            <li><a href="{{url('/gallary')}}">GALLARY</a></li>
                                        </ul>
                                    </li>
                                    @foreach ($menu as $val)
                                    <?php
                                    $subMenu = \App\Models\Submenu::where('menu_id',$val->id)->get();
                                    ?>
                                    <li class="@if(sizeof($subMenu) > 1) menu-item-has-children @endif ">
                                    <a href="{{url($val->url)}}">{{ $val->m_name }}
                                    @if(sizeof($subMenu) > 1)  <i class="fa fa-chevron-down" style="font-size: 9px;" aria-hidden="true"></i>@endif
                                    </a>
                                    @if(sizeof($subMenu) > 1)
                                    <ul class="sub-menu mega">
                                    <li>
                                    <div class="row">
                                    @foreach ($subMenu as $val)
                                    <div class="col-md-4"><a href="{{url('business_unit/'.$val->submenu_url)}}">{{ $val->submenu_name }}</a></div>
                                    @endforeach
                                    </div>
                                    </li>
                                    </ul>
                                    @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_mobile">
        <div class="container">
            <div class="mlogo_wrapper clearfix">
                <div class="mobile_logo">
                    @foreach ($frontlogo as $val)
                    <a href="{{url('/')}}">
                        <img src="{{ asset('public/img/' . $val->logo_img) }}" alt="MKsaoverseas LTD">
                    </a>
                    @endforeach
                </div>
                <div id="mmenu_toggle">
                    <button></button>
                </div>
            </div>
            <div class="mmenu_wrapper">
                <div class="mobile_nav collapse">
                    <ul id="menu-main-menu" class="mobile_mainmenu">
                        <li><a href="{{url('/home')}}">HOME</a></li>
                        <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                            <a href="#">ABOUT US</a>
                            <ul class="sub-menu">
                                <li><a href="#">COMPANY PROFILE</a></li>
                                <li><a href="#">BOARD OF DIRECTORS</a></li>
                                <li><a href="#">MANAGEMENT TEAM</a></li>
                                <li><a href="#">MISSION/VISSION</a></li>
                                <li><a href="#">GALLARY</a></li>
                            </ul>
                        </li>
                        @foreach ($menu as $val)
                        <?php
                        $subMenu = \App\Models\Submenu::where('menu_id',$val->id)->get();
                        ?>
                        <li class="@if(sizeof($subMenu) > 1) menu-item-has-children @endif ">
                        <a href="{{url($val->url)}}">{{ $val->m_name }}</a>
                        @if(sizeof($subMenu) > 1)
                        <ul class="sub-menu">
                        @foreach ($subMenu as $val)
                        <li><a href="{{url('business_unit/'.$val->submenu_url)}}">{{ $val->submenu_name }}</a></li>
                        @endforeach
                        </ul>
                        @endif
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</header>

<style>
.main-navigation > ul > li {
position: initial;
}

.main-navigation ul li .mega {
width: -webkit-fill-available !important;
}

</style>
