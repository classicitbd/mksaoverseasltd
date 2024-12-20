<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin')}}" class="brand-link">
      <span class="brand-text font-weight-light">MKsaoverseas LTD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('backend/img/admin.jpg')}}" class="img-circle elevation-2" alt="">
            </div>

            <div class="info">
                <a href="{{url('/admin')}}" class="d-block">Admin Panel</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Admin Setting</li>
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Inbox with Submenu -->
                <li class="nav-item {{ request()->is('message*') || request()->is('newsletter*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('message*') || request()->is('newsletter*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Inbox
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Message -->
                        <li class="nav-item">
                            <a href="{{ url('/message') }}" class="nav-link {{ request()->is('message') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Message</p>
                            </a>
                        </li>

                        <!-- Newsletter -->
                        <li class="nav-item">
                            <a href="{{ url('/newsletter') }}" class="nav-link {{ request()->is('newsletter') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Newsletter</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{url('/users')}}" class="nav-link {{ request()->is('users') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-user"></i>
                    <p>User</p>
                    </a>
                </li>

                <li class="nav-header">Content Setting</li>
                <li class="nav-item {{ request()->is('/') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-book-open"></i>
                        <p>
                            Site Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" target="_blank" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Main Page</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item {{ request()->is('events*') ? 'menu-open' : '' }}">
                    <a href="{{ url('events') }}" class="nav-link {{ request()->is('events') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Events</p>
                    </a>
                </li>


                <!-- Settings -->
                <li class="nav-item">
                    <a href="{{ url('/settings') }}" class="nav-link {{ request()->is('settings') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user"></i>
                        <p>Settings</p>
                    </a>
                </li>

                <!-- Contact Us -->
                <li class="nav-item">
                    <a href="{{ url('contact-us/1/edit') }}" class="nav-link {{ request()->is('contact-us/1/edit') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user"></i>
                        <p>Contact Us</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('aboutus/1/edit*') || request()->is('company/1/edit*') || request()->is('director*') || request()->is('mission*') || request()->is('team*') || request()->is('all-membership*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('aboutus/1/edit*') || request()->is('company/1/edit*') || request()->is('director*') || request()->is('mission*') || request()->is('team*') || request()->is('all-membership*') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-user"></i><p>About Us<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('company/1/edit')}}" class="nav-link {{ request()->is('company/1/edit') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-user"></i>
                                <p>Company Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/director')}}" class="nav-link {{ request()->is('director') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-user"></i>
                                <p>Board Of Directors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/all-membership')}}" class="nav-link {{ request()->is('all-membership') ? 'active' : '' }}"><i class="far fa-circle nav-icon"></i><p>Membership</p></a>
                        </li>
                        <li class="nav-item {{ request()->is('galleries*') || request()->is('video/galleries*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('galleries*') || request()->is('video/galleries*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Gallary
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/galleries')}}" class="nav-link {{ request()->is('galleries') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Gallary List</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/video/galleries')}}" class="nav-link {{ request()->is('video/galleries') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Video List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('aboutus/1/edit')}}" class="nav-link {{ request()->is('aboutus/1/edit') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-user"></i>
                            <p>About</p>
                            </a>
                        </li>





                        <li class="nav-item">
                            <a href="{{url('mission/1/edit')}}" class="nav-link {{ request()->is('mission/1/edit') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-book-open"></i>
                            <p>Mission/Vission</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/team')}}" class="nav-link {{ request()->is('team') ? 'active' : '' }}"><i class="far fa-circle nav-icon"></i><p>Our Team</p></a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item {{ request()->is('business*') || request()->is('menu*') || request()->is('submenu*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('business*') || request()->is('menu*') || request()->is('submenu*') ? 'active' : '' }}"><i class="nav-icon fas fa-tree"></i><p>Our Service<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/menu') }}" class="nav-link {{ request()->is('menu') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/submenu') }}" class="nav-link {{ request()->is('submenu') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub-menu</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/business')}}" class="nav-link {{ request()->is('business') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>services</p>
                            </a>
                        </li>

{{--                        <li class="nav-item">--}}
{{--                            <a href="{{url('/additionalimage')}}" class="nav-link {{ request()->is('additionalimage') ? 'active' : '' }}">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Additional Image</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{url('/businesscategories')}}" class="nav-link {{ request()->is('businesscategories') ? 'active' : '' }}">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Categories of services</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </li>



                <li class="nav-item {{ request()->is('slider-create*') || request()->is('slider-list*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('slider-create*') || request()->is('slider-list*') ? 'active' : '' }}">
                      <i class="nav-icon fas fa-tree"></i>
                      <p>
                        Slider
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url('slider-create')}}" class="nav-link {{ request()->is('slider-create') ? 'active' : '' }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Slider Add</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('slider-list')}}" class="nav-link {{ request()->is('slider-list') ? 'active' : '' }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Slider List</p>
                        </a>
                      </li>
                    </ul>
                  </li>

                <li class="nav-item {{ request()->is('partnercategories*') || request()->is('partner*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('partnercategories*') || request()->is('partner*') ? 'active' : '' }}"><i class="nav-icon fa fa-user"></i><p>Partners<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/partnercategories')}}" class="nav-link {{ request()->is('partnercategories') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categories of Partners</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/partner')}}" class="nav-link {{ request()->is('partner') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Partners</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('ourclient*') ? 'menu-open' : '' }}">
                    <a href="{{url('/ourclient')}}" class="nav-link {{ request()->is('ourclient*') ? 'menu-open' : '' }}"><i class="nav-icon fa fa-user"></i><p>Our Clients</p></a>
                </li>


                <li class="nav-item {{ request()->is('careers*') ? 'menu-open' : '' }}">
                    <a href="{{url('/careers')}}" class="nav-link {{ request()->is('careers*') ? 'menu-open' : '' }}"><i class="nav-icon fa fa-user"></i><p>Careers</p></a>
                </li>

                <li class="nav-item {{ request()->is('frequentsection*') || request()->is('skill*') || request()->is('count*') || request()->is('choosesection/1/edit*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('frequentsection*') || request()->is('skill*') || request()->is('count*') || request()->is('choosesection/1/edit*') ? 'menu-open' : '' }}"><i class="nav-icon fas fa-tree"></i><p>Others<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/frequentsection')}}" class="nav-link {{ request()->is('frequentsection') ? 'active' : '' }}">
                            <i class="fa fa-edit nav-icon"></i>
                            <p>Frequently Ask Question</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/skill')}}" class="nav-link {{ request()->is('skill') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Skills</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/count')}}" class="nav-link {{ request()->is('count') ? 'active' : '' }}">
                            <i class="fa fa-edit nav-icon"></i>
                            <p>Counts</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('choosesection/1/edit')}}" class="nav-link {{ request()->is('choosesection/1/edit') ? 'active' : '' }}">
                            <i class="fa fa-edit nav-icon"></i>
                            <p>Choose Section</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('productcategories*') || request()->is('product*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('productcategories*') || request()->is('product*') ? 'menu-open' : '' }}"><i class="nav-icon fas fa-tree"></i><p>Product<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/productcategories')}}" class="nav-link {{ request()->is('productcategories') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categories of Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/product')}}" class="nav-link {{ request()->is('product') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Products</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
