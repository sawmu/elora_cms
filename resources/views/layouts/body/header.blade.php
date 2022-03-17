  {{-- <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/"><img src="{{ asset('frontend/eloraLogo.png')}}" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          @foreach ($menuItems as $item)
            @if ($item->status == 'Enabled')
              <li class="active"><a href="{{ $item->link}}">{{ $item->name }}</a></li>   
            @endif
          @endforeach

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        @foreach ($menusocial as $social)
        <a href="{{ $social->link }}" class="{{ $social->name }}" target="black"><i class="{{ $social->image }}"></i></a>
        @endforeach
        
      </div>

    </div>
  </header><!-- End Header --> --}}

        <!-- .....:::::: Start Header Section :::::.... -->
        <header class="header-section sticky-header d-none d-lg-block">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <!-- Start Header Logo -->
                            <a href="/" class="header-logo">
                                <img src="{{ asset('frontend/Logo.png')}}" alt="Logo">
                                
                            </a>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-auto">
                            <!-- Start Header Menu -->
                            <ul class="header-nav">

                                @foreach ($menuItems as $item)
                                    @if ($item->status == 'Enabled')
                                    <li><a href="{{ $item->link}}">{{ $item->name }}</a></li>   
                                    @endif
                                @endforeach
                                {{-- <li><a href="index.html">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="service-list.html">Service</a>
                                    <ul class="submenu">
                                        <li><a href="service-list.html">Services</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="blog-list.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog-list.html">Blog List Full Width</a></li>
                                        <li><a href="blog-list-sidebar-left.html">Blog List Left Sidebar</a></li>
                                        <li><a href="blog-list-sidebar-right.html">Blog List Right Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details Full Width</a></li>
                                        <li><a href="blog-details-sidebar-left.html">Blog Details Left Sidebar</a></li>
                                        <li><a href="blog-details-sidebar-right.html">Blog Details Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="about.html">About Us</a></li>
                                    <li><a href="project-list.html">Project</a></li>
                                    <li><a href="project-details.html">Project Details</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404-page.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li> --}}
                            </ul>
                            <!-- End Header Menu -->
                        </div>
                        <div class="col">
                            <div class="header-btn-link text-end">
                               <a href="/about" class="btn btn-sm btn-outline-one icon-space-left">Resume <i class="icofont-external"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- .....:::::: End Header Section :::::.... -->

        <!-- .....:::::: Start Mobile Header Section :::::.... -->
        <div class="mobile-header d-block d-lg-none">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col">
                        <div class="mobile-logo">
                            <a href="/"  class="header-logo"><img src="{{ asset('frontend/Logo.png')}}" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mobile-action-link text-end">
                            <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu"><i class="icofont-navigation-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .....:::::: Start MobileHeader Section :::::.... -->

        <!--  Start Offcanvas Mobile Menu Section -->
        <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
            <!-- Start Offcanvas Header -->
            <div class="offcanvas-header text-end">
                <button class="offcanvas-close"><i class="icofont-close-line"></i></button>
            </div> <!-- End Offcanvas Header -->
            <!-- Start Offcanvas Mobile Menu Wrapper -->
            <div class="offcanvas-mobile-menu-wrapper">
                <!-- Start Mobile Menu  -->
                <div class="mobile-menu-bottom">
                    <!-- Start Mobile Menu Nav -->
                    <div class="offcanvas-menu">
                        <ul>
                            @foreach ($menuItems as $item)
                                @if ($item->status == 'Enabled')
                                <li><a href="{{ $item->link}}">{{ $item->name }}</a></li>   
                                @endif
                            @endforeach
                            {{-- <li>
                                <a href="index.html"><span>Home</span></a>
                            </li>
                            <li>
                                <a href="#"><span>Services</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="service-list.html">Service List</a></li>
                                    <li><a href="service-details.html">Service Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Blog</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="blog-list.html">Blog List Full Width</a></li>
                                    <li><a href="blog-list-sidebar-left.html">Blog List Left Sidebar</a></li>
                                    <li><a href="blog-list-sidebar-right.html">Blog List Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details Full Width</a></li>
                                    <li><a href="blog-details-sidebar-left.html">Blog Details Left Sidebar</a></li>
                                    <li><a href="blog-details-sidebar-right.html">Blog Details Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Pages</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="project-list.html">Project</a></li>
                                    <li><a href="project-details.html">Project Details</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404-page.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html"><span>Contact</span></a>
                            </li> --}}
                        </ul>
                    </div> <!-- End Mobile Menu Nav -->
                </div> <!-- End Mobile Menu -->

                <!-- Start Mobile contact Info -->
                <div class="mobile-contact-info text-center">
                    <ul class="social-link">
                        @foreach ($menusocial as $social)
                        <li><a href="{{ $social->link }}" class="{{ $social->name }}" target="black"><i class="{{ $social->image }}"></i></a></li>
                        @endforeach
                        {{-- <li><a target="_blank" href="https://example.com"><i class="icofont-facebook"></i></a>
                        </li>
                        <li><a target="_blank" href="https://example.com"><i class="icofont-twitter"></i></a>
                        </li>
                        <li><a target="_blank" href="https://example.com"><i class="icofont-skype"></i></a></li> --}}
                    </ul>
                </div>
                <!-- End Mobile contact Info -->

            </div> <!-- End Offcanvas Mobile Menu Wrapper -->
        </div>
        <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->