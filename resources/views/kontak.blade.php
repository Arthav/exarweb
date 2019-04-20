<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Bluesky template project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/bootstrap4/bootstrap.min.css') }}">
        <link href="{{ asset('bluesky/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/plugins/rangeslider.js-2.3.0/rangeslider.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/contact.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/contact_responsive.css') }}">
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
                                        <li class="active"><a href="{{ route('Home.Kontak') }}">Contact</a></li>
                                        @if (Route::has('login'))
                                        @auth
                                        <li>
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
                                <div class="logo_image"><div><img src="{{ asset('bluesky/images/exaricorner.jpg') }}" alt=""></div></div>
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
                <div class="menu_phone"><span>call us: </span>0822 3385 7510</div>
            </div>

            <!-- Home -->

            <div class="home">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('bluesky/images/contact.jpg') }}" data-speed="0.8"></div>
                <div class="home_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                    <div class="home_title">Contact</div>
                                    <div class="breadcrumbs ml-auto">
                                        <ul>
                                            <li><a href="index.htmo">Home</a></li>
                                            <li>Contact</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

            <div class="contact">
                <div class="container">
                    <div class="row">
                        <div><b><font size="5">Exari</font></b></div>
                        
                        <!-- Contact Info -->
                        <div class="col-lg-4">
                              
                        </div>

                        <!-- Contact Form -->
                        <div class="col-lg-8">
                            
                        </div>
                    </div>
                    <div>PT. Exarlab</div>
                    <div>www.Exarlab.com</div><br>
                    <li>Alamat: Taman Pondok Indah</li>
                    <li>Kota: Surabaya</li>
                    <li>Contact Person: Christian Bonafena</li>
                    <li>Phone:0822 3385 7510</li>
                    <li>E-mail: Christianbonafena7@gmail.com</li>
                </div>
            </div>

            <footer class="footer">
                <div class="footer_main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo"><a href="#"><img src="{{ asset('bluesky/images/exaricorner.jpg') }}" alt=""></a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 footer_col">
                                <div class="footer_about">
                                        <div class="footer_about_text">Tempat cari properti terbaik di Indonesia. Bergabunglah dengan tim marketing sukses kami lainnya di exari.</div>
                                </div>
                            </div>
                                <div class="col-lg-3 footer_col">
                                        <div class="footer_about">
                                            <div class="footer_about_text">
                                                    Alamat  : Wiyung, Taman Pondok Indah  <br/>
                                                    No Telp : 0822 3385 7510<br/>
                                                    WA      : 0822 3385 7510<br/>
                                            </div>
                                        </div>
                                </div>
                            <div class="col-lg-3 footer_col">
                                
                            </div>
                            <div class="col-lg-3 footer_col">
                                
                            </div>
                        </div>
                    </div>
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
        <script src="{{ asset('bluesky/plugins/easing/easing.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/rangeslider.js-2.3.0/rangeslider.min.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/parallax-js-master/parallax.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
        <script src="{{ asset('bluesky/js/contact.js') }}"></script>
    </body>
</html>