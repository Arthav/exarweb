<!-- DONE -->
<!-- Agen list-->
@extends('layouts.master')

@section('title')
Exarweb - Daftar Agen
@endsection

@section('content')
Agen
@endsection


@section('content2')


    <!-- Section 2 -->
    <div class="w3-container w3-blue-gray w3-padding-32">
      <div class="W3-container">

        <h2>Daftar Agen</h2>
        <!--Awal Padding-->


            <!-- FILTER CARI NAMA-->

            <form action="{{ route('Human.Agen') }}" method="get">
              <p><h5>Cari</h5></p>
              <div class="w3-row-padding">
                <div class="w3-half">
                  <input class="w3-input" type="text" name="s" placeholder="cari berdasarkan nama">
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
                <th>Nama agen</th>
                <th>Email agen</th>
                <th>Alamat</th>
                <th>NIK</th>
                <th>Jabatan</th>
              </tr>
              @foreach($agens as $agen)
              <tr>
              <td><a href="{{ route('Human.Agen.Show', ['id' => $agen->id]) }}">{{$agen->name}}</td>
              <td>{{$agen->email}}</td>
              <td>{{$agen->alamat}}</td>
              <td>{{$agen->nik}}</td>
              <td>{{$agen->mrole['nama']}}</td>
             
              
              </tr>
              @endforeach

              <tr>
                
              </tr>
            </table>
          </div>
        </p>
        <!--Akhir Table-->





        <!--Tombol Tambah AGEN-->
        <p>
        <a class="w3-btn w3-black" href="{{ route('Human.Agen.Tambah') }}">Tambah Baru</a>
        </p>

           <!-- pagination -->
           {{ $agens->appends(Request::input())->links() }}

           <!-- detail halaman -->
           <h7> {{$agens->total() }} total agen</h7>
           <p><h8>In this page : ({{$agens->count()}})</h8></p>



        <!--akhir container-->
      </div>
      <!--akhir section 2-->
    </div>
    <!--Akhir Page Content-->
  </div>

@endsection
