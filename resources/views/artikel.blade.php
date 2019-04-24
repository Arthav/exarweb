<!DOCTYPE html>
<html lang="en">
    <head>
        <title>News</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Bluesky template project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/bootstrap4/bootstrap.min.css') }}">
        <link href="{{ asset('bluesky/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/plugins/rangeslider.js-2.3.0/rangeslider.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/news.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/news_responsive.css') }}">
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
                                        <li class="active"><a href="{{ route('Home.Artikel') }}">News</a></li>
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
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('bluesky/images/slider8.jpeg') }}" data-speed="0.8"></div>
                <div class="home_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                    <div class="home_title">News</div>
                                    <div class="breadcrumbs ml-auto">
                                        <ul>
                                            <li><a href="index.htmo">Home</a></li>
                                            <li>News</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news">
                <div class="container">
                    <div class="row">

                        <!-- News Posts -->
                        <div class="col-lg-12">
                            <div class="news_posts">

                                @foreach($mnews as $list)

                                <!-- News Post -->
                                <div class="news_post">
                                    <div class="news_post_title_container d-flex flex-row align-items-center justify-content-start">
                                        <div><div class="news_post_date_container d-flex flex-column align-items-center justify-content-center">
                                                <div class="news_post_day">{{date('d',strtotime($list->created_at))}}</div>
                                                <div class="news_post_month">{{date('M',strtotime($list->created_at))}} '{{date('y',strtotime($list->created_at))}}</div>
                                            </div></div>
                                        <div class="news_post_title_content">
                                            <div class="news_post_title"><a href="#">{{$list->judul}}</a></div>
                                            <div class="news_post_info">
                                                <ul>
                                                    <li>By <a href="#">James Morrison</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news_post_text">
                                        <p>{{$list->isi_artikel}}</p>
                                    </div>
                                </div>
                                @endforeach



                            </div>

                        </div>

                    </div>
                </div>
            </div>

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
        <script src="{{ asset('bluesky/plugins/easing/easing.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/rangeslider.js-2.3.0/rangeslider.min.js') }}"></script>
        <script src="{{ asset('bluesky/plugins/parallax-js-master/parallax.min.js') }}"></script>
        <script src="{{ asset('bluesky/js/news.js') }}"></script>
    </body>
</html>