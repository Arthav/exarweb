<!-- DONE -->
<!-- TAMBAH KARYAWAN -->
@extends('layouts.master')

@section('title')
Tambah Developer
@endsection

@section('content')
Daftar Developer Baru
@endsection


@section('content2')
<!-- mkasdmfkamsdkf -->



  <!-- Section 2 -->
  <div class="w3-container  w3-blue-gray w3-padding-32">
    <div class="W3-container">
      <h3>Data Developer</h3>

<form class="w3-container" action="{{ route('Dev.Simpan') }}" method="post">
  <p>
  <label>Nama</label>
  <input class="w3-input" name="nama" type="text" required></p>

  
  <p>
  <label>Kontak / Telp</label>
  <input class="w3-input" name="kontak" type="text" required></p>


  <p>
  <label>Email</label>
  <input class="w3-input" name="email" type="text" required></p>



    <input type="submit" class="w3-button w3-red w3-round-large" name="submit" value="Add New Developer">
    {{ csrf_field() }}
  </form>

    </div>

    <!-- Isi setiap tabs -->

  </div>

      <!--bagian warna hitam-->

  <!-- End page content -->
</div>


@endsection
