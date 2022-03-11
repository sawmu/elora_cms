<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Saw - Portfolio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend\logo.png')}}" />
  
   

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->

    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/icofont.min.css')}}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/venobox.min.css')}}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <main class="main-wrapper">
      @include('layouts.body.header')

        <!-- Offcanvas Overlay -->
        <div class="offcanvas-overlay"></div>

        @include('layouts.body.slider')
        @include('layouts.homepage.star_count')
        @include('layouts.homepage.special_skill')

        <!-- ...::: Start Service Display Section :::... -->
        {{-- <div class="service-display-section section-gap-tb-165 pos-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Content -->
                        <div class="section-content">
                            <span class="section-tag">My Services</span>
                            <h2 class="section-title">Service Provide For My Clients.</h2>
                        </div>
                        <!-- End Section Content -->
                    </div>
                </div>
            </div>

            <!-- Start Service Section Wrapper -->
            <div class="service-display-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="service-display-slider">
                                <!-- Slider main container -->
                                <div class="swiper-container">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <!-- Start Service Box Single Item -->
                                        <div class="service-box-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="icon"><img src="assets/images/icon/service-icon-1.png" alt=""></div>
                                            <h4 class="title"><a href="service-details.html">UI/UX Design</a></h4>
                                            <ul class="list-item">
                                                <li>Landing Pages</li>
                                                <li>User Flow</li>
                                                <li>Wireframing</li>
                                                <li>Prototyping</li>
                                                <li>Mobile App Design</li>
                                            </ul>
                                            <div class="inner-shape inner-shape-bottom-right"></div>
                                        </div>
                                        <!-- End Service Box Single Item -->
                                        <!-- Start Service Box Single Item -->
                                        <div class="service-box-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="icon"><img src="assets/images/icon/service-icon-2.png" alt=""></div>
                                            <h4 class="title"><a href="service-details.html">Development</a></h4>
                                            <ul class="list-item">
                                                <li>HTML/CSS</li>
                                                <li>JavaScript</li>
                                                <li>Animation</li>
                                                <li>WordPress</li>
                                                <li>React</li>
                                            </ul>
                                            <div class="inner-shape inner-shape-bottom-right"></div>
                                        </div>
                                        <!-- End Service Box Single Item -->
                                        <!-- Start Service Box Single Item -->
                                        <div class="service-box-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="icon"><img src="assets/images/icon/service-icon-3.png" alt=""></div>
                                            <h4 class="title"><a href="service-details.html">Illustration</a></h4>
                                            <ul class="list-item">
                                                <li>Character Design</li>
                                                <li>Icon Set</li>
                                                <li> Illustration Guide</li>
                                                <li>Illustration Set</li>
                                                <li>Motion Graphic</li>
                                            </ul>
                                            <div class="inner-shape inner-shape-bottom-right"></div>
                                        </div>
                                        <!-- End Service Box Single Item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="service-display-dots">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- End Service Section Wrapper -->
        </div> --}}
        <!-- ...::: End Service Display Section :::... -->

        

      

        <!-- ...::: Start Project Display Section :::... -->
        <div class="project-display-section section-gap-tb-165">
            <div class="project-display-box">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-12 d-block d-md-flex justify-content-between">
                            <!-- Start Section Content -->
                            <div class="section-content pos-relative">
                                <span class="section-tag">Awesome Portfolio</span>
                                <h2 class="section-title">My Complete Projects</h2>
                            </div>
                            <!-- End Section Content -->

                            <div class="default-nav-style mt-6 mb-6 mb-md-0 ">
                                <!-- If we need navigation buttons -->
                                <div class="slider-button button-prev"><i class="icofont-double-left"></i></div>
                                <div class="slider-button button-next"><i class="icofont-double-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-display-wrapper">
                    <div class="project-display-slider">
                        <!-- Swiper -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <!-- Start Project Box Single Item -->
                                <div class="project-box-single-item swiper-slide">
                                    <div class="img-box">
                                        <div class="bg-overlay"></div>
                                        <div class="bg-image">
                                            <img src="assets/images/project/project-slider-img-1.jpg" alt="">
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/project/project-slider-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="project-details.html">Givest - Non Profit PSD Template</a></h4>

                                        <ul class="catagory-nav-item">
                                            <li><a href="">Chairty</a></li>
                                            <li><a href="">Fund Rising</a></li>
                                            <li><a href="">Non Profit</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Project Box Single Item -->
                                <!-- Start Project Box Single Item -->
                                <div class="project-box-single-item swiper-slide">
                                    <div class="img-box">
                                        <div class="bg-overlay"></div>
                                        <div class="bg-image">
                                            <img src="assets/images/project/project-slider-img-2.jpg" alt="">
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/project/project-slider-img-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="project-details.html">Musion - Gardening Website Template</a></h4>

                                        <ul class="catagory-nav-item">
                                            <li><a href="">Gardeining</a></li>
                                            <li><a href="">Landscaping</a></li>
                                            <li><a href="">Greem</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Project Box Single Item -->
                                <!-- Start Project Box Single Item -->
                                <div class="project-box-single-item swiper-slide">
                                    <div class="img-box">
                                        <div class="bg-overlay"></div>
                                        <div class="bg-image">
                                            <img src="assets/images/project/project-slider-img-3.jpg" alt="">
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/project/project-slider-img-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="project-details.html">SEOLLY - SEO Marketing & Digital Agency</a></h4>

                                        <ul class="catagory-nav-item">
                                            <li><a href="">Chairty</a></li>
                                            <li><a href="">Fund Rising</a></li>
                                            <li><a href="">Non Profit</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Project Box Single Item -->
                                <!-- Start Project Box Single Item -->
                                <div class="project-box-single-item swiper-slide">
                                    <div class="img-box">
                                        <div class="bg-overlay"></div>
                                        <div class="bg-image">
                                            <img src="assets/images/project/project-slider-img-4.jpg" alt="">
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/project/project-slider-img-4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="project-details.html">Virtuf - Creative Agency Bootstrap 5 Template</a></h4>

                                        <ul class="catagory-nav-item">
                                            <li><a href="">Gardeining</a></li>
                                            <li><a href="">Landscaping</a></li>
                                            <li><a href="">Greem</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Project Box Single Item -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ...::: End Project Display Section :::... -->

        <!-- ...::: Start Testimonial Display Section :::... -->
        <div class="testimonial-display-section section-gap-tb-165 section-bg">
            <div class="testimonial-display-box d-flex flex-column align-items-center d-xl-block pos-relative">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col d-xl-flex justify-content-xl-end">
                            <!-- Start Section Content -->
                            <div class="section-content pos-relative">
                                <span class="section-tag">Testimonial</span>
                                <h2 class="section-title">Satisfied Clients Say</h2>
                            </div>
                            <!-- End Section Content -->
                        </div>
                    </div>

                    <div class="testimonial-display-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="testimonial-display-slider">
                                    <!-- Swiper -->
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!-- Start testimonial Slider Single Item -->
                                            <div class="testimonial-slider-single-item swiper-slide">
                                                <div class="inner-shape inner-shape-top-right"></div>
                                                <div class="content">
                                                    <span class="icon">“</span>
                                                    <p class="text">Lorem Ipsum simpy dummy
                                                        text of the printing and types
                                                        industry has been the industr
                                                        standard dummy.</p>
                                                    <div class="info">
                                                        <div class="author">
                                                            <h4 class="name">Raleigh Friend</h4>
                                                            <span class="designation">CEO, Seoly</span>
                                                        </div>
                                                        <ul class="review">
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="blank"><i class="icofont-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End testimonial Slider Single Item -->
                                            <!-- Start testimonial Slider Single Item -->
                                            <div class="testimonial-slider-single-item swiper-slide">
                                                <div class="inner-shape inner-shape-top-right"></div>
                                                <div class="content">
                                                    <span class="icon">“</span>
                                                    <p class="text">Lorem Ipsum simpy dummy
                                                        text of the printing and types
                                                        industry has been the industr
                                                        standard dummy.</p>
                                                    <div class="info">
                                                        <div class="author">
                                                            <h4 class="name">Raleigh Friend</h4>
                                                            <span class="designation">CEO, Seoly</span>
                                                        </div>
                                                        <ul class="review">
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="blank"><i class="icofont-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End testimonial Slider Single Item -->
                                            <!-- Start testimonial Slider Single Item -->
                                            <div class="testimonial-slider-single-item swiper-slide">
                                                <div class="inner-shape inner-shape-top-right"></div>
                                                <div class="content">
                                                    <span class="icon">“</span>
                                                    <p class="text">Lorem Ipsum simpy dummy
                                                        text of the printing and types
                                                        industry has been the industr
                                                        standard dummy.</p>
                                                    <div class="info">
                                                        <div class="author">
                                                            <h4 class="name">Raleigh Friend</h4>
                                                            <span class="designation">CEO, Seoly</span>
                                                        </div>
                                                        <ul class="review">
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="fill"><i class="icofont-star"></i></li>
                                                            <li class="blank"><i class="icofont-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End testimonial Slider Single Item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="default-nav-style mt-5 mt-xl-0">
                    <!-- If we need navigation buttons -->
                    <div class="slider-button button-prev"><i class="icofont-double-left"></i></div>
                    <div class="slider-button button-next"><i class="icofont-double-right"></i></div>
                </div>
            </div>
        </div>
        <!-- ...::: End Testimonial Display Section :::... -->

        <!-- ...::: Start Company Logo Display Section :::... -->
        <div class="company-logo-display section-mt-165 ">
            <div class="company-logo-display-box">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- Start Section Content -->
                            <div class="section-content pos-relative">
                                <span class="section-tag">Favourite Clients</span>
                                <h2 class="section-title">Work With Trusted Comapny.</h2>
                            </div>
                            <!-- End Section Content -->
                        </div>
                    </div>

                    <div class="company-logo-display-wrapper">
                        <div class="row">
                            <div class="col">
                                <div class="company-logo-display-slider">
                                    <!-- Slider main container -->
                                    <div class="swiper-container">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Start Company Logo Slider Single Item -->
                                            <div class="company-logo-single-item swiper-slide">
                                                <a href="#" class="image">
                                                    <img src="assets/images/company-logo/company-logo-1.png" alt="">
                                                    <img src="assets/images/company-logo/1.png" alt="">
                                                </a>
                                            </div>
                                            <!-- End Company Logo Slider Single Item -->
                                            <!-- Start Company Logo Slider Single Item -->
                                            <div class="company-logo-single-item swiper-slide">
                                                <a href="#" class="image">
                                                    <img src="assets/images/company-logo/company-logo-2.png" alt="">
                                                    <img src="assets/images/company-logo/2.png" alt="">
                                                </a>
                                            </div>
                                            <!-- End Company Logo Slider Single Item -->
                                            <!-- Start Company Logo Slider Single Item -->
                                            <div class="company-logo-single-item swiper-slide">
                                                <a href="#" class="image">
                                                    <img src="assets/images/company-logo/company-logo-3.png" alt="">
                                                    <img src="assets/images/company-logo/3.png" alt="">
                                                </a>
                                            </div>
                                            <!-- End Company Logo Slider Single Item -->
                                            <!-- Start Company Logo Slider Single Item -->
                                            <div class="company-logo-single-item swiper-slide">
                                                <a href="#" class="image">
                                                    <img src="assets/images/company-logo/company-logo-4.png" alt="">
                                                    <img src="assets/images/company-logo/4.png" alt="">
                                                </a>
                                            </div>
                                            <!-- End Company Logo Slider Single Item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ...::: End Company Logo Display Section :::... -->

        <!-- ...::: Start Blog Feed Display Section :::... -->
        <div class="blog-feed-display-section section-gap-tb-165">
            <div class="blog-feed-display-box">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- Start Section Content -->
                            <div class="section-content pos-relative text-center">
                                <span class="section-tag">Blog Post</span>
                                <h2 class="section-title">Latest Tips & Tricks</h2>
                            </div>
                            <!-- End Section Content -->
                        </div>
                    </div>

                    <div class="blog-feed-display-wrapper">
                        <div class="row mb-n5">
                            <div class="col-12 mb-5">
                                <!-- Start Blog Feed Single Item -->
                                <div class="blog-feed-single-item">
                                    <div class="inner-shape inner-shape-top-right"></div>
                                    <a href="blog-details-sidebar-left.html" class="image">
                                        <img src="assets/images/blog/blog-feed-img-1.jpg" alt="">
                                    </a>
                                    <div class="content-box">
                                        <div class="content">
                                            <div class="post-meta">
                                                <a href="#" class="catagory">Business</a>
                                                <a href="#" class="date">07 February, 2021</a>
                                            </div>
                                            <h4 class="title"><a href="blog-details-sidebar-left.html">Don't wait until you officially started
                                                    business to line these up.</a></h4>
                                        </div>
                                        <a href="blog-details-sidebar-left.html" class="btn btn-md btn-outline-one icon-space-left">Read More<i class="icofont-double-right"></i></a>
                                    </div>

                                </div>
                                <!-- End Blog Feed Single Item -->
                            </div>
                            <div class="col-12 mb-5">
                                <!-- Start Blog Feed Single Item -->
                                <div class="blog-feed-single-item">
                                    <div class="inner-shape inner-shape-top-right"></div>
                                    <a href="blog-details-sidebar-left.html" class="image">
                                        <img src="assets/images/blog/blog-feed-img-2.jpg" alt="">
                                    </a>
                                    <div class="content-box">
                                        <div class="content">
                                            <div class="post-meta">
                                                <a href="#" class="catagory">Business</a>
                                                <a href="#" class="date">07 February, 2021</a>
                                            </div>
                                            <h4 class="title"><a href="blog-details-sidebar-left.html">Don't wait until you officially started
                                                    business to line these up.</a></h4>
                                        </div>
                                        <a href="blog-details-sidebar-left.html" class="btn btn-md btn-outline-one icon-space-left">Read More<i class="icofont-double-right"></i></a>
                                    </div>

                                </div>
                                <!-- End Blog Feed Single Item -->
                            </div>
                            <div class="col-12 mb-5">
                                <!-- Start Blog Feed Single Item -->
                                <div class="blog-feed-single-item">
                                    <div class="inner-shape inner-shape-top-right"></div>
                                    <a href="blog-details-sidebar-left.html" class="image">
                                        <img src="assets/images/blog/blog-feed-img-3.jpg" alt="">
                                    </a>
                                    <div class="content-box">
                                        <div class="content">
                                            <div class="post-meta">
                                                <a href="#" class="catagory">Business</a>
                                                <a href="#" class="date">07 February, 2021</a>
                                            </div>
                                            <h4 class="title"><a href="blog-details-sidebar-left.html">Don't wait until you officially started
                                                    business to line these up.</a></h4>
                                        </div>
                                        <a href="blog-details-sidebar-left.html" class="btn btn-md btn-outline-one icon-space-left">Read More<i class="icofont-double-right"></i></a>
                                    </div>

                                </div>
                                <!-- End Blog Feed Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ...::: End Blog Feed Display Section :::... -->

        <!-- ...::: Start Footer Section :::... -->
        <footer class="footer-section section-bg overflow-hidden pos-relative">
            <div class="footer-inner-shape-top-left"></div>
            <div class="footer-inner-shape-top-right"></div>
            <div class="footer-section-top section-gap-t-165">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Start Section Content -->
                            <div class="section-content pos-relative text-center">
                                <span class="section-tag">Get Latest Updates</span>
                                <h2 class="section-title">Subscribe For Newsletter</h2>
                            </div>
                            <!-- End Section Content -->
                        </div>
                    </div>
                    <div class="footer-top-wrapper text-center">
                        <div class="row">
                            <div class="col-12">
                                <form action="#" class="footer-newsletter">
                                    <input type="email" placeholder="demo@example.com">
                                    <button class="submit-btn" type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-center section-gap-tb-165">
                <div class="container">
                    <div class="row justify-content-between align-items-center mb-n5">
                        <div class="col-auto mb-5">
                            <!-- Start Single Footer Info -->
                            <div class="footer-single-info">
                                <a href="tel:+0123456789" class="info-box">
                                    <span class="icon"><i class="icofont-phone"></i></span>
                                    <span class="text">0123456789</span>
                                </a>
                            </div>
                            <!-- Start Single Footer Info -->
                        </div>
                        <div class="col-auto mb-5">
                            <!-- Start Single Footer Info -->
                            <div class="footer-single-info">
                                <a href="mailto:demo@example.com" class="info-box">
                                    <span class="icon"><i class="icofont-envelope-open"></i></span>
                                    <span class="text">demo@example.com</span>
                                </a>
                            </div>
                            <!-- Start Single Footer Info -->
                        </div>
                        <div class="col-auto mb-5">
                            <!-- Start Single Footer Info -->
                            <div class="footer-single-info">
                                <ul class="social-link">
                                    <li><a href="https://www.example.com" target="_blank"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="https://www.example.com" target="_blank"><i class="icofont-dribbble"></i></a></li>
                                    <li><a href="https://www.example.com" target="_blank"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!-- Start Single Footer Info -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-between align-items-center flex-column-reverse flex-md-row">
                        <div class="col-auto">
                            <div class="footer-copyright">
                                <p class="copyright-text">&copy; 2021 <a href="index.html">Lendex</a> Made with <i class="icofont-heart"></i> by <a href="https://hasthemes.com/" target="_blank">HasThemes</a> </p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="index.html" class="footer-logo">
                                <div class="logo">
                                    <img src="assets/images/logo/logo.png" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ...::: End Footer Section :::... -->

        <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
    </main>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    

    <script src="{{asset('frontend/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    
    <!--Plugins JS-->
    <script src="{{asset('frontend/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/jquery.appear.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/venobox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/jquery.waypoints.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/images-loaded.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/counter.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/ajax-mail.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/material-scrolltop.js')}}"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
