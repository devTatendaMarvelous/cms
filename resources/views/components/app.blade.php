<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
       
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/ico/apple-icon-60.html') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/ico/apple-icon-76.html') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/ico/apple-icon-120.html') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/ico/apple-icon-152.html') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/ico/favicon.ico') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/ico/favicon-32.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

<link rel="stylesheet" type="text/css" href="{{ asset('cart.css') }}">
     <script src="{{ asset('cart.js') }}"></script>

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">

     
    
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('logo.webp') }}" alt="">
                    <h4 style=""><strong>Canteen</strong></h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <form action="/menus/search" method="POST"    style="width:50%; min-width:500px; float:right;">
                                @csrf
                                
                            <div id="cart-search" class="row p-3">
                                <input type="text" name="search"class=" form-control order col-md-6 mr-2" placeholder="Search Food Items">
                              
                                <input type="submit" value="Search" class=" btn order col-5"  >
                            </div>
                    </form>
                    <ul class="navbar-nav me-auto col-md-6">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto col-md-4 ">
                    
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link drop down-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
           {{$slot}}
        </main>
    </div>

    
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/core/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/prism.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/screenfull.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/pace/pace.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="{{ asset('assets/js/app-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/notification-sidebar.js') }}"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
</body>
</html>
