
<!-- DONE -->
<!-- DETAIL Jabatan -->

<!---->


@extends('layouts.master')

@section('title')
Detail Jabatan
@endsection

@section('content')
  <p>
Data Jabatan
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
      <div class="w3-container w3-blue-gray w3-padding-32">
        <!--Awal bagian container-->
        <div class="W3-container">

          <!-- tabulasi -->
          <div class="w3-row">
            <a href="javascript:void(0)" onclick="openDkaryawan(event, 'Data_pribadi');">
              <div style="color:#ffffff !important" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Jabatan</div>
            </a>             
          </div>
          
          <!-- Akhir tabulasi -->
          
          <!-- isi tabs data jabatan -->
          <div id="Data_pribadi" class="w3-container tabsdkaryawan" style="display:none">
          <h2>Data Jabatan: {{$jabats->name}}</h2>

            <!-- Awal padding -->
            <div class="w3-row-padding">
              <!-- LABEL DATA PRIBADI-->
              <div class="w3-third">
                <p><b>ID </b></p>
                <p><b>Nama Jabatan</b></p>
                <p><b>Level Otoritas</b></p>
                <p><b>Kebijakan</b></p>
                <div style="color:#0099ff">
          <br><br><br>
                </div>
              </div>

              <!-- q1 -->
              <!-- LABEL DATA Jabatan-->
              <div class="w3-twothird">

                <p><label><label style="color:#0099ff">'</label>{{$jabats->id}} </label></p>
                <p><label><label style="color:#0099ff">'</label>{{$jabats->nama}}</label></p>
                <p><label><label style="color:#0099ff">'</label>{{$jabats->level}} </label></p>
                <p><label><label style="color:#0099ff">'</label>{{$jabats->mpolicy['nama']}}</label></p>
               
              </div>
            </div>
            <!-- Akhir padding -->
            
            <!--Tombol Edit Data jabatan-->
            <p>
              <button onclick="document.getElementById('edit01').style.display='block'"
              class="w3-button w3-black w3-round-large">Edit</button></p>
            <!--Akhir Tombol Edit-->

            <!--tombol hapus jabatan-->
            <p>
              <button onclick="document.getElementById('hapus01').style.display='block'"
              class="w3-button w3-red w3-round-large">Hapus</button></p>
            <!--Akhir Tombol Hapus-->

            <!--awal POP UP hapus Jabatan-->    
            <div id="hapus01" class="w3-modal">
              <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px" >

                <div class="w3-center"><br>
                  <span onclick="document.getElementById('hapus01').style.display='none'"
                  class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <!--awal form HAPUS Jabatan-->
                <form class="w3-container" action="{{ route('Human.Jabatan.Hapus',['id' => $jabats->id]) }}" method="post">
                  <div class="w3-section">
                    
                    <!-- POP UP DELETE -->
                    <div style="color:black">
                      <h3>Apakah anda yakin untuk menghapus jabatan {{ $jabats->nama }}?</h3>
                    </div>
                    <input class="w3-button w3-block w3-red w3-section w3-padding" type="submit" value="Delete"></input>
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                  </form>
                  <!--akhir form HAPUS Jabatan-->
                  
                  <!--tombol cancel HAPUS Jabatan-->
                  <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('hapus01').style.display='none'" type="button" class="w3-button w3-black">Cancel</button>
                  </div>

                </div>
              </div>
            </div>
            <!--akhir POP UP HAPUS Jabatan-->


            <!-- pop up Edit Data Jabatan-->
            <div id="edit01" class="w3-modal">
              <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px" >

                <div class="w3-center"><br>
                  <span onclick="document.getElementById('edit01').style.display='none'"
                  class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <!-- POP UP -->
                <!--Awal Form Edit Data Pribadi Jabatan-->
                <form class="w3-container" action="{{ route('Human.Jabatan.Ubah', ['id' => $jabats->id]) }}" method="post">
                  <div class="w3-section">

                    <!-- NAMA -->
                    <div style="color:black">
                      <label><b>Nama Jabatan</b></label>
                    </div>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" value="{{ $jabats->nama }}" name="nama" >
                                    
                    <!-- Level otoritas -->
                    <p>
                    <div style="color:black">
                      <label><b>Level</b></label>
                    </div>
                    <select class="w3-select w3-border" name="level">
                      @if (empty($jabats->level))
                        <option value="" disabled selected>Agama</option>
                      @endif
                      <option @if ($jabats->level == '1') selected @endif value="1">1 : Admin dan Manager</option>
                      <option @if ($jabats->level == '2') selected @endif value="2">2 : Agen</option>
                      
                    </select>
                    </p>

                     <!-- Kebijakan -->
                    <p>
                    <label style="color:black"><b>Jabatan</b></label>
                    <select class="w3-select w3-border" name="mpolicy_id">
                      <option value="{{ $jabats->mpolicy['id'] }}" >{{$jabats->mpolicy['nama']}} (Current)</option>
                      @foreach ($bijaks as $bijak)
                        <option value="{{ $bijak->id }}">{{ $bijak->nama}}</option>
                      @endforeach
                    </select>
                    </p><br>
                            
                

                    <!--Tombol Simpan Edit Data jabatan-->
                    <input class="w3-button w3-block w3-blue w3-section w3-padding" type="submit" value="Save">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                  </form>
                  <!--Akhir Form Edit Data jabatan-->




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
