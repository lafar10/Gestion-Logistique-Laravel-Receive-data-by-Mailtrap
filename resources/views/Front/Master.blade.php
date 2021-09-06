<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Fayaj - @yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/delivery-truck (1).png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- StyleSheet -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{asset('./css/apps.css')}}" rel="stylesheet" >

    <script src="{{asset('./js/jss.js')}}" ></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="./css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="./css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="./css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="./css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="./css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="./css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="./css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="./css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/responsive.css">


    <!-- Google Maps JavaScript library -->




</head>

<body class="js">

    @include('sweetalert::alert')

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->



    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li>
                                <svg xmlns="http://www.w3.org/2000/svg" style="color:orange;"  width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                    <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                                </svg> +212 655-446586 &nbsp;&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" style="color:orange;" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                </svg> contact@fayaj.ma</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">

                                    @guest
                                        @if (Route::has('login'))
                                            <li >
                                                @if(app()->getLocale() == 'ar')

                                                <a  href="{{ route('login') }}">{{ __('home.login') }}</a>
                                                        |   <svg xmlns="http://www.w3.org/2000/svg" style="color:orange;" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                                        </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:orange;" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                                    </svg> <a  href="{{ route('login') }}">{{ __('home.login') }}</a>
                                                @endif


                                        @endif

                                        @if (Route::has('register'))
                                                @if(app()->getLocale() == 'ar')
                                                    <a  href="{{ route('register') }}">{{ __('home.register') }}</a>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:orange;" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                                    </svg>

                                                @else
                                                |   <svg xmlns="http://www.w3.org/2000/svg" style="color:orange;" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                                    </svg>  <a  href="{{ route('register') }}">{{ __('home.register') }}</a>
                                                @endif

                                            </li>
                                        @endif
                                    @else
                                        <li >
                                            <a id="navbarDropdown" class="dropdown-toggle" style="color:orange;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                                </svg> {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <form action="{{ route('edit.user.acount') }}" method="get">
                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                    <button type="submit" class="dropdown-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="color:orange;" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                                        </svg>  {{ __('home.mon Compte') }}
                                                    </button>
                                                </form>

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:orange;"  width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                                    </svg>   {{ __('home.logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                    <li>
                                        <a href="{{route('switch.locale','en')}}"><img src="images/fr.webp" style="width:20px;height:15px;" /> Fr</a> |
                                        <a href="{{route('switch.locale','ar')}}"><img src="images/mr.png" style="width:20px;height:15px;" /> Ar</a>  

                                    </li>


                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner" style="height:100px;">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <!-- Logo -->

                        <div align="center">
                            <a href="{{route('index')}}"  align="center"><h3 style="font-style: italic;" ><img src="images/delivery-truck (1).png" style="width:80px;height:60px;margin-bottom:3px;" alt="Fayaj"> Fayaj</h3></a>
                        </div>
                        <!--/ End Logo 
                        / End Search Form-->
                        <!--<button class="navbar-toggler" type="button"  style="border-color:red;" data-bs-toggle="offcanvas" aria-expanded="false" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            *
                        </button>-->

                    </div>
                    <div class="col-3">
                        <div align="right" style="margin-top:30px;">
                            <a class="navbar-toggler" id="menunav" data-bs-toggle="offcanvas" aria-expanded="false" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </header>






    <main>
        @yield('content')
        <br>
    </main>


    <footer class="footer" id="sec-4">
        <!-- Footer Top -->
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo">
                                <a href="{{route('index')}}"  align="center"><h3 style="font-style: italic;color:white;" ><img src="images/delivery-truck (1).png" style="width:130px;height:100px;" alt="Fayaj"> Fayaj</h3></a>
                            </div>
                            <p class="text">{{ __('home.fayaj text') }}</p>
                            <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+212 655-446586</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>{{ __('home.secvices client') }}</h4>
                            <ul>
                                @guest
                                        @if (Route::has('login'))
                                            <li >
                                                <a  href="{{ route('login') }}">{{ __('home.login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li >
                                               <a  href="{{ route('register') }}">{{ __('home.register') }}</a>
                                            </li>
                                        @endif
                                    @else

                                    @endguest
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>{{ __('home.information') }}</h4>
                            <ul>
                                <li><a href="{{route('index')}}#sec-3">{{ __('home.connectez nous') }}</a></li>
                                <li><a href="{{route('index')}}#sec-4">{{ __('home.services') }}</a></li>
                                <li><a href="#">{{ __('home.À Propos De Nous') }}</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>{{ __('home.get in touch') }}</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>NO. 342 - London Oxford Street.</li>
                                    <li>012 Maroc.</li>
                                    <li>contact@fayaj.ma</li>
                                    <li>+212 655-446586</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-12" >
                            <div >
                                <p align="center">Created By Lafar Ayoub | Copyright © 2020 - All Rights Reserved.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

            <h5 id="offcanvasRightLabel">{{ __('home.menu') }}</h5>
        </div>
        <div class="offcanvas-body" style="text-align:right;">

                <ul class="navbar-link " >
                    <li class="nav-link text-dark">
                        <a href="{{route('index')}}#sec-1" ><img src="images/aaa.png" style="width:29px;height:32px;"> {{ __('home.transporteur') }}</a>
                    </li>
                    <hr>
                    <li class="nav-link text-dark">
                        <a href="{{route('index')}}#sec-2" ><img src="images/value.png" style="width:29px;height:32px;margin-bottom:3px;"> {{ __('home.notre valeur') }}</a>
                    </li>
                    <hr>
                    <li class="nav-link text-dark">
                        <a href="{{route('index')}}#sec-3"><img src="images/consult.png" style="width:29px;height:32px;"> {{ __('home.nos services') }}</a>
                    </li>
                    <hr>
                    <li class="nav-link text-dark">
                        <a href="{{route('index')}}#sec-4" ><img src="images/a4.png" style="width:27px;height:32px;"> {{ __('home.connectez vous') }}</a>
                    </li>
                    <hr>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-link text-dark">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:dark;" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>   {{ __('home.login') }}</a>
                            </li>
                            <hr>
                        @endif
                            <hr>
                        @if (Route::has('register'))
                            <li class="nav-link text-dark">
                             <a class="nav-link"  href="{{ route('register') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" style="color:dark;" width="20" height="20" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg> {{ __('home.register') }}</a>
                            </li>
                            <hr>
                            @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" id="aa"  class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a id="aa"  class="dropdown-item text-dark" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            تسجيل الخروج
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

    <script type="text/javascript">

        var villes = [
            {
                "id": "0",
                "ville": "Afourar",
                "region": "5"
            },
            {
                "id": "1",
                "ville": "Agadir",
                "region": "9"
            },
            {
                "id": "2",
                "ville": "Agdz",
                "region": "8"
            },
            {
                "id": "3",
                "ville": "Aghbala",
                "region": "5"
            },
            {
                "id": "4",
                "ville": "Agni Izimmer",
                "region": "9"
            },
            {
                "id": "5",
                "ville": "Agourai",
                "region": "3"
            },
            {
                "id": "6",
                "ville": "Ahfir",
                "region": "2"
            },
            {
                "id": "7",
                "ville": "Ain El Aouda",
                "region": "4"
            },
            {
                "id": "8",
                "ville": "Ain Taoujdate",
                "region": "3"
            },
            {
                "id": "9",
                "ville": "Ait Daoud",
                "region": "7"
            },
            {
                "id": "10",
                "ville": "Ajdir‎",
                "region": "1"
            },
            {
                "id": "11",
                "ville": "Akchour",
                "region": "1"
            },
            {
                "id": "12",
                "ville": "Akka",
                "region": "9"
            },
            {
                "id": "13",
                "ville": "Aklim",
                "region": "2"
            },
            {
                "id": "14",
                "ville": "Aknoul‎",
                "region": "3"
            },
            {
                "id": "15",
                "ville": "Al Aroui",
                "region": "2"
            },
            {
                "id": "16",
                "ville": "Al Hoceïma‎",
                "region": "1"
            },
            {
                "id": "17",
                "ville": "Alnif",
                "region": "8"
            },
            {
                "id": "18",
                "ville": "Amalou Ighriben",
                "region": "5"
            },
            {
                "id": "19",
                "ville": "Amizmiz",
                "region": "7"
            },
            {
                "id": "20",
                "ville": "Anzi",
                "region": "9"
            },
            {
                "id": "21",
                "ville": "Aoufous",
                "region": "8"
            },
            {
                "id": "22",
                "ville": "Aoulouz",
                "region": "9"
            },
            {
                "id": "23",
                "ville": "Aourir",
                "region": "9"
            },
            {
                "id": "24",
                "ville": "Arazane",
                "region": "9"
            },
            {
                "id": "25",
                "ville": "Arbaoua",
                "region": "4"
            },
            {
                "id": "26",
                "ville": "Arfoud",
                "region": "8"
            },
            {
                "id": "27",
                "ville": "Assa",
                "region": "10"
            },
            {
                "id": "28",
                "ville": "Assahrij",
                "region": "7"
            },
            {
                "id": "29",
                "ville": "Assilah",
                "region": "1"
            },
            {
                "id": "30",
                "ville": "Awsard",
                "region": "12"
            },
            {
                "id": "31",
                "ville": "Azemmour",
                "region": "6"
            },
            {
                "id": "32",
                "ville": "Azilal",
                "region": "5"
            },
            {
                "id": "33",
                "ville": "Azrou",
                "region": "3"
            },
            {
                "id": "34",
                "ville": "Aïn Bni Mathar",
                "region": "2"
            },
            {
                "id": "35",
                "ville": "Aïn Cheggag",
                "region": "3"
            },
            {
                "id": "36",
                "ville": "Aïn Dorij",
                "region": "1"
            },
            {
                "id": "37",
                "ville": "Aïn Erreggada",
                "region": "2"
            },
            {
                "id": "38",
                "ville": "Aïn Harrouda",
                "region": "6"
            },
            {
                "id": "39",
                "ville": "Aïn Jemaa",
                "region": "3"
            },
            {
                "id": "40",
                "ville": "Aïn Karma",
                "region": "3"
            },
            {
                "id": "41",
                "ville": "Aïn Leuh",
                "region": "3"
            },
            {
                "id": "42",
                "ville": "Aït Attab",
                "region": "5"
            },
            {
                "id": "43",
                "ville": "Aït Baha",
                "region": "9"
            },
            {
                "id": "44",
                "ville": "Aït Boubidmane",
                "region": "3"
            },
            {
                "id": "45",
                "ville": "Aït Hichem‎",
                "region": "1"
            },
            {
                "id": "46",
                "ville": "Aït Iaâza",
                "region": "9"
            },
            {
                "id": "47",
                "ville": "Aït Ishaq",
                "region": "5"
            },
            {
                "id": "48",
                "ville": "Aït Majden",
                "region": "5"
            },
            {
                "id": "49",
                "ville": "Aït Melloul",
                "region": "9"
            },
            {
                "id": "50",
                "ville": "Aït Ourir",
                "region": "7"
            },
            {
                "id": "51",
                "ville": "Aït Yalla",
                "region": "8"
            },
            {
                "id": "52",
                "ville": "Bab Berred",
                "region": "1"
            },
            {
                "id": "53",
                "ville": "Bab Taza",
                "region": "1"
            },
            {
                "id": "54",
                "ville": "Bejaâd",
                "region": "5"
            },
            {
                "id": "55",
                "ville": "Ben Ahmed",
                "region": "6"
            },
            {
                "id": "56",
                "ville": "Ben Guerir",
                "region": "7"
            },
            {
                "id": "57",
                "ville": "Ben Sergao",
                "region": "9"
            },
            {
                "id": "58",
                "ville": "Ben Taïeb",
                "region": "2"
            },
            {
                "id": "59",
                "ville": "Ben Yakhlef",
                "region": "6"
            },
            {
                "id": "60",
                "ville": "Beni Ayat",
                "region": "5"
            },
            {
                "id": "61",
                "ville": "Benslimane",
                "region": "6"
            },
            {
                "id": "62",
                "ville": "Berkane",
                "region": "2"
            },
            {
                "id": "63",
                "ville": "Berrechid",
                "region": "6"
            },
            {
                "id": "64",
                "ville": "Bhalil",
                "region": "3"
            },
            {
                "id": "65",
                "ville": "Bin elouidane",
                "region": "5"
            },
            {
                "id": "66",
                "ville": "Biougra",
                "region": "9"
            },
            {
                "id": "67",
                "ville": "Bir Jdid",
                "region": "6"
            },
            {
                "id": "68",
                "ville": "Bni Ansar",
                "region": "2"
            },
            {
                "id": "69",
                "ville": "Bni Bouayach‎",
                "region": "1"
            },
            {
                "id": "70",
                "ville": "Bni Chiker",
                "region": "2"
            },
            {
                "id": "71",
                "ville": "Bni Drar",
                "region": "2"
            },
            {
                "id": "72",
                "ville": "Bni Hadifa‎",
                "region": "1"
            },
            {
                "id": "73",
                "ville": "Bni Tadjite",
                "region": "2"
            },
            {
                "id": "74",
                "ville": "Bouanane",
                "region": "2"
            },
            {
                "id": "75",
                "ville": "Bouarfa",
                "region": "2"
            },
            {
                "id": "76",
                "ville": "Boudnib",
                "region": "8"
            },
            {
                "id": "77",
                "ville": "Boufakrane",
                "region": "3"
            },
            {
                "id": "78",
                "ville": "Bouguedra",
                "region": "7"
            },
            {
                "id": "79",
                "ville": "Bouhdila",
                "region": "2"
            },
            {
                "id": "80",
                "ville": "Bouizakarne",
                "region": "10"
            },
            {
                "id": "81",
                "ville": "Boujdour‎",
                "region": "11"
            },
            {
                "id": "82",
                "ville": "Boujniba",
                "region": "5"
            },
            {
                "id": "83",
                "ville": "Boulanouare",
                "region": "5"
            },
            {
                "id": "84",
                "ville": "Boulemane",
                "region": "3"
            },
            {
                "id": "85",
                "ville": "Boumalne-Dadès",
                "region": "8"
            },
            {
                "id": "86",
                "ville": "Boumia",
                "region": "8"
            },
            {
                "id": "87",
                "ville": "Bouskoura",
                "region": "6"
            },
            {
                "id": "88",
                "ville": "Bouznika",
                "region": "6"
            },
            {
                "id": "89",
                "ville": "Bradia",
                "region": "5"
            },
            {
                "id": "90",
                "ville": "Brikcha",
                "region": "1"
            },
            {
                "id": "91",
                "ville": "Bzou",
                "region": "5"
            },
            {
                "id": "92",
                "ville": "Béni Mellal",
                "region": "5"
            },
            {
                "id": "93",
                "ville": "Casablanca",
                "region": "6"
            },
            {
                "id": "94",
                "ville": "Chefchaouen",
                "region": "1"
            },
            {
                "id": "95",
                "ville": "Chichaoua",
                "region": "7"
            },
            {
                "id": "96",
                "ville": "Dar Bni Karrich",
                "region": "1"
            },
            {
                "id": "97",
                "ville": "Dar Chaoui",
                "region": "1"
            },
            {
                "id": "98",
                "ville": "Dar El Kebdani",
                "region": "2"
            },
            {
                "id": "99",
                "ville": "Dar Gueddari",
                "region": "4"
            },
            {
                "id": "100",
                "ville": "Dar Oulad Zidouh",
                "region": "5"
            },
            {
                "id": "101",
                "ville": "Dcheira El Jihadia",
                "region": "9"
            },
            {
                "id": "102",
                "ville": "Debdou",
                "region": "2"
            },
            {
                "id": "103",
                "ville": "Demnate",
                "region": "5"
            },
            {
                "id": "104",
                "ville": "Deroua",
                "region": "6"
            },
            {
                "id": "105",
                "ville": "Douar Kannine",
                "region": "2"
            },
            {
                "id": "106",
                "ville": "Dra'a",
                "region": "8"
            },
            {
                "id": "107",
                "ville": "Drargua",
                "region": "9"
            },
            {
                "id": "108",
                "ville": "Driouch",
                "region": "2"
            },
            {
                "id": "109",
                "ville": "Echemmaia",
                "region": "7"
            },
            {
                "id": "110",
                "ville": "El Aïoun Sidi Mellouk",
                "region": "2"
            },
            {
                "id": "111",
                "ville": "El Borouj",
                "region": "6"
            },
            {
                "id": "112",
                "ville": "El Gara",
                "region": "6"
            },
            {
                "id": "113",
                "ville": "El Guerdane",
                "region": "9"
            },
            {
                "id": "114",
                "ville": "El Hajeb",
                "region": "3"
            },
            {
                "id": "115",
                "ville": "El Hanchane",
                "region": "7"
            },
            {
                "id": "116",
                "ville": "El Jadida",
                "region": "6"
            },
            {
                "id": "117",
                "ville": "El Kelaâ des Sraghna",
                "region": "7"
            },
            {
                "id": "118",
                "ville": "El Ksiba",
                "region": "5"
            },
            {
                "id": "119",
                "ville": "El Marsa‎",
                "region": "11"
            },
            {
                "id": "120",
                "ville": "El Menzel",
                "region": "3"
            },
            {
                "id": "121",
                "ville": "El Ouatia",
                "region": "10"
            },
            {
                "id": "122",
                "ville": "Elkbab",
                "region": "5"
            },
            {
                "id": "123",
                "ville": "Er-Rich",
                "region": "5"
            },
            {
                "id": "124",
                "ville": "Errachidia",
                "region": "8"
            },
            {
                "id": "125",
                "ville": "Es-Semara",
                "region": "11"
            },
            {
                "id": "126",
                "ville": "Essaouira",
                "region": "7"
            },
            {
                "id": "127",
                "ville": "Fam El Hisn",
                "region": "9"
            },
            {
                "id": "128",
                "ville": "Farkhana",
                "region": "2"
            },
            {
                "id": "129",
                "ville": "Figuig",
                "region": "2"
            },
            {
                "id": "130",
                "ville": "Fnideq",
                "region": "1"
            },
            {
                "id": "131",
                "ville": "Foum Jamaa",
                "region": "5"
            },
            {
                "id": "132",
                "ville": "Foum Zguid",
                "region": "9"
            },
            {
                "id": "133",
                "ville": "Fquih Ben Salah",
                "region": "5"
            },
            {
                "id": "134",
                "ville": "Fraïta",
                "region": "7"
            },
            {
                "id": "135",
                "ville": "Fès",
                "region": "3"
            },
            {
                "id": "136",
                "ville": "Gardmit",
                "region": "8"
            },
            {
                "id": "137",
                "ville": "Ghafsai‎",
                "region": "3"
            },
            {
                "id": "138",
                "ville": "Ghmate",
                "region": "7"
            },
            {
                "id": "139",
                "ville": "Goulmima",
                "region": "8"
            },
            {
                "id": "140",
                "ville": "Gourrama",
                "region": "8"
            },
            {
                "id": "141",
                "ville": "Guelmim",
                "region": "10"
            },
            {
                "id": "142",
                "ville": "Guercif‎",
                "region": "2"
            },
            {
                "id": "143",
                "ville": "Gueznaia",
                "region": "1"
            },
            {
                "id": "144",
                "ville": "Guigou",
                "region": "3"
            },
            {
                "id": "145",
                "ville": "Guisser",
                "region": "6"
            },
            {
                "id": "146",
                "ville": "Had Bouhssoussen",
                "region": "5"
            },
            {
                "id": "147",
                "ville": "Had Kourt",
                "region": "4"
            },
            {
                "id": "148",
                "ville": "Haj Kaddour",
                "region": "3"
            },
            {
                "id": "149",
                "ville": "Harhoura",
                "region": "4"
            },
            {
                "id": "150",
                "ville": "Harte Lyamine",
                "region": "8"
            },
            {
                "id": "151",
                "ville": "Hattane",
                "region": "5"
            },
            {
                "id": "152",
                "ville": "Hrara",
                "region": "7"
            },
            {
                "id": "153",
                "ville": "Ida Ougnidif",
                "region": "9"
            },
            {
                "id": "154",
                "ville": "Ifrane",
                "region": "3"
            },
            {
                "id": "155",
                "ville": "Ifri",
                "region": "8"
            },
            {
                "id": "156",
                "ville": "Igdamen",
                "region": "9"
            },
            {
                "id": "157",
                "ville": "Ighil n'Oumgoun",
                "region": "8"
            },
            {
                "id": "158",
                "ville": "Ighoud",
                "region": "7"
            },
            {
                "id": "159",
                "ville": "Ighounane",
                "region": "8"
            },
            {
                "id": "160",
                "ville": "Ihddaden",
                "region": "2"
            },
            {
                "id": "161",
                "ville": "Imassine",
                "region": "8"
            },
            {
                "id": "162",
                "ville": "Imintanoute",
                "region": "7"
            },
            {
                "id": "163",
                "ville": "Imouzzer Kandar",
                "region": "3"
            },
            {
                "id": "164",
                "ville": "Imouzzer Marmoucha",
                "region": "3"
            },
            {
                "id": "165",
                "ville": "Imzouren‎",
                "region": "1"
            },
            {
                "id": "166",
                "ville": "Inahnahen‎",
                "region": "1"
            },
            {
                "id": "167",
                "ville": "Inezgane",
                "region": "9"
            },
            {
                "id": "168",
                "ville": "Irherm",
                "region": "9"
            },
            {
                "id": "169",
                "ville": "Issaguen (Ketama)‎",
                "region": "1"
            },
            {
                "id": "170",
                "ville": "Itzer",
                "region": "8"
            },
            {
                "id": "171",
                "ville": "Jamâat Shaim",
                "region": "7"
            },
            {
                "id": "172",
                "ville": "Jaâdar",
                "region": "2"
            },
            {
                "id": "173",
                "ville": "Jebha",
                "region": "1"
            },
            {
                "id": "174",
                "ville": "Jerada",
                "region": "2"
            },
            {
                "id": "175",
                "ville": "Jorf",
                "region": "8"
            },
            {
                "id": "176",
                "ville": "Jorf El Melha",
                "region": "4"
            },
            {
                "id": "177",
                "ville": "Jorf Lasfar",
                "region": "6"
            },
            {
                "id": "178",
                "ville": "Karia",
                "region": "3"
            },
            {
                "id": "179",
                "ville": "Karia (El Jadida)‎",
                "region": "6"
            },
            {
                "id": "180",
                "ville": "Karia Ba Mohamed‎",
                "region": "3"
            },
            {
                "id": "181",
                "ville": "Kariat Arekmane",
                "region": "2"
            },
            {
                "id": "182",
                "ville": "Kasba Tadla",
                "region": "5"
            },
            {
                "id": "183",
                "ville": "Kassita",
                "region": "2"
            },
            {
                "id": "184",
                "ville": "Kattara",
                "region": "7"
            },
            {
                "id": "185",
                "ville": "Kehf Nsour",
                "region": "5"
            },
            {
                "id": "186",
                "ville": "Kelaat-M'Gouna",
                "region": "8"
            },
            {
                "id": "187",
                "ville": "Kerouna",
                "region": "2"
            },
            {
                "id": "188",
                "ville": "Kerrouchen",
                "region": "5"
            },
            {
                "id": "189",
                "ville": "Khemis Zemamra",
                "region": "6"
            },
            {
                "id": "190",
                "ville": "Khenichet",
                "region": "4"
            },
            {
                "id": "191",
                "ville": "Khouribga",
                "region": "5"
            },
            {
                "id": "192",
                "ville": "Khémis Sahel",
                "region": "1"
            },
            {
                "id": "193",
                "ville": "Khémisset",
                "region": "4"
            },
            {
                "id": "194",
                "ville": "Khénifra",
                "region": "5"
            },
            {
                "id": "195",
                "ville": "Ksar El Kébir",
                "region": "1"
            },
            {
                "id": "196",
                "ville": "Kénitra",
                "region": "4"
            },
            {
                "id": "197",
                "ville": "Laaounate",
                "region": "6"
            },
            {
                "id": "198",
                "ville": "Laayoune‎",
                "region": "11"
            },
            {
                "id": "199",
                "ville": "Lakhsas",
                "region": "9"
            },
            {
                "id": "200",
                "ville": "Lakhsass",
                "region": "9"
            },
            {
                "id": "201",
                "ville": "Lalla Mimouna",
                "region": "4"
            },
            {
                "id": "202",
                "ville": "Lalla Takerkoust",
                "region": "7"
            },
            {
                "id": "203",
                "ville": "Larache",
                "region": "1"
            },
            {
                "id": "204",
                "ville": "Laâtamna",
                "region": "2"
            },
            {
                "id": "205",
                "ville": "Loudaya",
                "region": "7"
            },
            {
                "id": "206",
                "ville": "Loulad",
                "region": "6"
            },
            {
                "id": "207",
                "ville": "Lqliâa",
                "region": "9"
            },
            {
                "id": "208",
                "ville": "Lâattaouia",
                "region": "7"
            },
            {
                "id": "209",
                "ville": "M'diq",
                "region": "1"
            },
            {
                "id": "210",
                "ville": "M'haya",
                "region": "3"
            },
            {
                "id": "211",
                "ville": "M'rirt",
                "region": "5"
            },
            {
                "id": "212",
                "ville": "M'semrir",
                "region": "8"
            },
            {
                "id": "213",
                "ville": "Madagh",
                "region": "2"
            },
            {
                "id": "214",
                "ville": "Marrakech",
                "region": "7"
            },
            {
                "id": "215",
                "ville": "Martil",
                "region": "1"
            },
            {
                "id": "216",
                "ville": "Massa (Maroc)",
                "region": "9"
            },
            {
                "id": "217",
                "ville": "Mechra Bel Ksiri",
                "region": "4"
            },
            {
                "id": "218",
                "ville": "Megousse",
                "region": "9"
            },
            {
                "id": "219",
                "ville": "Mehdia",
                "region": "4"
            },
            {
                "id": "220",
                "ville": "Meknès‎",
                "region": "3"
            },
            {
                "id": "221",
                "ville": "Midar",
                "region": "2"
            },
            {
                "id": "222",
                "ville": "Midelt",
                "region": "8"
            },
            {
                "id": "223",
                "ville": "Missour",
                "region": "3"
            },
            {
                "id": "224",
                "ville": "Mohammadia",
                "region": "6"
            },
            {
                "id": "225",
                "ville": "Moqrisset",
                "region": "1"
            },
            {
                "id": "226",
                "ville": "Moulay Abdallah",
                "region": "6"
            },
            {
                "id": "227",
                "ville": "Moulay Ali Cherif",
                "region": "8"
            },
            {
                "id": "228",
                "ville": "Moulay Bouazza",
                "region": "5"
            },
            {
                "id": "229",
                "ville": "Moulay Bousselham",
                "region": "4"
            },
            {
                "id": "230",
                "ville": "Moulay Brahim",
                "region": "7"
            },
            {
                "id": "231",
                "ville": "Moulay Idriss Zerhoun",
                "region": "3"
            },
            {
                "id": "232",
                "ville": "Moulay Yaâcoub",
                "region": "3"
            },
            {
                "id": "233",
                "ville": "Moussaoua",
                "region": "3"
            },
            {
                "id": "234",
                "ville": "MyAliCherif",
                "region": "8"
            },
            {
                "id": "235",
                "ville": "Mzouda",
                "region": "7"
            },
            {
                "id": "236",
                "ville": "Médiouna",
                "region": "6"
            },
            {
                "id": "237",
                "ville": "N'Zalat Bni Amar",
                "region": "3"
            },
            {
                "id": "238",
                "ville": "Nador",
                "region": "2"
            },
            {
                "id": "239",
                "ville": "Naima",
                "region": "2"
            },
            {
                "id": "240",
                "ville": "Oualidia",
                "region": "6"
            },
            {
                "id": "241",
                "ville": "Ouaouizeght",
                "region": "5"
            },
            {
                "id": "242",
                "ville": "Ouaoumana",
                "region": "5"
            },
            {
                "id": "243",
                "ville": "Ouarzazate",
                "region": "8"
            },
            {
                "id": "244",
                "ville": "Ouazzane",
                "region": "1"
            },
            {
                "id": "245",
                "ville": "Oued Amlil‎",
                "region": "3"
            },
            {
                "id": "246",
                "ville": "Oued Heimer",
                "region": "2"
            },
            {
                "id": "247",
                "ville": "Oued Ifrane",
                "region": "3"
            },
            {
                "id": "248",
                "ville": "Oued Laou",
                "region": "1"
            },
            {
                "id": "249",
                "ville": "Oued Rmel",
                "region": "1"
            },
            {
                "id": "250",
                "ville": "Oued Zem",
                "region": "5"
            },
            {
                "id": "251",
                "ville": "Oued-Eddahab",
                "region": "12"
            },
            {
                "id": "252",
                "ville": "Oujda",
                "region": "2"
            },
            {
                "id": "253",
                "ville": "Oulad Abbou",
                "region": "6"
            },
            {
                "id": "254",
                "ville": "Oulad Amrane",
                "region": "6"
            },
            {
                "id": "255",
                "ville": "Oulad Ayad",
                "region": "5"
            },
            {
                "id": "256",
                "ville": "Oulad Berhil",
                "region": "9"
            },
            {
                "id": "257",
                "ville": "Oulad Frej",
                "region": "6"
            },
            {
                "id": "258",
                "ville": "Oulad Ghadbane",
                "region": "6"
            },
            {
                "id": "259",
                "ville": "Oulad H'Riz Sahel",
                "region": "6"
            },
            {
                "id": "260",
                "ville": "Oulad M'Barek",
                "region": "5"
            },
            {
                "id": "261",
                "ville": "Oulad M'rah",
                "region": "6"
            },
            {
                "id": "262",
                "ville": "Oulad Saïd",
                "region": "6"
            },
            {
                "id": "263",
                "ville": "Oulad Sidi Ben Daoud",
                "region": "6"
            },
            {
                "id": "264",
                "ville": "Oulad Teïma",
                "region": "9"
            },
            {
                "id": "265",
                "ville": "Oulad Yaich",
                "region": "5"
            },
            {
                "id": "266",
                "ville": "Oulad Zbair‎",
                "region": "3"
            },
            {
                "id": "267",
                "ville": "Ouled Tayeb",
                "region": "3"
            },
            {
                "id": "268",
                "ville": "Oulmès",
                "region": "4"
            },
            {
                "id": "269",
                "ville": "Ounagha",
                "region": "7"
            },
            {
                "id": "270",
                "ville": "Outat El Haj",
                "region": "3"
            },
            {
                "id": "271",
                "ville": "Point Cires",
                "region": "1"
            },
            {
                "id": "272",
                "ville": "Rabat",
                "region": "4"
            },
            {
                "id": "273",
                "ville": "Ras El Aïn",
                "region": "6"
            },
            {
                "id": "274",
                "ville": "Ras El Ma",
                "region": "2"
            },
            {
                "id": "275",
                "ville": "Ribate El Kheir",
                "region": "3"
            },
            {
                "id": "276",
                "ville": "Rissani",
                "region": "8"
            },
            {
                "id": "277",
                "ville": "Rommani",
                "region": "4"
            },
            {
                "id": "278",
                "ville": "Sabaa Aiyoun",
                "region": "3"
            },
            {
                "id": "279",
                "ville": "Safi",
                "region": "7"
            },
            {
                "id": "280",
                "ville": "Salé",
                "region": "4"
            },
            {
                "id": "281",
                "ville": "Sarghine",
                "region": "8"
            },
            {
                "id": "282",
                "ville": "Saïdia",
                "region": "2"
            },
            {
                "id": "283",
                "ville": "Sebt El Maârif",
                "region": "6"
            },
            {
                "id": "284",
                "ville": "Sebt Gzoula",
                "region": "7"
            },
            {
                "id": "285",
                "ville": "Sebt Jahjouh",
                "region": "3"
            },
            {
                "id": "286",
                "ville": "Selouane",
                "region": "2"
            },
            {
                "id": "287",
                "ville": "Settat",
                "region": "6"
            },
            {
                "id": "288",
                "ville": "Sid L'Mokhtar",
                "region": "7"
            },
            {
                "id": "289",
                "ville": "Sid Zouin",
                "region": "7"
            },
            {
                "id": "290",
                "ville": "Sidi Abdallah Ghiat",
                "region": "7"
            },
            {
                "id": "291",
                "ville": "Sidi Addi",
                "region": "3"
            },
            {
                "id": "292",
                "ville": "Sidi Ahmed",
                "region": "7"
            },
            {
                "id": "293",
                "ville": "Sidi Ali Ban Hamdouche",
                "region": "6"
            },
            {
                "id": "294",
                "ville": "Sidi Allal El Bahraoui",
                "region": "4"
            },
            {
                "id": "295",
                "ville": "Sidi Allal Tazi",
                "region": "4"
            },
            {
                "id": "296",
                "ville": "Sidi Bennour",
                "region": "6"
            },
            {
                "id": "297",
                "ville": "Sidi Bou Othmane",
                "region": "7"
            },
            {
                "id": "298",
                "ville": "Sidi Boubker",
                "region": "2"
            },
            {
                "id": "299",
                "ville": "Sidi Bouknadel",
                "region": "4"
            },
            {
                "id": "300",
                "ville": "Sidi Bouzid",
                "region": "6"
            },
            {
                "id": "301",
                "ville": "Sidi Ifni",
                "region": "10"
            },
            {
                "id": "302",
                "ville": "Sidi Jaber",
                "region": "5"
            },
            {
                "id": "303",
                "ville": "Sidi Kacem",
                "region": "4"
            },
            {
                "id": "304",
                "ville": "Sidi Lyamani",
                "region": "1"
            },
            {
                "id": "305",
                "ville": "Sidi Mohamed ben Abdallah el-Raisuni",
                "region": "1"
            },
            {
                "id": "306",
                "ville": "Sidi Rahhal",
                "region": "7"
            },
            {
                "id": "307",
                "ville": "Sidi Rahhal Chataï",
                "region": "6"
            },
            {
                "id": "308",
                "ville": "Sidi Slimane",
                "region": "4"
            },
            {
                "id": "309",
                "ville": "Sidi Slimane Echcharaa",
                "region": "2"
            },
            {
                "id": "310",
                "ville": "Sidi Smaïl",
                "region": "6"
            },
            {
                "id": "311",
                "ville": "Sidi Taibi",
                "region": "4"
            },
            {
                "id": "312",
                "ville": "Sidi Yahya El Gharb",
                "region": "4"
            },
            {
                "id": "313",
                "ville": "Skhinate",
                "region": "3"
            },
            {
                "id": "314",
                "ville": "Skhirate",
                "region": "4"
            },
            {
                "id": "315",
                "ville": "Skhour Rehamna",
                "region": "7"
            },
            {
                "id": "316",
                "ville": "Skoura",
                "region": "8"
            },
            {
                "id": "317",
                "ville": "Smimou",
                "region": "7"
            },
            {
                "id": "318",
                "ville": "Soualem",
                "region": "6"
            },
            {
                "id": "319",
                "ville": "Souk El Arbaa",
                "region": "4"
            },
            {
                "id": "320",
                "ville": "Souk Sebt Oulad Nemma",
                "region": "5"
            },
            {
                "id": "321",
                "ville": "Stehat",
                "region": "1"
            },
            {
                "id": "322",
                "ville": "Séfrou",
                "region": "3"
            },
            {
                "id": "323",
                "ville": "Tabounte",
                "region": "8"
            },
            {
                "id": "324",
                "ville": "Tafajight",
                "region": "3"
            },
            {
                "id": "325",
                "ville": "Tafetachte",
                "region": "7"
            },
            {
                "id": "326",
                "ville": "Tafraout",
                "region": "9"
            },
            {
                "id": "327",
                "ville": "Taghjijt",
                "region": "10"
            },
            {
                "id": "328",
                "ville": "Taghzout",
                "region": "1"
            },
            {
                "id": "329",
                "ville": "Tagzen",
                "region": "9"
            },
            {
                "id": "330",
                "ville": "Tahannaout",
                "region": "7"
            },
            {
                "id": "331",
                "ville": "Tahla‎",
                "region": "3"
            },
            {
                "id": "332",
                "ville": "Tala Tazegwaght‎",
                "region": "1"
            },
            {
                "id": "333",
                "ville": "Taliouine",
                "region": "9"
            },
            {
                "id": "334",
                "ville": "Talmest",
                "region": "7"
            },
            {
                "id": "335",
                "ville": "Talsint",
                "region": "2"
            },
            {
                "id": "336",
                "ville": "Tamallalt",
                "region": "7"
            },
            {
                "id": "337",
                "ville": "Tamanar",
                "region": "7"
            },
            {
                "id": "338",
                "ville": "Tamansourt",
                "region": "7"
            },
            {
                "id": "339",
                "ville": "Tamassint‎",
                "region": "1"
            },
            {
                "id": "340",
                "ville": "Tamegroute",
                "region": "8"
            },
            {
                "id": "341",
                "ville": "Tameslouht",
                "region": "7"
            },
            {
                "id": "342",
                "ville": "Tamesna",
                "region": "4"
            },
            {
                "id": "343",
                "ville": "Tamraght",
                "region": "9"
            },
            {
                "id": "344",
                "ville": "Tan-Tan",
                "region": "10"
            },
            {
                "id": "345",
                "ville": "Tanalt",
                "region": "9"
            },
            {
                "id": "346",
                "ville": "Tanger‎",
                "region": "1"
            },
            {
                "id": "347",
                "ville": "Tanoumrite Nkob Zagora",
                "region": "8"
            },
            {
                "id": "348",
                "ville": "Taounate‎",
                "region": "3"
            },
            {
                "id": "349",
                "ville": "Taourirt",
                "region": "2"
            },
            {
                "id": "350",
                "ville": "Taourirt ait zaghar",
                "region": "8"
            },
            {
                "id": "351",
                "ville": "Tarfaya‎",
                "region": "11"
            },
            {
                "id": "352",
                "ville": "Targuist‎",
                "region": "1"
            },
            {
                "id": "353",
                "ville": "Taroudannt",
                "region": "9"
            },
            {
                "id": "354",
                "ville": "Tata",
                "region": "9"
            },
            {
                "id": "355",
                "ville": "Taza‎",
                "region": "3"
            },
            {
                "id": "356",
                "ville": "Taïnaste‎",
                "region": "3"
            },
            {
                "id": "357",
                "ville": "Temsia",
                "region": "9"
            },
            {
                "id": "358",
                "ville": "Tendrara",
                "region": "2"
            },
            {
                "id": "359",
                "ville": "Thar Es-Souk‎",
                "region": "3"
            },
            {
                "id": "360",
                "ville": "Tichoute",
                "region": "8"
            },
            {
                "id": "361",
                "ville": "Tiddas",
                "region": "4"
            },
            {
                "id": "362",
                "ville": "Tiflet",
                "region": "4"
            },
            {
                "id": "363",
                "ville": "Tifnit",
                "region": "9"
            },
            {
                "id": "364",
                "ville": "Tighassaline",
                "region": "5"
            },
            {
                "id": "365",
                "ville": "Tighza",
                "region": "5"
            },
            {
                "id": "366",
                "ville": "Timahdite",
                "region": "3"
            },
            {
                "id": "367",
                "ville": "Tinejdad",
                "region": "8"
            },
            {
                "id": "368",
                "ville": "Tisgdal",
                "region": "9"
            },
            {
                "id": "369",
                "ville": "Tissa‎",
                "region": "3"
            },
            {
                "id": "370",
                "ville": "Tit Mellil",
                "region": "6"
            },
            {
                "id": "371",
                "ville": "Tizguite",
                "region": "3"
            },
            {
                "id": "372",
                "ville": "Tizi Ouasli‎",
                "region": "3"
            },
            {
                "id": "373",
                "ville": "Tiznit",
                "region": "9"
            },
            {
                "id": "374",
                "ville": "Tiztoutine",
                "region": "2"
            },
            {
                "id": "375",
                "ville": "Touarga",
                "region": "4"
            },
            {
                "id": "376",
                "ville": "Touima",
                "region": "2"
            },
            {
                "id": "377",
                "ville": "Touissit",
                "region": "2"
            },
            {
                "id": "378",
                "ville": "Toulal",
                "region": "3"
            },
            {
                "id": "379",
                "ville": "Toundoute",
                "region": "8"
            },
            {
                "id": "380",
                "ville": "Tounfite",
                "region": "8"
            },
            {
                "id": "381",
                "ville": "Témara",
                "region": "4"
            },
            {
                "id": "382",
                "ville": "Tétouan‎",
                "region": "1"
            },
            {
                "id": "383",
                "ville": "Youssoufia",
                "region": "7"
            },
            {
                "id": "384",
                "ville": "Zag",
                "region": "10"
            },
            {
                "id": "385",
                "ville": "Zagora",
                "region": "8"
            },
            {
                "id": "386",
                "ville": "Zaouia d'Ifrane",
                "region": "3"
            },
            {
                "id": "387",
                "ville": "Zaouïat Cheikh",
                "region": "5"
            },
            {
                "id": "388",
                "ville": "Zaïda",
                "region": "8"
            },
            {
                "id": "389",
                "ville": "Zaïo",
                "region": "2"
            },
            {
                "id": "390",
                "ville": "Zeghanghane",
                "region": "2"
            },
            {
                "id": "391",
                "ville": "Zeubelemok",
                "region": "7"
            },
            {
                "id": "392",
                "ville": "Zinat",
                "region": "1"
            }
                ];

            const list =  document.querySelector('#datalistOptions');

            const addlist = (array,element) => {
                array.forEach(item => {
                    const option = document.createElement('option');
                    option.textContent = item.ville
                    element.appendChild(option)
                });
            }

            addlist(villes,list)

    </script>


    <script src="https://kit.fontawesome.com/aea6f500cc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>

    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/magnific-popup.js"></script>
    <!-- Waypoints JS -->
    <script src="js/waypoints.min.js"></script>
    <!-- Countdown JS -->
    <script src="js/finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="js/nicesellect.js"></script>
    <!-- Flex Slider JS -->
    <script src="js/flex-slider.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="js/onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    <script src="js/map-script.js"></script>
    @yield('scripts')

</body>

</html>
