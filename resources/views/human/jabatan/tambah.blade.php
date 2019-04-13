<!-- DONE -->
<!-- TAMBAH Jabatan -->
@extends('layouts.master')

@section('title')
TAMBAH Jabatan
@endsection

@section('content')
Tambah Jabatan Baru
@endsection


@section('content2')
<!-- mkasdmfkamsdkf -->



  <!-- Section 2 -->
  <div class="w3-container  w3-blue-gray w3-padding-32">
    <div class="W3-container">
      <h3>Tambah Jabatan</h3>

<form class="w3-container" action="{{ route('Human.Jabatan.Simpan') }}" method="post">
  <p>
  <label>Nama Jabatan</label>
  <input class="w3-input" name="nama" type="text"></p>

    <p>
    <label>Level otoritas</label>
    <select class="w3-select w3-border" name="level">
      <option value="" disabled selected>Agama</option>
      <option value="1">1 : Admin dan Manager</option>
      <option value="2">2 : Agen</option>
    </select>
    </p>


    
  <p>
  <label>Kebijakan</label>
  <select class="w3-select w3-border" name="mpolicy_id">
    <option value="" disabled selected>Kebijakan</option>
    @foreach ($bijaks as $bijak)
        <option value="{{ $bijak->id }}">{{ $bijak->nama}}</option>
    @endforeach 
  </select>
  </p>


    <input type="submit" class="w3-button w3-red w3-round-large" name="submit" value="Add New Member">
    {{ csrf_field() }}
  </form>

    </div>

    <!-- Isi setiap tabs -->

  </div>

      <!--bagian warna hitam-->

  <!-- End page content -->
</div>


@endsection
