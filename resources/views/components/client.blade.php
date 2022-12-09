<!DOCTYPE html>
<html lang="en" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>eCommerce Dashboard - Convex bootstrap 4 admin dashboard template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/ico/apple-icon-60.html')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/ico/apple-icon-76.html')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/ico/apple-icon-120.html')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/ico/apple-icon-152.html')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/ico/favicon-32.png')}}')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css')}}">

    {{-- <script src="{{ asset('cart.js') }}"></script> --}}
     <link rel="stylesheet" type="text/css" href="{{ asset('cart.css') }}">
     <script src="{{ asset('cart.js') }}"></script>
  </head>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


    <x-cside/>


   <x-nav/>

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
{{$slot}}
          </div>
            </div>
          </div>
        </div>

        <footer class="footer footer-static footer-light">
          <p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; 2018 <a href="https://1.envato.market/pixinvent_portfolio" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
        </footer>

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

   <x-rightsidebar/>
    
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/core/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/prism.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/jquery.matchHeight-min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/screenfull.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/pace/pace.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/chartist.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="{{ asset('assets/js/app-sidebar.js')}}"></script>
    <script src="{{ asset('assets/js/notification-sidebar.js')}}"></script>
    <script src="{{ asset('assets/js/customizer.js')}}"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/js/dashboard-ecommerce.js')}}"></script>
    <!-- END PAGE LEVEL JS-->


    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/datatable/datatables.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/js/data-tables/datatable-basic.js')}}"></script>
       <script src="{{ asset('assets/js/form-validation.js')}}"></script>
    
    <!-- END PAGE LEVEL JS-->
  </body>


</html>