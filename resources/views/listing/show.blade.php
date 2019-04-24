@extends('layouts.master')

@section('title')
Exarweb
@endsection

@section('content')

@endsection


@section('content2')

<script type="text/javascript">
    window._wpemojiSettings = {"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/", "svgExt": ".svg", "source": {"concatemoji": "http:\/\/www.agenpropertisurabaya.com\/wp-includes\/js\/wp-emoji-release.min.js"}};
    !function (a, b, c) {
        function d(a) {
            var b, c, d, e, f = String.fromCharCode;
            if (!k || !k.fillText)
                return!1;
            switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
                case"flag":
                    return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), !(j.toDataURL().length < 3e3) && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 55356, 57096), 0, 0), c = j.toDataURL(), b !== c);
                case"emoji4":
                    return k.fillText(f(55357, 56425, 55356, 57341, 8205, 55357, 56507), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55357, 56425, 55356, 57341, 55357, 56507), 0, 0), e = j.toDataURL(), d !== e
            }
            return!1
        }
        function e(a) {
            var c = b.createElement("script");
            c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
        }
        var f, g, h, i, j = b.createElement("canvas"), k = j.getContext && j.getContext("2d");
        for (i = Array("flag", "emoji4"), c.supports = {everything:!0, everythingExceptFlag:!0}, h = 0; h < i.length; h++)
            c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
        c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
            c.DOMReady = !0
        }, c.supports.everything || (g = function () {
            c.readyCallback()
        }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
            "complete" === b.readyState && c.readyCallback()
        })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
    }(window, document, window._wpemojiSettings);
</script>
<style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    label{
        color:#000000 !important;
        
    }
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('bluesky/styles/bootstrap4/bootstrap.min.css') }}">
<script src="{{ asset('bluesky/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('bluesky/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('bluesky/styles/bootstrap4/bootstrap.min.js') }}"></script>
<link rel='stylesheet' id='cptch_stylesheet-css'  href='http://www.agenpropertisurabaya.com/wp-content/plugins/captcha/css/style.css' type='text/css' media='all' />
{{-- <link rel='stylesheet' id='vcss-css'  href='http://www.agenpropertisurabaya.com/wp-content/themes/agenpropertisurabaya/agenpropertisurabaya/css/v-css.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='http://www.agenpropertisurabaya.com/wp-content/themes/agenpropertisurabaya/agenpropertisurabaya/style.css' type='text/css' media='all' /> --}}
<link rel='stylesheet' id='vcss-css'  href="{{ asset('css/agen1.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href="{{ asset('css/agen.css') }}" type='text/css' media='all' />

<script type="text/javascript">
    (function (url) {
        if (/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)) {
            return;
        }
        var addEvent = function (evt, handler) {
            if (window.addEventListener) {
                document.addEventListener(evt, handler, false);
            } else if (window.attachEvent) {
                document.attachEvent('on' + evt, handler);
            }
        };
        var removeEvent = function (evt, handler) {
            if (window.removeEventListener) {
                document.removeEventListener(evt, handler, false);
            } else if (window.detachEvent) {
                document.detachEvent('on' + evt, handler);
            }
        };
        var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
        var logHuman = function () {
            var wfscr = document.createElement('script');
            wfscr.type = 'text/javascript';
            wfscr.async = true;
            wfscr.src = url + '&r=' + Math.random();
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(wfscr);
            for (var i = 0; i < evts.length; i++) {
                removeEvent(evts[i], logHuman);
            }
        };
        for (var i = 0; i < evts.length; i++) {
            addEvent(evts[i], logHuman);
        }
    })('//www.agenpropertisurabaya.com/?wordfence_logHuman=1&hid=9D73C8C724366C69FAB876FC45B04B71');
</script><style type="text/css">
    body{ margin:0px auto; padding:0px;
          background:;background-color:#ffffff ;background-position:center center ;background-attachment:scroll ;}
    a, h1, h2, h3, h4  {color:#000000;}
    .vtr-menu-icon {background-color: #2500fc;}
    .vtr-menu  {background-color: #2500fc;}
    .vtr-menu  li.active > a,.vtr-menu  li.active,.vtr-menu  li:hover > a {	background-color: #ffffff;}
    .wp-pagenavi a:hover{color:#FFF;background-color:#2500fc;}
    .current{color:#FFFFFF;background-color:#2500fc;}
    #widget-form .button {background:#2500fc;}
    .sidebar h4{background-color: #2500fc;}
    .sidebar .box ul li a:hover{ color: #2500fc; }
    .btn{ background-color: #2500fc; }
    .button-widget-link{color:#2500fc;}
    .vtr-title{color: #2500fc;}
    .footer a{color:#2500fc;border-top-color: #2500fc;}
    .vcard-name {color:#2500fc;}
    .vcard-footer {	background-color: #2500fc;}
    .keatas a{color:#ffffff;}
    .header-title{color: #000000;} 
    #tophead{background-color:#2500fc;}
    .agenproperti-harga{color:#2500fc;}
    #catmenu a:hover {color:#2500fc;}
    #maintable td.blue {color:#00F;}

</style>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="w3-container w3-blue w3-padding-32">
        <!--Awal bagian container-->
        <div class="W3-container">
            <div class="container">
                <div class="grid-9">

                    {{-- Image slider --}}
                    <div class="boxer">
                        <div class="vtr-title"><h2>{{$mlistings->nama}}</h2></div>


                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @php ($i = 0)
                                @foreach($listing2 as $list)
                                <div class="item {{$i == 0 ? 'active' : ''}}">
                                    <img src="{{ url('/storage/mlisting/') }}/{{$list->imageid}}.jpeg" class="d-block w-100" alt="{{$list->imageid}}.jpeg" style="height :400px">
                                </div>
                                @php ($i++)
                                @endforeach
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <br/>
                        <br/>
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <td style="color:#000000  !important">{{$mlistings->nama}}</td>
                            </tr>
                            <tr>
                                <th>Jenis List</th>
                                <td style="color:#000000  !important">{{$mlistings->jenis_list}}</td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td style="color:#000000  !important">{{$mlistings->price}}</td>
                            </tr>
                            <tr>
                                <th>Tipe</th>
                                <td style="color:#000000  !important">{{$mlistings->tipe_unit}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Properti</th>
                                <td style="color:#000000  !important">{{$mlistings->jenis_properti}}</td>
                            </tr>
                            <tr>
                                <th>Luas Bangunan</th>
                                <td style="color:#000000  !important">{{$mlistings->luas_bangunan}} m2</td>
                            </tr>

                            <tr>
                                <th>Luas Tanah</th>
                                <td style="color:#000000  !important">{{$mlistings->luas_tanah}} m2</td>
                            </tr>
                            <tr>
                                <th>Tingkat</th>
                                <td style="color:#000000  !important">{{$mlistings->tinggi}}</td>
                            </tr>
                            <tr>
                                <th>Lantai</th>
                                <td style="color:#000000  !important">{{$mlistings->lantai}}</td>
                            </tr>
                            <tr>
                                <th>Kamar Mandi</th>
                                <td style="color:#000000  !important">{{$mlistings->kamar_mandi}}</td>
                            </tr>
                            <tr>
                                <th>Kamar Tidur</th>
                                <td style="color:#000000  !important">{{$mlistings->kamar_tidur}}</td>
                            </tr>
                            <tr>
                                <th>Arah Properti</th>
                                <td style="color:#000000  !important">{{$mlistings->arah_properti}}</td>
                            </tr>
                            <tr>
                                <th>Kota</th>
                                <td style="color:#000000  !important">{{$mlistings->kota}}</td>
                            </tr>
                            <tr>
                                <th>Listrik</th>
                                <td style="color:#000000  !important">{{$mlistings->listrik}} Kwh</td>
                            </tr>
                            <tr>
                                <th>Legalitas</th>
                                <td style="color:#000000  !important">{{$mlistings->legalitas}}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi / Spesifikasi</th>
                                <td style="color:#000000  !important">{{$mlistings->spesifikasi}}</td>
                            </tr>
                            {{-- <tr>
                                <th>sold</th>
                                <td>{{$mlistings->sold == '0' ? 'Ready' : 'Sold'}}</td>
                            </tr> --}}

                        </table><br><br>
                        
                        @if(\App\User::where('id',Auth::user()->id)->first()->mrole_id == 1 || Auth::user()->id == $mlistings->user_id))
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Pemilik</th>
                                <td style="color:#000000  !important">{{$mlistings->nama_pemilik}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telpon Pemilik</th>
                                <td style="color:#000000  !important">{{$mlistings->no_pemilik}}</td>
                            </tr>
                            <tr>
                                <th>Komisi</th>
                                <td style="color:#000000  !important">{{$mlistings->commission}}</td>
                            </tr>
                        </table><br><br>
                        @endif

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

                        <div class="row">
                            <div class="col-md-12">
                                {{-- Tombol --}}
                                @if( $mlistings->sold == '0' && (\App\User::where('id',Auth::user()->id)->first()->mrole_id == 1 || Auth::user()->id == $mlistings->user_id))
                                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">Closing</button>
                                <br>
                                <p>
                                    <button onclick="document.getElementById('hapus01').style.display='block'"
                                    class="w3-button w3-red w3-round-large">Hapus Listing</button></p>
                              
                                @endif

                                <!-- Closing -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <form enctype="multipart/form-data" class="w3-container" action="{{ route('Listing.Closing') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Closing</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="mlistingid" value="{{$mlistings->id}}"/>
                                                    <p>
                                                        <label>Co Broke</label>
                                                        <select class="w3-input" name="user_id">
                                                            <option value="0">None</option>
                                                            @foreach($user as $list)
                                                            <option value="{{$list->id}}">{{$list->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </p>
                                                    <br/>
                                                    <p>
                                                        <label>Harga Final</label>
                                                    <input required class="w3-input" type="number" name="close_price" min="1000000" value="{{$mlistings->price}}">
                                                    </p>
                                                    <p>
                                                        <label>Komisi Final</label>
                                                        <input required class="w3-input" type="number" name="final_commission"  value="{{$mlistings->commission}}">
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                 <!--awal POP UP hapus listing-->    
                                <div id="hapus01" class="w3-modal">
                                    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px" >
                    
                                    <div class="w3-center"><br>
                                        <span onclick="document.getElementById('hapus01').style.display='none'"
                                        class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                    </div>
                    
                                    <!--awal form HAPUS listing-->
                                    <form class="w3-container" action="{{ route('Listing.Hapus',['id' => $mlistings->id]) }}" method="post">
                                        <div class="w3-section">
                                        
                                        <!-- POP UP DELETE -->
                                        <div style="color:black">
                                            <h3>Apakah anda yakin untuk menghapus data listing {{ $mlistings->nama }}?</h3>
                                        </div>
                                        <input class="w3-button w3-block w3-red w3-section w3-padding" type="submit" value="Delete"></input>
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                    </form>
                                        <!--akhir form HAPUS listing-->
                                        
                                        <!--tombol cancel HAPUS listing-->
                                        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                            <button onclick="document.getElementById('hapus01').style.display='none'" type="button" class="w3-button w3-black">Cancel</button>
                                        </div>
                    
                                     </div>
                                    </div>
                                </div>
                                <!--akhir POP UP HAPUS listing-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    @endsection
              