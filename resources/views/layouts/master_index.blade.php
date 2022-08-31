<!DOCTYPE html>
<html lang="en">
 <!-- start Head -->
    @include('layouts.body.head')
 <!-- end Head -->

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{asset('frontend/assets/images/preloader.png')}}" alt="E&M">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        @include('layouts.body.header')
        <!-- end of header -->

         <!-- Start Body -->
         @include('layouts.body.body')
         <!-- end of Body -->

        <!-- start of wpo-site-footer-section -->
        @include('layouts.body.footer')
        <!-- end of wpo-site-footer-section -->


        <!-- color-switcher -->
        {{-- <div class="color-switcher-wrap">
            <div class="color-switcher-item">
                <div class="color-toggle-btn">
                    <i class="fa fa-cog"></i>
                </div>
                <ul id="switcher">
                    <li class="btn btn1" id="Button1"></li>
                    <li class="btn btn2" id="Button2"></li>
                    <li class="btn btn3" id="Button3"></li>
                    <li class="btn btn4" id="Button4"></li>
                    <li class="btn btn5" id="Button5"></li>
                    <li class="btn btn6" id="Button6"></li>
                    <li class="btn btn7" id="Button7"></li>
                    <li class="btn btn8" id="Button8"></li>
                    <li class="btn btn9" id="Button9"></li>
                </ul>
            </div>
        </div> --}}
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Plugins for this template -->
    <script src="{{asset('frontend/assets/js/modernizr.custom.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.dlmenu.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-plugin-collection.js')}}"></script>
    <!-- Moving Animation -->
    <script src="{{asset('frontend/assets/js/moving-animation.js')}}"></script>
    <!-- Custom script for this template -->
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
</body>

</html>