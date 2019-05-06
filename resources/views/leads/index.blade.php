
<!-- Leads -->


@extends('layouts.master')

@section('title')
Exarweb - Leads
@endsection

@section('content')
  <p>Leads</p>


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
      <div class="w3-container  w3-blue-gray w3-padding-32">
        <!--Awal bagian container-->
        <div class="W3-container">

          <!-- tabulasi -->
          <div class="w3-row">
            <a href="javascript:void(0)" onclick="openDkaryawan(event, 'Listing');">
              <div style="color:#ffffff !important" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Leads</div>
            </a>             
            <a href="javascript:void(0)" onclick="openDkaryawan(event, 'Semua_listing');">
              <div style="color:#ffffff !important" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">My Leads</div>
            </a>             
                     
          </div>
          <!-- Akhir tabulasi -->






          <!-- isi tabs data leads -->
          <div id="Listing" class="w3-container tabsdkaryawan" style="display:none"> 
          <div class="w3-container  w3-blue-gray w3-padding-32">
              <div class="W3-container">
        
                <h2>Daftar Leads</h2>
                <!--Awal Padding-->
        
        
                    <!-- FILTER CARI NAMA-->
        
                    <form action="{{ route('Leads') }}" method="get">
                      <p><h5>Cari</h5></p>
                      <div class="w3-row-padding">
                        <div class="w3-half">
                          <input class="w3-input" type="text" name="s" placeholder="cari berdasarkan deskripsi">
                        </div>
                        <div class="w3-half">
                          <button type="submit" class="w3-btn w3-black">Cari</button>
                        </div>
                      </div>
                    </form>
                    <!-- AKHIR FILTER CARI NAMA -->
        
        
                <!--Akhir Padding-->
                </div>
        
                <!-- TABLE AGEN -->
                <p>
                  <div class="w3-responsive" style=color:black>
                    <table class="w3-table-all">
                      <tr>
                        <th>Deskripsi Dicari</th>
                        <th>Nama Agen</th>
                        <th>Kontak agen</th>
                        <th>Kontak whatsapp</th>
                        <th>ID Leads</th>
                      </tr>
                      @foreach($leads as $lead)
                      <tr>
                      <td>{{$lead->deskripsi}}</td>
                      <td>{{$lead->name}}</td>
                      <td>{{$lead->telp1}}</td>
                      <td>{{$lead->telp2}}</td>           
                      <td>{{$lead->id}}</td>                    
                      
                      </tr>
                      @endforeach
        
                      <tr>
                        
                      </tr>
                    </table>
                  </div>
                </p>
                <!--Akhir Table-->   
        
                <!--Tombol Tambah AGEN-->
                      
                   <!-- pagination -->
                   {{ $leads->appends(Request::input())->links() }}
        
                   <!-- detail halaman -->
                   <h7> {{$leads->total() }} total leads</h7>
                   <p><h8>In this page : ({{$leads->count()}})</h8></p>     
        
                <!--akhir container-->
              </div>
              <!--akhir section 2-->
            </div>
            <!-- akhir isi tabs --> 
        </div>









          
          <!-- isi tabs semua listing -->
          <div id="Semua_listing" class="w3-container tabsdkaryawan" style="display:none"> 
            <br>  
            <h2>My Leads</h2>

            <!-- TABLE -->
            <p> 
            <div class="w3-responsive" style=color:black>
                <table class="w3-table-all">
                <tr>
                    <th>ID Leads</th>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <th>Email</th>
                    <th>Deskripsi dicari</th>
                    
                </tr>
                @foreach($myleads as $mylead)
                <tr>
                <td>{{$mylead->id}} </td>  
                <td><a href="{{ route('Leads.Show', ['id' => $mylead->id]) }}">{{$mylead->name}} </td>    
                <td>{{$mylead->contact}} </td>
                <td>{{$mylead->email}}</td>
                <td>{{$mylead->deskripsi}}</td>                
                
                </tr>
                @endforeach
      
                    <tr>
                      
                    </tr>
                  </table>
                </div>
              </p>
              <!--Akhir Table-->

            <!--Tombol Tambah Leads-->
              <p>
              <a class="w3-btn w3-green w3-round-large" href="{{ route('Leads.Tambah') }}">Tambah Baru</a>
              </p>
            
            
          
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
