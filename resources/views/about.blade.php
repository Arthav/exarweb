<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About us</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Bluesky template project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/bootstrap4/bootstrap.min.css') }}">
        <link href="{{ asset('bluesky/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/plugins/OwlCarousel2-2.2.1/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/about.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/about_responsive.css') }}">
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
                                        <li class="active"><a href="{{ route('Home.About') }}">About us</a></li>
                                        <li><a href="{{ route('Home.Properti') }}">Properties</a></li>
                                        <li><a href="{{ route('Home.Artikel') }}">News</a></li>
                                        <li><a href="{{ route('Home.Kontak') }}">Contact</a></li>
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
                <div class="menu_phone"><span>call us: </span>652 345 3222 11</div>
            </div>

            <!-- Home -->

            <div class="home">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('bluesky/images/about.jpg') }}" data-speed="0.8"></div>
                <div class="home_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                    <div class="home_title">About</div>
                                    <div class="breadcrumbs ml-auto">
                                        <ul>
                                            <li><a href="index.htmo">Home</a></li>
                                            <li>About us</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- About -->

            <div class="about">
                <div class="container">
                    <div class="row">

                        <!-- About Content -->
                        <div class="col-lg-6">
                            <div class="about_content">
                                <div class="section_title">Siapakah kami?</div>
                                <div class="section_subtitle">Exari</div>
                                <div class="about_text">
                                    <p>Kami merupakan keluarga properti terdepan di Indonesia. Apabila anda sedang mencari solusi mengenai properti, kami siap melayani anda sepenuhnya dengan berbagai macam solusi yang dapat kami berikan.  </p>
                                </div>
                            </div>
                        </div>

                        <!-- About Image -->
                        <div class="col-lg-6">
                            <div class="about_image"><img src="{{ asset('bluesky/images/about_image.jpg') }}" alt=""></div>
                        </div>
                    </div>
                    <div class="row milestones_row">

                        <!-- Milestone -->
                        <div class="col-lg-3 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('bluesky/images/milestones_1.png') }}" alt=""></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="651">0</div>
                                    <div class="milestone_text">Properties Sold</div>
                                </div>
                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="col-lg-3 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('bluesky/images/milestones_2.png') }}" alt=""></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="1256">0</div>
                                    <div class="milestone_text">Happy Clients</div>
                                </div>
                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="col-lg-3 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('bluesky/images/milestones_3.png') }}" alt=""></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="124">0</div>
                                    <div class="milestone_text">Buildings Sold</div>
                                </div>

                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="col-lg-3 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('bluesky/images/milestones_4.png') }}" alt=""></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="2">0</div>
                                    <div class="milestone_text">Awards Won</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Realtors -->

            <div class="realtors">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title">The Realtors</div>
                            <div class="section_subtitle">Search your dream home</div>
                        </div>
                    </div>
                    <div class="row realtors_row">

                        <!-- Realtor -->
                        <div class="col-lg-3 col-md-6">
                            <div class="realtor_outer">
                                <div class="realtor">
                                    <div class="realtor_image"><img src="{{ asset('bluesky/images/realtor_1.jpg') }}" alt=""></div>
                                    <div class="realtor_body">
                                        <div class="realtor_title">Miranda</div>
                                        <div class="realtor_subtitle">Executive senior marketing</div>
                                    </div>
                                    <div class="realtor_link"><a href="#">+</a></div>
                                </div>
                                <div class="realtor_link_background_container">
                                    <div><div class="realtor_link_background"></div></div>
                                </div>
                            </div>
                        </div>

                        <!-- Realtor -->
                        <div class="col-lg-3 col-md-6">
                            <div class="realtor_outer">
                                <div class="realtor">
                                    <div class="realtor_image"><img src="{{ asset('bluesky/images/realtor_2.jpg') }}" alt=""></div>
                                    <div class="realtor_body">
                                        <div class="realtor_title">Benjamin Black</div>
                                        <div class="realtor_subtitle">Senior Marketing</div>
                                    </div>
                                    <div class="realtor_link"><a href="#">+</a></div>
                                </div>
                                <div class="realtor_link_background_container">
                                    <div><div class="realtor_link_background"></div></div>
                                </div>
                            </div>
                        </div>

                        <!-- Realtor -->
                        <div class="col-lg-3 col-md-6">
                            <div class="realtor_outer">
                                <div class="realtor">
                                    <div class="realtor_image"><img src="{{ asset('bluesky/images/realtor_3.jpg') }}" alt=""></div>
                                    <div class="realtor_body">
                                        <div class="realtor_title">Harvey Stanson</div>
                                        <div class="realtor_subtitle">Senior Marketing</div>
                                    </div>
                                    <div class="realtor_link"><a href="#">+</a></div>
                                </div>
                                <div class="realtor_link_background_container">
                                    <div><div class="realtor_link_background"></div></div>
                                </div>
                            </div>
                        </div>

                        <!-- Realtor -->
                        <div class="col-lg-3 col-md-6">
                            <div class="realtor_outer">
                                <div class="realtor">
                                    <div class="realtor_image"><img src="{{ asset('bluesky/images/realtor_4.jpg') }}" alt=""></div>
                                    <div class="realtor_body">
                                        <div class="realtor_title">Julia Raylene</div>
                                        <div class="realtor_subtitle">Marketing</div>
                                    </div>
                                    <div class="realtor_link"><a href="#">+</a></div>
                                </div>
                                <div class="realtor_link_background_container">
                                    <div><div class="realtor_link_background"></div></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Newsletter -->

            <!-- Footer -->

            <footer class="footer">
                <div class="footer_main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo"><a href="#"><img src="{{ asset('bluesky/images/exaricorner.jpg') }}" alt=""></a></div>
                            </div>
                            <div class="col-lg-9 d-flex flex-column align-items-start justify-content-end">
                              
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
        <script src="{{ asset('bluesky/plugins/greensock/TweenMax.min.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/greensock/TimelineMax.min.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/greensock/animation.gsap.min.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/easing/easing.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/parallax-js-master/parallax.min.js') }}"></script>
        <script src="{{ asset('bluesky/js/about.js') }}"></script>
    </body>
</html>