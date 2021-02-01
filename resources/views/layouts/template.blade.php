<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pixel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  
  <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/owl.carousel/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!--======CSS Galeria ===============-->
   <!-- Vendor CSS Files -->
   
   <link href="{{asset('css/galeria/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/galeria/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/galeria/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/galeria/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/galeria/vendor/venobox/venobox.css')}}" rel="stylesheet">
   
 
   <!-- Template Main CSS File -->
   <link href="{{asset('css/galeria/css/style.css')}}" rel="stylesheet">
   <!--====== Fin CSS Galeria ===============-->


   <!-- CSS payment -->
  {{--<link rel="stylesheet" type="text/css" href="{{asset('style_payment/bootstrap/css/bootstrap.min.css')}}" />--}}
  <link rel="stylesheet" type="text/css" href="{{asset('style_payment/font-awesome/css/font-awesome.min.css')}}" />
  
  @yield('cssPaymentForm')

  <!-- =======================================================
  * Template Name: Arsha - v2.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      {{--Navbar--}}  
      @include('layouts.partials.nav')
    </div>
  </header><!-- End Header -->

  <!-- ======= Banner Section ======= -->
      @include('layouts.partials.banner')
 <!-- ======= fin Banner Section ======== -->


 <!-- ======= Main Section ======= -->
 @include('layouts.main')
 <!-- ======= fin Main Section ======== -->
  
  <!-- ======= Footer ======= -->
  @include('layouts.partials.footer')
  <!-- ======= Fin Footer ======= -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>