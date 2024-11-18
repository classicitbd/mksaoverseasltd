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

                <!-- Settings -->
                <li class="nav-item">
                    <a href="{{ url('/settings') }}" class="nav-link {{ request()->is('settings') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user"></i>
                        <p>Settings</p>
                    </a>
                </li>

                <!-- Contact Us -->
                <li class="nav-item">
                    <a href="{{ url('/contactus') }}" class="nav-link {{ request()->is('contactus') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user"></i>
                        <p>Contact Us</p>
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


                <li class="nav-item {{ request()->is('quality-technology/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('quality-technology/*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-book-open"></i>
                        <p>
                            Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('quality-technology/1/edit') }}" class="nav-link {{ request()->is('quality-technology/1/edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quality & Technology</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('menu*') || request()->is('submenu*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('menu*') || request()->is('submenu*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-book-open"></i>
                        <p>
                            Menus
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

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
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('aboutus/1/edit*') || request()->is('director*') || request()->is('mission*') || request()->is('frontlogo*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('aboutus/1/edit*') || request()->is('director*') || request()->is('mission*') || request()->is('frontlogo*') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-user"></i><p>About Us<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('aboutus/1/edit')}}" class="nav-link {{ request()->is('aboutus/1/edit') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-user"></i>
                            <p>About</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/director')}}" class="nav-link {{ request()->is('director') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-user"></i>
                            <p>Board Of Directors</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/mission')}}" class="nav-link {{ request()->is('mission') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-book-open"></i>
                            <p>Mission/Vission</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/frontlogo')}}" class="nav-link {{ request()->is('frontlogo') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>Logo</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('businesscategories*') || request()->is('business*') || request()->is('additionalimage*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('businesscategories*') || request()->is('business*') || request()->is('additionalimage*') ? 'active' : '' }}"><i class="nav-icon fas fa-tree"></i><p>Our Service<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/businesscategories')}}" class="nav-link {{ request()->is('businesscategories') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categories of services</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/business')}}" class="nav-link {{ request()->is('business') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>services</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/additionalimage')}}" class="nav-link {{ request()->is('additionalimage') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Additional Image</p>
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
