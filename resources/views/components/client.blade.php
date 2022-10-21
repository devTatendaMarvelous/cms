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
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
      <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
        <h4 class="mb-0 text-bold-400">Theme Customizer</h4>
        <p>Customize &amp; Preview in Real Time</p>
        <hr>
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Background Image</h6>
        <div class="cz-bg-image row">
          <div class="col mb-3"><img src="{{ asset('assets/img/sidebar-bg/01.jpg')}}" width="50" height="100" alt="Bg image1" class="rounded box-shadow-2"></div>
          <div class="col mb-3"><img src="{{ asset('assets/img/sidebar-bg/02.jpg')}}" width="50" height="100" alt="Bg image2" class="rounded box-shadow-2"></div>
          <div class="col mb-3"><img src="{{ asset('assets/img/sidebar-bg/03.jpg')}}" width="50" height="100" alt="Bg image3" class="rounded box-shadow-2"></div>
          <div class="col mb-3"><img src="{{ asset('assets/img/sidebar-bg/04.jpg')}}" width="50" height="100" alt="Bg image4" class="rounded box-shadow-2"></div>
          <div class="col mb-3"><img src="{{ asset('assets/img/sidebar-bg/05.jpg')}}" width="50" height="100" alt="Bg image5" class="rounded box-shadow-2"></div>
          <div class="col mb-3"><img src="{{ asset('assets/img/sidebar-bg/06.jpg')}}" width="50" height="100" alt="Bg image6" class="rounded box-shadow-2"></div>
          <div class="col mb-3"><img src="{{ asset('assets/img/sidebar-bg/07.jpg')}}" width="50" height="100" alt="Bg image7" class="rounded box-shadow-2"></div>
          <div class="col mb-3"><img src="{{ asset('assets/img/sidebar-bg/08.jpg')}}" width="50" height="100" alt="Bg image8" class="rounded box-shadow-2"></div>
        </div>
        <hr>
        <div class="togglebutton">
          <div class="switch"><span class="text-bold-400">Show / Hide Sidebar Bg Image</span>
            <div class="float-right">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input id="sidebar-bg-img" type="checkbox" checked="" class="custom-control-input cz-bg-image-display">
                <label for="sidebar-bg-img" class="custom-control-label"></label>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
        <div class="cz-bg-color">
          <div class="row p-1">
            <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="aqua-marine" class="gradient-aqua-marine d-block rounded box-shadow-2"></span></div>
            <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="sublime-vivid" class="gradient-sublime-vivid d-block rounded box-shadow-2"></span></div>
            <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="crystal-clear" class="gradient-crystal-clear d-block rounded box-shadow-2"></span></div>
            <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="timber" class="gradient-timber d-block rounded box-shadow-2"></span></div>
          </div>
          <div class="row p-1">
            <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="black" class="bg-black d-block rounded box-shadow-2"></span></div>
            <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="white" class="bg-white d-block rounded box-shadow-2"></span></div>
            <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="primary" class="bg-primary d-block rounded box-shadow-2"></span></div>
            <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="danger" class="bg-danger d-block rounded box-shadow-2"></span></div>
          </div>
        </div>
        <hr>
        <div class="togglebutton">
          <div class="switch"><span class="text-bold-400">Compact Menu</span>
            <div class="float-right">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                <label for="cz-compact-menu" class="custom-control-label"></label>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div>
          <label for="cz-sidebar-width" class="text-bold-400">Sidebar Width</label>
          <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
            <option value="small">Small</option>
            <option value="medium" selected="">Medium</option>
            <option value="large">Large</option>
          </select>
        </div>
      </div>
    </div>
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