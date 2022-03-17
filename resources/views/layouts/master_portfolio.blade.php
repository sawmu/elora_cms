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

@include('layouts.body.header')



  <main id="main">
    @yield('portfolio')
            <!-- material-scrolltop button -->
            <button class="material-scrolltop" type="button"></button>

  </main><!-- End #main -->

@include('layouts.body.footer')






  <!-- Vendor JS Files -->

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