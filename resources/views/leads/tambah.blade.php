<!-- DONE -->
<!-- TAMBAH Jabatan -->
@extends('layouts.master')

@section('title')
TAMBAH Leads
@endsection

@section('content')
Tambah Leads Baru
@endsection


@section('content2')
<!-- mkasdmfkamsdkf -->



  <!-- Section 2 -->
  <div class="w3-container  w3-blue-gray w3-padding-32">
    <div class="W3-container">
      <h3>Tambah Leads baru saya</h3>

<form class="w3-container" action="{{ route('Leads.Simpan') }}" method="post">

     <!-- NAMA -->
     <div style="color:white">
        <label><b>Nama pembeli</b></label>
      </div>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="nama" required>
          
      <!-- Kontak / telp -->
      <div style="color:white">
        <label><b>Kontak / telp</b></label>
      </div>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="contact"  onkeypress="isInputNumber(event)">
          
      <!-- Email -->
      <div style="color:white">
        <label><b>Email</b></label>
      </div>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="email" >
          
      <!-- Deskripsi -->
      <p>
        <div style="color:white">
        <label><b>Deskripsi</b></label>
        </div>
        <textarea rows="8" cols="80" class="w3-input" type="text" name="deskripsi" required></textarea>
      <p>


    <input type="submit" class="w3-button w3-red w3-round-large" name="submit" value="Add New">
    {{ csrf_field() }}
  </form>

    </div>

    <!-- Isi setiap tabs -->

  </div>

      <!--bagian warna hitam-->

  <!-- End page content -->
</div>

<script>
            
    function isInputNumber(evt){
        
        var ch = String.fromCharCode(evt.which);
        
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
        
    }
    
</script>
@endsection
