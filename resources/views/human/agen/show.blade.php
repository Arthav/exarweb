
<!-- DONE -->
<!-- DETAIL KARYAWAN -->

<!---->


@extends('layouts.master')

@section('title')
Detail Agen
@endsection

@section('content')
  <p>
Data Agen
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
              <div style="color:#ffffff !important" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Data Agen</div>
            </a>
          </div>
          
          <!-- Akhir tabulasi -->
          
          <!-- isi tabs data agen -->
          <div id="Data_pribadi" class="w3-container tabsdkaryawan" style="display:none">
          <h2>Data agen: {{$agen->name}}</h2>

            <!-- Awal padding -->
            <div class="w3-row-padding">
              <!-- LABEL DATA PRIBADI-->
              <div class="w3-third">
                <p><b>ID </b></p>
                <p><b>Nama</b></p>
                <p><b>Jabatan</b></p>
                <p><b>Email</b></p>
                <p><b>Alamat </b></p>
                <p><b>No. Telepon 1</b></p>
                <p><b>No. Telepon 2</b></p>                
                <p><b>NIK</b></p>
                <p><b>NPWP</b></p>
                <p><b>Jenis Kelamin</b></p>
                
                <div style="color:#0099ff">
          
                </div>
                <p><b>Agama</b></p>
                
              </div>

              <!-- q1 -->
              <!-- LABEL DATA PRIBADI-->
              <div class="w3-twothird">

                <p><label><label style="color:#0099ff">'</label>{{$agen->id}} </label></p>
                <p><label><label style="color:#0099ff">'</label>{{$agen->name}}</label></p>
                <p><label><label style="color:#0099ff">'</label>{{$agen->mrole['nama']}} </label></p>
                <p><label><label style="color:#0099ff">'</label>{{$agen->email}}</label></p>
                <p><label><label style="color:#0099ff">'</label>{{$agen->alamat}}</label></p>
                <p><label><label style="color:#0099ff">'</label>{{$agen->telp1}}</label></p>
                <p><label><label style="color:#0099ff">'</label>{{$agen->telp2}}</label></p>
                <p><label><label style="color:#0099ff">'</label>{{$agen->nik}}</label></p>
                <p><label><label style="color:#0099ff">'</label>{{$agen->npwp}}</label></p>
                <p><label><label style="color:#0099ff">'</label>{{$agen->jeniskelamin}}</label></p>
                <p><label><label style="color:#0099ff">'</label>{{$agen->agama}}</label></p>

              </div>
            </div>
            <!-- Akhir padding -->
            
            <!--Tombol Edit Data Pribadi Karyawan-->
            <p>
              <button onclick="document.getElementById('edit01').style.display='block'"
              class="w3-button w3-black w3-round-large">Edit</button></p>
            <!--Akhir Tombol Edit-->

            <!--tombol hapus Karyawan-->
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
                <form class="w3-container" action="{{ route('Human.Agen.Hapus',['id' => $agen->id]) }}" method="post">
                  <div class="w3-section">
                    
                    <!-- POP UP DELETE -->
                    <div style="color:black">
                      <h3>Apakah anda yakin untuk menghapus data agen {{ $agen->nama }}?</h3>
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

                <!--Awal Form Edit Data Pribadi agen-->
                <form class="w3-container" action="{{ route('Human.Agen.Ubah', ['id' => $agen->id]) }}" method="post">
                  <div class="w3-section">

                    <!-- NAMA -->
                    <div style="color:black">
                      <label><b>Nama</b></label>
                    </div>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" value="{{ $agen->name }}" name="nama" >
                
                     <!-- Jabatan -->
                    <p>
                    <label style="color:black"><b>Jabatan</b></label>
                    <select class="w3-select w3-border" name="id_jabatan">
                      <option value="{{ $agen->mrole['id'] }}" >{{$agen->mrole['nama']}}</option>
                      @foreach ($mroles as $mrole)
                        <option value="{{ $mrole->id }}">{{ $mrole->nama}}</option>
                      @endforeach
                    </select>
                    </p><br>
                     
                    <!-- Email -->
                    <div style="color:black">
                      <label><b>Email</b></label>
                    </div>
                    <input class="w3-input w3-border" type="text" value="{{ $agen->email }}" name="email" >
                    <br>

                     <!-- Alamat -->
                     <div style="color:black">
                        <label><b>Alamat</b></label>
                     </div>
                     <input class="w3-input w3-border" type="text" value="{{ $agen->alamat }}" name="alamat" >
                     <br>

                     <!-- NO TELEPON -->
                    <div style="color:black">
                      <label><b>No. Telepon 1</b></label>
                    </div>
                    <input class="w3-input w3-border" type="text" name="telp1" value="{{$agen->telp1}}">
                    <br>
                    <div style="color:black">
                      <label><b>No. Telepon 2</b></label>
                    </div>
                    <input class="w3-input w3-border" type="text"  name="telp2" value="{{$agen->telp2}}">
                    <br>

                    <!-- NIK -->
                    <div style="color:black">
                      <label><b>NIK</b></label>
                    </div>
                    <input class="w3-input w3-border" type="text" name="nik" value="{{ $agen->nik }}">
                    <br>

                    <!-- NPWP -->
                    <div style="color:black">
                      <label><b>NPWP</b></label>
                    </div>
                    <input class="w3-input w3-border" type="text" name="npwp" value="{{ $agen->npwp }}">
                    <br>


                    <!-- JENIS KELAMIN -->
                    <p>
                    <div style="color:black">
                      <label><b>Jenis Kelamin</b></label>
                    </div>
                    <select class="w3-select w3-border" name="jeniskelamin">
                      @if (empty($agen->jeniskelamin))
                        <option value="" disabled selected>Jenis Kelamin</option>
                      @endif
                      <option @if ($agen->jenis_kelamin == 'Wanita') selected @endif value="Wanita">Wanita</option>
                      <option @if ($agen->jenis_kelamin == 'Pria') selected @endif value="Pria">Pria</option>
                    </select>
                    </p>

                
                    <!-- AGAMA -->
                    <p>
                    <div style="color:black">
                      <label><b>Agama</b></label>
                    </div>
                    <select class="w3-select w3-border" name="agama">
                      @if (empty($agen->agama))
                        <option value="" disabled selected>Agama</option>
                      @endif
                      <option @if ($agen->agama == 'Islam') selected @endif value="Islam">Islam</option>
                      <option @if ($agen->agama == 'Kristen') selected @endif value="Kristen">Kristen</option>
                      <option @if ($agen->agama == 'Katholik') selected @endif value="Katholik">Katholik</option>
                      <option @if ($agen->agama == 'Hindu') selected @endif value="Hindu">Hindu</option>
                      <option @if ($agen->agama == 'Buddha') selected @endif value="Buddha">Budha</option>
                      <option @if ($agen->agama == 'Lainnya') selected @endif value="Lainnya">Lainnya</option>
                    </select>
                    </p>

                    <!--Tombol Simpan Edit Data Pribadi agen-->
                    <input class="w3-button w3-block w3-blue w3-section w3-padding" type="submit" value="Save">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                  </form>
                  <!--Akhir Form Edit Data Pribadi agen-->




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
