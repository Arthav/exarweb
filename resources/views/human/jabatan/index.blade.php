<!-- DONE -->
<!-- Jabatan list-->
@extends('layouts.master')

@section('title')
Exarweb: Jabatan
@endsection

@section('content')
Jabatan
@endsection


@section('content2')


    <!-- Section 2 -->
    <div class="w3-container  w3-blue-gray w3-padding-32">
      <div class="W3-container">

        <h2>Daftar Jabatan dan Wewenang</h2>
        <!--Awal Padding-->

        <!--Akhir Padding-->
        </div>

        <!-- TABLE Jabatan -->
        <p>
          <div class="w3-responsive" style=color:black>
            <table class="w3-table-all">
              <tr>
                <th>Jabatan</th>
                <th>Level otoritas</th>
               
              </tr>
              @foreach($jabats as $jabat)
              <tr>
              <td><a href="{{ route('Human.Jabatan.Show', ['id' => $jabat->id]) }}">{{$jabat->nama}}</td>
              <td>{{$jabat->level}}</td>
              
             
              
              </tr>
              @endforeach

              <tr>
                
              </tr>
            </table>
          </div>
        </p>
        <!--Akhir Table-->





        <!--Tombol Tambah Jabatan-->
        <p>
        <a class="w3-btn w3-black" href="{{ route('Human.Jabatan.Tambah') }}">Tambah Baru</a>
        </p>

        <!-- pagination -->
        {{ $jabats->appends(Request::input())->links() }}

        <!-- detail halaman -->
        <h7> {{$jabats->total() }} total jabatan</h7>
        <p><h8>In this page : ({{$jabats->count()}})</h8></p>





        <!--akhir container-->
      </div>
      <!--akhir section 2-->
    </div>
    <!--Akhir Page Content-->
  </div>

    <!-- Footer Copyright -->
      <div class="w3-blue w3-center w3-padding-24">Copyright <a href="www.google.com">Exari</a> 2019</a></div>

@endsection
