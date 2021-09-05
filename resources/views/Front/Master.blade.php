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
        <div class="middle-inner" >
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Logo -->
                        <div align="center">
                            <a href="{{route('index')}}"  align="center"><h3 style="font-style: italic;" ><img src="images/delivery-truck (1).png" style="width:80px;height:60px;margin-bottom:3px;" alt="Fayaj"> Fayaj</h3></a>
                        </div>
                        <!--/ End Logo -->
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    @if(app()->getLocale() == 'ar')
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                    @else
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endif


                                    <div class="navbar-collapse" >
                                        <div class="nav-inner" >
                                            <ul class="nav main-menu menu navbar-nav" >
                                                <li class="{{ request()->is('#sec-1') ? 'active' : '' }}"><a href="{{route('index')}}#sec-1"><img src="images/aaa.png" style="width:29px;height:32px;"> {{ __('home.transporteur') }}</a></li>
                                                <li class="{{ request()->is('#sec-2') ? 'active' : '' }}"><a href="{{route('index')}}#sec-2"><img src="images/value.png" style="width:29px;height:32px;margin-bottom:3px;"> {{ __('home.notre valeur') }}</a></li>
                                                <li class="{{ request()->is('#sec-3') ? 'active' : '' }}"><a href="{{route('index')}}#sec-3"><img src="images/consult.png" style="width:29px;height:32px;"> {{ __('home.nos services') }}</a></li>
                                                <li class="{{ request()->is('#sec-4') ? 'active' : '' }}"><a href="{{route('index')}}#sec-4"><img src="images/a4.png" style="width:27px;height:32px;"> {{ __('home.connectez vous') }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
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
