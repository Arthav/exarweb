<!-- DONE -->
<!-- Listing list-->
@extends('layouts.master')

@section('title')
Exarweb: Daftar Properti
@endsection

@section('content')
<br>
Property list
@endsection



@section('content2')

<!-- FILTER CARI -->
<br><br><br>
<!-- Section 2 -->
<div class="w3-container w3-blue-gray w3-padding-32">
    <!--Awal bagian container-->
    <div class="W3-container">

        <form action="{{ route('Listing_Default') }}" method="get">
            <div class="well">
                <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa fa-filter"></i> Filter
                </a>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="well">
                    <div class="row">

                        <div class="col-md-6">
                            <label><b>Jenis List :</b></label>
                            <select name="jenis_list" class="form-control">
                                <option value="" {{$jenis_list == '' ? 'Selected' : ''}}>Semua</option>
                                <option value="Dijual" {{$jenis_list == 'Dijual' ? 'Selected' : ''}}>Dijual</option>
                                <option value="Disewakan" {{$jenis_list  == 'Disewakan' ? 'Selected' : ''}}>Disewakan</option>
                            </select>
                        </div>
                        
                        <div class="col-md-3">
                            <label><b>Kota :</b></label><input class="form-control input-sm" type="text" name="kota" placeholder="Cari Kota" value="{{$kota}}">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label><b>Jenis Properti :</b></label>
                            <select name="jenis_properti" class="form-control">
                                <option value="" {{$jenis_properti == '' ? 'Selected' : ''}}>Semua</option>
                                <option value="Rumah" {{$jenis_properti == 'Rumah' ? 'Selected' : ''}}>Rumah</option>
                                <option value="Tanah" {{$jenis_properti  == 'Tanah' ? 'Selected' : ''}}>Tanah</option>
                                <option value="Apartemen" {{$jenis_properti  == 'Apartemen' ? 'Selected' : ''}}>Apartemen</option>
                                <option value="Kos" {{$jenis_properti == 'Kos' ? 'Selected' : ''}}>Kos</option>
                                <option value="Gudang" {{$jenis_properti == 'Gudang' ? 'Selected' : ''}}>Gudang</option>
                                <option value="Ruko" {{$jenis_properti == 'Ruko' ? 'Selected' : ''}}>Ruko</option>
                                <option value="Pabrik" {{$jenis_properti == 'Pabrik' ? 'Selected' : ''}}>Pabrik</option>
                                <option value="Lainnya" {{$jenis_properti == 'Lainnya' ? 'Selected' : ''}}>Lainnya</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label><b>Kamar Tidur</b></label>
                            <select name="kamar_tidur" class="form-control">
                                <option value="" {{$kamar_tidur == '0' ? 'Selected' : ''}}>Semua</option>
                                <option value="1" {{$kamar_tidur == '1' ? 'Selected' : ''}}>1</option>
                                <option value="2" {{$kamar_tidur == '2' ? 'Selected' : ''}}>2</option>
                                <option value="3" {{$kamar_tidur == '3' ? 'Selected' : ''}}>3</option>
                                <option value="4" {{$kamar_tidur == '4' ? 'Selected' : ''}}>4</option>
                                <option value="5" {{$kamar_tidur == '5' ? 'Selected' : ''}}>5</option>
                                <option value="6" {{$kamar_tidur == '6' ? 'Selected' : ''}}>6</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label><b>Kamar Mandi</b></label>
                            <select name="kamar_mandi" class="form-control">
                                <option value="" {{$kamar_mandi == '0' ? 'Selected' : ''}}>Semua</option>
                                <option value="1" {{$kamar_mandi == '1' ? 'Selected' : ''}}>1</option>
                                <option value="2" {{$kamar_mandi == '2' ? 'Selected' : ''}}>2</option>
                                <option value="3" {{$kamar_mandi == '3' ? 'Selected' : ''}}>3</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label><b>Arah Properti</b></label>
                            <select name="arah_properti" class="form-control input-sm">
                                <option value="" {{$arah_properti == '' ? 'Selected' : ''}}>Semua</option>
                                <option value="Utara" {{$arah_properti == 'Utara' ? 'Selected' : ''}}>Utara</option>
                                <option value="Selatan" {{$arah_properti == 'Selatan' ? 'Selected' : ''}}>Selatan</option>
                                <option value="Timur" {{$arah_properti == 'Timur' ? 'Selected' : ''}}>Timur</option>
                                <option value="Barat" {{$arah_properti == 'Barat' ? 'Selected' : ''}}>Barat</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label><b>Min Price</b></label>
                            <input class="form-control input-sm" type="text" name="min_price" placeholder="Cari Tipe Unit" value="{{$min_price}}">
                        </div>
                        <div class="col-md-6">
                            <label><b>Max Price</b></label>
                            <input class="form-control input-sm" type="text" name="max_price" placeholder="Cari Tipe Unit" value="{{$max_price}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            &nbsp;
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="w3-btn w3-black">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- AKHIR FILTER NAMA -->

        @foreach($mlistings as $list)
        <div class="grid-12" grid-row-gap:>
            <div class="agenproperti-thumb">
                <div class="agenproperti-gambar">
                    {{-- <div class="ribbon best"><span>{{$list->sold == '0' ? 'Ready' : 'Secondary'}}</span></div> --}}
                    <a href="{{ route('Listing.Show', ['id' => $list->listid]) }}">	
                        <img class="lazy" src="{{ url('/storage/mlisting/') }}/{{$list->imageid}}.jpeg" alt="{{$list->imageid}}" style="width:124px;height:100px;" />
                    </a>
                </div>
                <div class="agenproperti-title"><h2><a href="{{ route('Listing.Show', ['id' => $list->listid]) }}" title="">{{$list->nama}}</a></h2>
                    <div class="agenproperti-harga">Rp.{{$list->price}},-</div>
                    <div class="agenproperti-info">{{$list->lokasi}} <br/>
                        Lt/Lb : {{$list->luas_tanah}} / {{$list->luas_bangunan}}<br/></div>
                    <a href="{{ route('Listing.Show', ['id' => $list->listid]) }}" class="btn" >Lihat &raquo;</a>
               
                </div>
            </div>
        </div>
        
        @endforeach

    </div>
     <!-- pagination -->
     {{ $mlistings->appends(Request::input())->links() }}

     <!-- detail halaman -->
     <h7> {{$mlistings->total() }} total listing</h7>
     <p><h8>In this page : ({{$mlistings->count()}})</h8></p>
</div>




<link rel='stylesheet' id='vcss-css'  href="{{ asset('css/agen1.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href="{{ asset('css/agen.css') }}" type='text/css' media='all' />
<script type="text/javascript">
    (function (url) {

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
    })('//www.agenpropertisurabaya.com/?wordfence_logHuman=1&hid=86F5E2F4939CDF913058FEC08798F3DC');
</script><style type="text/css">
    body{ margin:0px auto; padding:0px;
          background:;background-color:#ffffff ;background-position:center center ;background-attachment:scroll ;}
    a, h1, h2, h3, h4  {color:#000000;}
    .vtr-menu-icon {background-color: #2500fc;}
    .vtr-menu  {background-color: #2500fc;}
    .vtr-menu  li.active > a,.vtr-menu  li.active,.vtr-menu  li:hover > a {	background-color: #000;}
    .wp-pagenavi a:hover{color:#FFF;background-color:#2500fc;}
    .current{color:#FFFFFF;background-color:#2500fc;}
    #widget-form .button {background:#2500fc;}
    .sidebar h4{background-color: #2500fc;}
    .sidebar .box ul li a:hover{ color: #2500fc; }
    .btn{ background-color: #31bf31; }
    .button-widget-link{color:#2500fc;}
    .vtr-title{color: #000000;}
    .footer a{color:#2500fc;border-top-color: #2500fc;}
    .vcard-name {color:#2500fc;}
    .vcard-footer {	background-color: #2500fc;}
    .keatas a{color:#999;}
    .header-title{color: #2500fc;} 
    #tophead{background-color:#2500fc;}
    .agenproperti-harga{color:#2500fc;}
    #catmenu a:hover {color:#2500fc;}
   
</style>


@endsection
