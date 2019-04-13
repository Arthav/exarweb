
<!-- DONE -->
<!-- DETAIL KARYAWAN -->

<!---->


@extends('layouts.master')

@section('title')
Detail Developer
@endsection

@section('content')
  <p>
Data Developer
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

<body onload="openDkaryawan(event, 'Data_pribadi');">

    <!-- Section 2 -->
      <div class="w3-container  w3-blue-gray w3-padding-32">
        <!--Awal bagian container-->
        <div class="W3-container">

          <!-- tabulasi -->
          <div class="w3-row">
            <a href="javascript:void(0)" onclick="openDkaryawan(event, 'Data_pribadi');">
              <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Data Developer</div>
           
          </div>
          
          <!-- Akhir tabulasi -->
          
          <!-- isi tabs data agen -->
          <div id="Data_pribadi" class="w3-container tabsdkaryawan" style="display:none">
          <h2>Data Developer: {{$devs->name}}</h2>

            <!-- Awal padding -->
            <div class="w3-row-padding">
              <!-- LABEL DATA PRIBADI-->
              <div class="w3-third">
                <p><b>ID </b></p>
                <p><b>Nama</b></p>
                <p><b>Kontak</b></p>
                <p><b>Email</b></p>
                               
              </div>

              
              <!-- LABEL DATA -->
              <div class="w3-twothird">

                <p><label><label style="color:#0099ff">'</label>{{$devs->id}} </label></p>
                <p><label><label style="color:#0099ff">'</label>{{$devs->nama}}</label></p>
                <p><label><label style="color:#0099ff">'</label>{{$devs->kontak}} </label></p>
                <p><label><label style="color:#0099ff">'</label>{{$devs->email}}</label></p>
                
              </div>
            </div>
            <!-- Akhir padding -->
            
            <!--Tombol Edit Data n-->
            <p>
              <button onclick="document.getElementById('edit01').style.display='block'"
              class="w3-button w3-green w3-round-large">Edit</button></p>
            <!--Akhir Tombol Edit-->

            <!--tombol hapus -->
            <p>
              <button onclick="document.getElementById('hapus01').style.display='block'"
              class="w3-button w3-red w3-round-large">Hapus</button></p>
            <!--Akhir Tombol Hapus-->

            <!--awal POP UP hapus agen-->    
            <div id="hapus01" class="w3-modal">
              <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px" >

                <div class="w3-center"><br>
                  <span onclick="document.getElementById('hapus01').style.display='none'"
                  class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <!--awal form HAPUS agen-->
                <form class="w3-container" action="{{ route('Dev.Hapus',['id' => $devs->id]) }}" method="post">
                  <div class="w3-section">
                    
                    <!-- POP UP DELETE -->
                    <div style="color:black">
                      <h3>Apakah anda yakin untuk menghapus data agen {{ $devs->nama }}?</h3>
                    </div>
                    <input class="w3-button w3-block w3-red w3-section w3-padding" type="submit" value="Delete"></input>
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                  </form>
                  <!--akhir form HAPUS agen-->
                  
                  <!--tombol cancel HAPUS agen-->
                  <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('hapus01').style.display='none'" type="button" class="w3-button w3-black">Cancel</button>
                  </div>

                </div>
              </div>
            </div>
            <!--akhir POP UP HAPUS agen-->


            <!-- pop up Edit Data agen-->
            <div id="edit01" class="w3-modal">
              <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px" >

                <div class="w3-center"><br>
                  <span onclick="document.getElementById('edit01').style.display='none'"
                  class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <!-- POP UP -->
                <!--Awal Form Edit Data Pribadi agen-->
                <form class="w3-container" action="{{ route('Dev.Ubah', ['id' => $devs->id]) }}" method="post">
                  <div class="w3-section">

                    <!-- NAMA -->
                    <div style="color:black">
                      <label><b>Nama</b></label>
                    </div>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" value="{{ $devs->nama }}" name="nama" >
                
                     <!-- kontak -->
                    <div style="color:black">
                      <label><b>Kontak / Telp</b></label>
                    </div>
                    <input class="w3-input w3-border" type="text" value="{{ $devs->kontak }}" name="kontak" >
                    <br>

                    <!-- Email -->
                    <div style="color:black">
                      <label><b>Email</b></label>
                    </div>
                    <input class="w3-input w3-border" type="text" value="{{ $devs->email }}" name="email" >
                    <br>


                    <!--Tombol Simpan Edit Data-->
                    <input class="w3-button w3-block w3-blue w3-section w3-padding" type="submit" value="Save">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                  </form>
                  <!--Akhir Form Edit Data-->




                  <!--Tombol Cancel Edit Data Pribadi-->
                  <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('edit01').style.display='none'" type="button" class="w3-button w3-black">Cancel</button>
                  </div>

                </div>
              </div>
            </div>
            <!--  Akhir Form Edit Data-->

          </div>
          <!-- akhir isi tabs data -->  

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

</script>
@endsection
