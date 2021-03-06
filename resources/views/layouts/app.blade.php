<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Exari | Homepage</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Bluesky template project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/bootstrap4/bootstrap.min.css') }}">
        <link href="{{ asset('bluesky/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/plugins/OwlCarousel2-2.2.1/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/main_styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/responsive.css') }}">
    </head>
    <body>

        <div class="super_container">

            <!-- Header -->

            <header class="header">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo">
                                    <a href="#"><img src="{{ asset('bluesky/images/exaricorner.jpg') }}" alt=""></a>
                                </div>
                                <nav class="main_nav">
                                    <ul>
                                        <li><a href="{{ route('index') }}">Home</a></li>
                                        <li><a href="{{ route('Home.About') }}">About us</a></li>
                                        <li><a href="{{ route('Home.Properti') }}">Properties</a></li>
                                        <li><a href="{{ route('Home.Artikel') }}">News</a></li>
                                        <li><a href="{{ route('Home.Kontak') }}">Contact</a></li>
                                        @if (Route::has('login'))
                                        @auth
                                        <li><a href="{{ route('Listing_Default') }}">Agent Home</a></li>
                                        {{-- <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li> --}}
                                        @else
                                        <li>
                                            <a href="{{ route('login') }}">Login</a>
                                        </li>
                                        {{-- 
                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        @endif --}}
                                        @endauth
                                        @endif
                                    </ul>
                                </nav>
                                <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Menu -->

            <div class="menu trans_500">
                <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="menu_close_container"><div class="menu_close"></div></div>
                    <div class="logo menu_logo">
                        <a href="#">
                            <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                <div class="logo_image"><div><img src="{{ asset('bluesky/images/logo_exari.png') }}" alt=""></div></div>
                            </div>
                        </a>
                    </div>
                    <ul>
                        <li class="menu_item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="menu_item"><a href="{{ route('Home.About') }}">About us</a></li>
                        <li class="menu_item"><a href="{{ route('Home.Properti') }}">Properties</a></li>
                        <li class="menu_item"><a href="{{ route('Home.Artikel') }}">News</a></li>
                        <li class="menu_item"><a href="{{ route('Home.Kontak') }}">Contact</a></li>
                        @if (Route::has('login'))
                        @auth
                        <li class="menu_item">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="menu_item">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        {{-- 
                                        @if (Route::has('register'))
                                            <li class="menu_item"><a href="{{ route('register') }}">Register</a></li>
                        @endif --}}
                        @endauth
                        @endif
                    </ul>
                </div>
                <div class="menu_phone"><span>call us: </span>652 345 3222 11</div>
            </div>
            <div class="newsletter">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
            
                <div class="footer_bar">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="footer_bar_content text-center">

                                    <div class="footer_bar_content text-center">
                                        <br/>
                                        <br/>
                                        <center>
                                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                                        </center>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="{{ asset('bluesky/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('bluesky/styles/bootstrap4/popper.js') }}"></script>
        <script src="{{ asset('bluesky/styles/bootstrap4/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/easing/easing.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/parallax-js-master/parallax.min.js') }}"></script>
        <script src="{{ asset('bluesky/js/custom.js') }}"></script>
    </body>
</html>
