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
                <li class="nav-item"><a href="{{url('/admin')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p></a></li>

                <li class="nav-item">
                    <a href="{{url('/contactus')}}" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p>Contact Us</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon far fa-envelope"></i><p>Inbox<i class="right fas fa-angle-left"></i></p></a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/message')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Message</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/newsletter')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Newsletter</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{url('/users')}}" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p>User</p>
                    </a>
                </li>

                <li class="nav-header">Content Setting</li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fa fa-book-open"></i><p>Site Pages<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/')}}" target="blank" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Main page</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fa fa-book-open"></i><p>Pages<i class="right fas fa-angle-left"></i></p></a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('quality-technology/1/edit')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Quality & Technology</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-book-open"></i>
                    <p>Menus
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/menu')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Menu</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/submenu')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sub-menu</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fa fa-user"></i><p>About Us<i class="right fas fa-angle-left"></i></p></a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('aboutus/1/edit')}}" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>About</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/director')}}" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>Board Of Directors</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/mission')}}" class="nav-link">
                            <i class="nav-icon fa fa-book-open"></i>
                            <p>Mission/Vission</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/frontlogo')}}" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>Logo</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="nav-icon fa fa-book-open"></i><p>Our Team<i class="right fas fa-angle-left"></i></p></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/team')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lead Team Member</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/teammember')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Other Team Member</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-tree"></i><p>Business Experties<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/businesscategories')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categories of Business</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/business')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Business</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/additionalimage')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Additional Image</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-tree"></i><p>Services<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/servicecategories')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categories of services</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/service')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Services</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fa fa-user"></i><p>Projects<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/projectcategories')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categories of  Projects</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/allproject')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Projects</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-tree"></i><p>Gallary<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/gallerycategories')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Gallary</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fa fa-user"></i><p>Our Machineries<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/all-machineries')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Machineries</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fa fa-user"></i><p>Partners<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/partnercategories')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categories of Partners</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/partner')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Partners</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{url('/ourclient')}}" class="nav-link"><i class="nav-icon fa fa-user"></i><p>Our Clients</p></a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-tree"></i><p>Others<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/frequentsection')}}" class="nav-link">
                            <i class="fa fa-edit nav-icon"></i>
                            <p>Frequently Ask Question</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/skill')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Skills</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/count')}}" class="nav-link">
                            <i class="fa fa-edit nav-icon"></i>
                            <p>Counts</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('choosesection/1/edit')}}" class="nav-link">
                            <i class="fa fa-edit nav-icon"></i>
                            <p>Choose Section</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-tree"></i><p>Product<i class="right fas fa-angle-left"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/productcategories')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categories of Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/product')}}" class="nav-link">
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
