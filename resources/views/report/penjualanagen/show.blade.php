
<!-- Report all -->

<!---->


@extends('layouts.master')

@section('title')
Exarweb - Laporan 
@endsection

@section('content')
  <p>
Laporan Listing
</p>


@if ($errors->any())

    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>

@endif
@endsection

@section('content2')

<body onload="openDkaryawan(event, 'Listing');">

    <!-- Section 2 -->
      <div class="w3-container w3-blue-gray w3-padding-32">
        <!--Awal bagian container-->
        <div class="W3-container">

          <!-- tabulasi -->
          <div class="w3-row">
            <a href="javascript:void(0)" onclick="openDkaryawan(event, 'Listing');">
              <div style="color:#ffffff !important" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Listing</div>
            </a>             
            <a href="javascript:void(0)" onclick="openDkaryawan(event, 'Semua_listing');">
              <div style="color:#ffffff !important" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Semua</div>
            </a>             
            <a href="javascript:void(0)" onclick="openDkaryawan(event, 'Listing_terjual');">
              <div style="color:#ffffff !important" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Terjual</div>
            </a>             
          </div>
          <!-- Akhir tabulasi -->






          <!-- isi tabs data listing -->
          <div id="Listing" class="w3-container tabsdkaryawan" style="display:none"> 

              <!-- TABLE -->
              <p> 
              <div class="w3-responsive" style=color:black>
                  <table class="w3-table-all">
                  <tr>
                      <th>Nama List</th>
                      <th>Jenis Listing</th>
                      <th>Harga</th>
                      <th>Jenis Properti</th>
                      <th>Luas Bangunan</th>
                      <th>Luas Tanah</th>
                      <th>Lokasi</th>
                      <th>KM</th>
                      <th>KT</th>
                      <th>Kota</th>
                      <th>KWH Listrik</th>
                  </tr>
                  @foreach($availableview as $allview)
                  <tr>
                  <td>{{$allview->nama}} </td>    
                  <td>{{$allview->jenis_list}} </td>
                  <td>{{$allview->price}}</td>
                  <td>{{$allview->jenis_properti}}</td>
                  <td>{{$allview->luas_bangunan}} </td>
                  <td>{{$allview->luas_tanah}} </td>
                  <td>{{$allview->lokasi}} </td>
                  <td>{{$allview->kamar_mandi}}</td>
                  <td>{{$allview->kamar_tidur}} </td>
                  <td>{{$allview->kota}} </td>
                  <td>{{$allview->listrik}} </td>
                  
                  
                  
                  </tr>
                  @endforeach
        
                      <tr>
                        
                      </tr>
                    </table>
                  </div>
                </p>
                <!--Akhir Table-->
              
             
           <!-- pagination -->
           {{ $availableview->appends(Request::input())->links() }}

           <!-- detail halaman -->
           <h7> {{$availableview->total() }} total listing</h7>
           <p><h8>In this page  ({{$availableview->count()}}) listing</h8></p>

            </div>
            <!-- akhir isi tabs --> 










          
          <!-- isi tabs semua listing -->
          <div id="Semua_listing" class="w3-container tabsdkaryawan" style="display:none"> 

            <!-- TABLE -->
            <p> 
            <div class="w3-responsive" style=color:black>
                <table class="w3-table-all">
                <tr>
                    <th>Nama List</th>
                    <th>Jenis Listing</th>
                    <th>Harga</th>
                    <th>Jenis Properti</th>
                    <th>Luas Bangunan</th>
                    <th>Luas Tanah</th>
                    <th>Lokasi</th>
                    <th>KM</th>
                    <th>KT</th>
                    <th>Kota</th>
                    <th>KWH Listrik</th>
                </tr>
                @foreach($allviews as $allview)
                <tr>
                <td>{{$allview->nama}} </td>    
                <td>{{$allview->jenis_list}} </td>
                <td>{{$allview->price}}</td>
                <td>{{$allview->jenis_properti}}</td>
                <td>{{$allview->luas_bangunan}} </td>
                <td>{{$allview->luas_tanah}} </td>
                <td>{{$allview->lokasi}} </td>
                <td>{{$allview->kamar_mandi}}</td>
                <td>{{$allview->kamar_tidur}} </td>
                <td>{{$allview->kota}} </td>
                <td>{{$allview->listrik}} </td>
                
                
                </tr>
                @endforeach
      
                    <tr>
                      
                    </tr>
                  </table>
                </div>
              </p>
              <!--Akhir Table-->
            
            
           <!-- pagination -->
           {{ $allviews->appends(Request::input())->links() }}

           <!-- detail halaman -->
           <h7> {{$allviews->total() }} total listing</h7>
           <p><h8>In this page  ({{$allviews->count()}}) listing</h8></p>
        
          </div>
          <!-- akhir isi tabs -->  






           <!-- isi tabs data listing -->
           <div id="Listing_terjual" class="w3-container tabsdkaryawan" style="display:none"> 

              <!-- TABLE -->
              <p> 
              <div class="w3-responsive" style=color:black>
                  <table class="w3-table-all">
                  <tr>
                      <th>Nama List</th>
                      <th>Jenis Listing</th>
                      <th>Harga</th>
                      <th>Jenis Properti</th>
                      <th>Luas Bangunan</th>
                      <th>Luas Tanah</th>
                      <th>Lokasi</th>
                      <th>KM</th>
                      <th>KT</th>
                      <th>Kota</th>
                      <th>KWH Listrik</th>
                  </tr>
                  @foreach($soldview as $allview)
                  <tr>
                  <td>{{$allview->nama}} </td>    
                  <td>{{$allview->jenis_list}} </td>
                  <td>{{$allview->price}}</td>
                  <td>{{$allview->jenis_properti}}</td>
                  <td>{{$allview->luas_bangunan}} </td>
                  <td>{{$allview->luas_tanah}} </td>
                  <td>{{$allview->lokasi}} </td>
                  <td>{{$allview->kamar_mandi}}</td>
                  <td>{{$allview->kamar_tidur}} </td>
                  <td>{{$allview->kota}} </td>
                  <td>{{$allview->listrik}} </td>
                  
                  
                  </tr>
                  @endforeach
        
                      <tr>
                        
                      </tr>
                    </table>
                  </div>
                </p>
                <!--Akhir Table-->
              
             
           <!-- pagination -->
           {{ $soldview->appends(Request::input())->links() }}

           <!-- detail halaman -->
           <h7> {{$soldview->total() }} total listing</h7>
           <p><h8>In this page  ({{$soldview->count()}}) listing</h8></p>
          
            </div>
            <!-- akhir isi tabs --> 










          </div>
        </div>
        <!--akhir bagian container-->


      </div>
      <!--akhir section 2-->

    </div>
    <!-- !AKHIR PAGE CONTENT! -->



<script>


//script untuk tabs
function openDkaryawan(evt, Dkaryawan) {
  var i, x, tablinks;
  x = document.getElementsByClassName("tabsdkaryawan");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-white", "");
  }
  document.getElementById(Dkaryawan).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-white";
}

function handleChange(input) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;
  }

  

</script>
@endsection
