
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
            

            <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered>">
                      <tr>
                        <th>ID</th>
                        <td>{{$jabats->id}}</td>
                      </tr>
                      <tr>
                        <th>Nama Jabatan</th>
                        <td>{{$jabats->nama}}</td>
                      </tr>
                      <tr>
                        <th>Level Otoritas</th>
                        <td>{{$jabats->level}}</td>
                      </tr>
                      <tr>
                        <th>Kebijakan</th>
                        <td>{{$jabats->mpolicy['nama']}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
            <!-- Akhir padding -->
            <div class="row">
                <div class="col-md-6">
                  <button onclick="document.getElementById('edit01').style.display='block'" class="btn btn-success btn-large btn-block">Edit</button>
                </div>
                <div class="col-md-6">
                  <button onclick="document.getElementById('hapus01').style.display='block'" class="btn btn-danger btn-block">Hapus</button>
                </div>
              </div>
           

            <!--awal POP UP hapus Jabatan-->    
            <div id="hapus01" class="w3-modal">
              <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px" >

                <div class="w3-center"><br>
                  <span onclick="document.getElementById('hapus01').style.display='none'"
                  class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <!--awal form HAPUS Jabatan-->
                @if($jabats->id > 3)
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
                  @else
                  <div style="color:black">
                      <h3>Maaf anda tidak dapat menghapus jabatan {{ $jabats->nama }}</h3>
                  </div>
               
                  @endif
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
