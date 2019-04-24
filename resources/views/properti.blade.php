<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Property</title>
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
                                        <li class="active"><a href="{{ route('Home.Properti') }}">Properties</a></li>
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

                <!-- Home Slider -->
                <div class="home_slider_container">
                    <div class="owl-carousel owl-theme home_slider">
                        <!-- Slide -->
                        <div class="owl-item">
                            <div class="home_slider_background" style="background-image:url(bluesky/images/slider7.jpeg)"></div>
                            <div class="slide_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="slide_content">
                                                <div class="home_subtitle">Exari</div>
                                                <div class="home_title">Rumah Impian</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Home Search -->
            <div class="home_search">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_search_container">
                                <div class="home_search_content">
                                    <form action="{{ route('Home.Properti') }}" method="GET" class="search_form d-flex flex-row align-items-start justfy-content-start">
                                        <div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
                                            <div>
                                                <select class="search_form_select" name="jenis_list">
                                                    <option disabled selected>Jenis List</option>
                                                    <option value="Dijual">Dijual</option>
                                                    <option value="Disewakan">Disewakan</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select class="search_form_select" name="jenis_properti">
                                                    <option disabled selected>Jenis Properti</option>></option>
                                                    <option value="Rumah">Rumah</option>
                                                    <option value="Tanah">Tanah</option>
                                                    <option value="Apartemen">Apartemen</option>
                                                    <option value="Kos">Kos</option>
                                                    <option value="Gudang">Gudang</option>
                                                    <option value="Ruko">Ruko</option>
                                                    <option value="Pabrik">Pabrik</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select class="search_form_select" name="kota">
                                                    <option disabled selected>Kota</option>
                                                    <option>Surabaya</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Gresik</option>
                                                    <option>Mojokerto</option>
                                                </select>
                                            </div>
                                            <div>
                                                <input name="min_price" Placeholder="Harga Min" class="search_form_select" style="background: none;background-color: #fff;cursor: auto">
                                            </div>
                                            <div>
                                                <input name="max_price" Placeholder="Harga Max" class="search_form_select" style="background: none;background-color: #fff;cursor: auto">
                                            </div>
                                        </div>
                                        <button class="search_form_button ml-auto">search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recent">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title">Recent Properties</div>
                            <div class="section_subtitle">Search your dream home</div>
                        </div>
                    </div>
                    <div class="row recent_row">
                        <div class="col">
                            <div class="recent_slider_container">
                                <div class="owl-carousel owl-theme recent_slider"> 
                                    @foreach($mlistings as $list)

                                    <!-- Slide -->
                                    <div class="owl-item">
                                        <div class="recent_item">
                                            <div class="recent_item_inner">
                                                <div class="recent_item_image">
                                                    <img src="{{ url('/storage/mlisting/') }}/{{$list->imageid}}.jpeg" alt="" style="width:500px;height:200px;">
                                                    <div class="tag_featured property_tag"><a href="#">{{$list->jenis_list}}</a></div>
                                                </div>
                                                <div class="recent_item_body text-center">
                                                    <div class="recent_item_location">{{$list->lokasi}}</div>
                                                    <div class="recent_item_title"><a href="{{ route('Home.PropertiShow', ['id' => $list->listid]) }}">{{$list->nama}}</a></div>
                                                    <div class="recent_item_price">Rp.{{number_format($list->price)}}</div>
                                                </div>
                                                <div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
                                                    <div><div class="recent_icon"><img src="{{ asset('bluesky/images/icon_1.png') }}" alt=""></div><span>{{$list->luas_tanah}} m2</span></div>
                                                    <div><div class="recent_icon"><img src="{{ asset('bluesky/images/icon_2.png') }}" alt=""></div><span>{{$list->kamar_tidur}}</span></div>
                                                    <div><div class="recent_icon"><img src="{{ asset('bluesky/images/icon_3.png') }}" alt=""></div><span>{{$list->kamar_mandi}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>

                                <div class="recent_slider_nav_container d-flex flex-row align-items-start justify-content-start">
                                    <div class="recent_slider_nav recent_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                    <div class="recent_slider_nav recent_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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