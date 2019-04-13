<!-- DONE -->
<!-- Agen list-->
@extends('layouts.master')

@section('title')
Exarweb - Daftar Developer
@endsection

@section('content')
Developer
@endsection


@section('content2')


    <!-- Section 2 -->
    <div class="w3-container  w3-blue-gray w3-padding-32">
      <div class="W3-container">

        <h2>Daftar Developer</h2>
        <!--Awal Padding-->



        <!--Akhir Padding-->
        </div>

        <!-- TABLE AGEN -->
        <p>
          <div class="w3-responsive" style=color:black>
            <table class="w3-table-all">
              <tr>
                <th>Nama Developer</th>
                <th>Kontak Developer</th>
                <th>Email Developer</th>
              </tr>
              @foreach($devs as $dev)
              <tr>
              <td><a href="{{ route('Dev.Show', ['id' => $dev->id]) }}">{{$dev->nama}}</td>
              <td>{{$dev->kontak}}</td>
              <td>{{$dev->email}}</td>
             
              
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
        <a class="w3-btn w3-red w3-round-large" href="{{ route('Dev.Tambah') }}">Tambah Baru</a>
        </p>




        <!--akhir container-->
      </div>
      <!--akhir section 2-->
    </div>
    <!--Akhir Page Content-->
  </div>

@endsection
