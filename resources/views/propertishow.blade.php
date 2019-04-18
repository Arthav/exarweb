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
      <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/plugins/rangeslider.js-2.3.0/rangeslider.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/property.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/property_responsive.css') }}">
   </head>
   <body>
      <div class="super_container">
         <header class="header">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo"><a href="#"><img src="{{ asset('bluesky/images/logo_exari.png') }}" alt=""></a></div>
                        <nav class="main_nav">
                           <ul>
                              <li><a href="{{ route('index') }}">Home</a></li>
                              <li><a href="{{ route('Home.About') }}">About us</a></li>
                              <li class="active"><a href="{{ route('Home.Properti') }}">Properties</a></li>
                              <li><a href="{{ route('Home.Artikel') }}">News</a></li>
                              <li><a href="{{ route('Home.Kontak') }}">Contact</a></li>
                              @if (Route::has('login'))                                        @auth                                        
                              <li>
                                 <a class="dropdown-item" href="{{ route('logout') }}"                                               onclick="event.preventDefault();                                                       document.getElementById('logout-form').submit();">                                                {{ __('Logout') }}                                            </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">                                                @csrf                                            </form>
                              </li>
                              @else                                        
                              <li><a href="{{ route('login') }}">Login</a></li>
                              {{--                                         @if (Route::has('register'))                                            
                              <li><a href="{{ route('register') }}">Register</a></li>
                              @endif --}}                                        @endauth                                        @endif                                    
                           </ul>
                        </nav>
                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
               <div class="menu_close_container">
                  <div class="menu_close"></div>
               </div>
               <div class="logo menu_logo">
                  <a href="#">
                     <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                        <div class="logo_image">
                           <div><img src="{{ asset('bluesky/images/logo_exari.png') }}" alt=""></div>
                        </div>
                     </div>
                  </a>
               </div>
               <ul>
                  <li class="menu_item"><a href="{{ route('index') }}">Home</a></li>
                  <li class="menu_item"><a href="{{ route('Home.About') }}">About us</a></li>
                  <li class="menu_item"><a href="{{ route('Home.Properti') }}">Properties</a></li>
                  <li class="menu_item"><a href="{{ route('Home.Artikel') }}">News</a></li>
                  <li class="menu_item"><a href="{{ route('Home.Kontak') }}">Contact</a></li>
                  @if (Route::has('login'))                        @auth                        
                  <li class="menu_item">
                     <a class="dropdown-item" href="{{ route('logout') }}"                               onclick="event.preventDefault();                                       document.getElementById('logout-form').submit();">                                {{ __('Logout') }}                            </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">                                @csrf                            </form>
                  </li>
                  @else                        
                  <li class="menu_item"><a href="{{ route('login') }}">Login</a></li>
                  {{--                                         @if (Route::has('register'))                                            
                  <li class="menu_item"><a href="{{ route('register') }}">Register</a></li>
                  @endif --}}                        @endauth                        @endif                    
               </ul>
            </div>
            <div class="menu_phone"><span>call us: </span>652 345 3222 11</div>
         </div>
         <div class="home">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('bluesky/images/properties.jpg') }}" data-speed="0.8"></div>
            <div class="home_container">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                           <div class="home_title">Search results</div>
                           <div class="breadcrumbs ml-auto">
                              <ul>
                                 <li><a href="index.htmo">Home</a></li>
                                 <li>Search Results</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="home_search">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="home_search_container">
                        <div class="home_search_content">
                           <form action="{{ route('index') }}" class="search_form d-flex flex-row align-items-start justfy-content-start">
                              <div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
                                 <div>
                                    <select name="jenis_list" class="search_form_select">
                                       <option disabled selected>For rent</option>
                                       <option value="Disewakan">Yes</option>
                                       <option value="Dijual">No</option>
                                    </select>
                                 </div>
                                 <div><input type="text" class="search_form_select" placeholder="Search Type" style="background: none;cursor: auto"></div>
                                 <div><input type="text" name="kota" class="search_form_select" placeholder="Search City" style="background: none;cursor: auto"></div>
                                 <div>
                                    <select name="kamar_tidur" class="search_form_select">
                                       <option disabled selected>Bedrooms</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                    </select>
                                 </div>
                                 <div>
                                    <select name="kamar_mandi" class="search_form_select">
                                       <option disabled selected>Bathrooms</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                    </select>
                                 </div>
                              </div>
                              <button type="submit" class="search_form_button ml-auto">search</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="intro">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="intro_title_container">
                           <div class="intro_title">{{$mlistings->nama}}</div>
                        </div>
                        <div class="intro_price_container ml-lg-auto d-flex flex-column align-items-start justify-content-center">
                           <div>{{$mlistings->jenis_list}}</div>
                           <div class="intro_price">Rp.{{number_format($mlistings->price)}}</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="intro_slider_container">
               <div class="owl-carousel owl-theme intro_slider">
                  @php ($i = 0)                        @foreach($listing2 as $list)                        
                  <div class="owl-item"><img src="{{ url('/storage/mlisting/') }}/{{$list->imageid}}.jpeg" alt=""></div>
                  @php ($i++)                        @endforeach                    
               </div>
               <div class="intro_slider_nav_container">
                  <div class="container">
                     <div class="row">
                        <div class="col">
                           <div class="intro_slider_nav_content d-flex flex-row align-items-start justify-content-end">
                              <div class="intro_slider_nav intro_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                              <div class="intro_slider_nav intro_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="property">
            <div class="container">
               <div class="row">
                  <div class="col-lg-7 offset-lg-1">
                     <div class="property_content">
                        <div class="property_icons">
                           <div class="property_title">Extra Facilities</div>
                           <div class="property_rooms d-flex flex-sm-row flex-column align-items-start justify-content-start">
                              <div class="property_room">
                                 <div class="property_room_title">Bedrooms</div>
                                 <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="room_icon"><img src="{{ asset('bluesky/images/room_1.png') }}" alt=""></div>
                                    <div class="room_num">{{$mlistings->kamar_tidur}}</div>
                                 </div>
                              </div>
                              <div class="property_room">
                                 <div class="property_room_title">Bathrooms</div>
                                 <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="room_icon"><img src="{{ asset('bluesky/images/room_2.png') }}" alt=""></div>
                                    <div class="room_num">{{$mlistings->kamar_mandi}}</div>
                                 </div>
                              </div>
                              <div class="property_room">
                                 <div class="property_room_title">Area</div>
                                 <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="room_icon"><img src="{{ asset('bluesky/images/room_3.png') }}" alt=""></div>
                                    <div class="room_num">{{$mlistings->luas_tanah}} m2</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="property_description">
                           <div class="property_title">Description</div>
                           <div class="property_text property_text_2">
                              <table class="table table-bordered">
                                 
                                    <th>Tipe</th>
                                    <td>{{$mlistings->tipe_unit}}</td>
                                 </tr>
                                 <tr>
                                    <th>Total</th>
                                    <td>{{$mlistings->total_unit}}</td>
                                 </tr>
                                 <tr>
                                    <th>Jenis Properti</th>
                                    <td>{{$mlistings->jenis_properti}}</td>
                                 </tr>
                                 <tr>
                                    <th>Luas Bangunan</th>
                                    <td>{{$mlistings->luas_bangunan}} m2</td>
                                 </tr>
                                 <tr>
                                    <th>Tingkat</th>
                                    <td>{{$mlistings->tinggi}}</td>
                                 </tr>
                                 <tr>
                                    <th>Lantai</th>
                                    <td>{{$mlistings->lantai}}</td>
                                 </tr>
                                 <tr>
                                    <th>Lokasi</th>
                                    <td>{{$mlistings->lokasi}}</td>
                                 </tr>
                                 <tr>
                                    <th>Arah Properti</th>
                                    <td>{{$mlistings->arah_properti}}</td>
                                 </tr>
                                 <tr>
                                    <th>Spesifikasi</th>
                                    <td>{{$mlistings->spesifikasi}}</td>
                                 </tr>
                                 <tr>
                                    <th>Kota</th>
                                    <td>{{$mlistings->kota}}</td>
                                 </tr>
                                 <tr>
                                    <th>Listrik</th>
                                    <td>{{$mlistings->listrik}} Kwh</td>
                                 </tr>
                                 <tr>
                                    <th>Legalitas</th>
                                    <td>{{$mlistings->legalitas}}</td>
                                 </tr>
                                 {{-- <tr>
                                    <th>Sold</th>
                                    <td>{{$mlistings->sold == 0 ? 'Ready' : 'Sold'}}</td>
                                 </tr> --}}
                              </table><br><br>

                              <table class="table table-bordered">
                                  <tr>
                                      <th>Hubungi Marketing</th>
                                      <td style="color:#000000  !important">{{$kontak->name}}</td>
                                  </tr>
                                  <tr>
                                      <th>Telpon</th>
                                      <td style="color:#000000  !important">{{$kontak->telp1}}</td>
                                  </tr>
                                  <tr>
                                      <th>WhatsApp</th>
                                      <td style="color:#000000  !important">{{$kontak->telp2}}</td>
                                  </tr>
                              </table>
                           </div>
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
                        <div class="logo"><a href="#"><img src="{{ asset('bluesky/images/logo_exari.png') }}" alt=""></a></div>
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
                     <div class="col-lg-3 footer_col"></div>
                     <div class="col-lg-3 footer_col"></div>
                  </div>
               </div>
            </div>
            <div class="footer_bar">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <div class="footer_bar_content text-center">
                           <div class="footer_bar_content text-center">
                              <br/><br/>
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
      <script src="{{ asset('bluesky/js/jquery-3.2.1.min.js') }}"></script><script src="{{ asset('bluesky/styles/bootstrap4/popper.js') }}"></script><script src="{{ asset('bluesky/styles/bootstrap4/bootstrap.min.js') }}"></script><script src="{{ asset('bluesky/plugins/greensock/TweenMax.min.js') }}"></script><script src="{{ asset('bluesky/plugins/greensock/TimelineMax.min.js') }}"></script><script src="{{ asset('bluesky/plugins/scrollmagic/ScrollMagic.min.js') }}"></script><script src="{{ asset('bluesky/plugins/greensock/animation.gsap.min.js') }}"></script><script src="{{ asset('bluesky/plugins/greensock/ScrollToPlugin.min.js') }}"></script><script src="{{ asset('bluesky/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script><script src="{{ asset('bluesky/plugins/easing/easing.js') }}"></script><script src="{{ asset('bluesky/plugins/rangeslider.js-2.3.0/rangeslider.min.js') }}"></script><script src="{{ asset('bluesky/plugins/parallax-js-master/parallax.min.js') }}"></script><script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script><script src="{{ asset('bluesky/js/property.js') }}"></script>
   </body>
</html>