@extends('layouts.master')

@section('title')
Exarweb
@endsection

@section('content')
Tambah Listing
@endsection


@section('content2')
<div class="w3-container  w3-blue-gray w3-padding-32">
    <!--Awal bagian container-->
    <div class="W3-container">
        <div class="w3-padding">

            <div class="w3-padding">
                <div class="w3-card-4">
                    <div class="w3-container w3-pale-green">
                        <h2>Data Listing</h2>
                    </div>
                    @if ($errors->any())

                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>

                    @endif
                    <form enctype="multipart/form-data" class="w3-container" action="{{ route('Listing.Simpan') }}" method="post">
                        <p>
                            <label>Judul Listing</label>
                            <input required class="w3-input" type="text" name="nama">
                        </p>
                        <p>
                            <label>Jenis List</label>
                            <select required name="jenis_list" class="form-control">
                                <option value="Dijual">Dijual</option>
                                <option value="Disewakan">Disewakan</option>
                            </select>
                        </p>
                        <p>
                                <label>Jenis Properti</label>
                                <select required name="jenis_properti" class="form-control">
                                    <option value="Rumah">Rumah</option>
                                    <option value="Tanah">Tanah</option>
                                    <option value="Apartemen">Apartemen</option>
                                    <option value="Kos">Kos</option>
                                    <option value="Gudang">Gudang</option>
                                    <option value="Ruko">Ruko</option>
                                    <option value="Pabrik">Pabrik</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </p>
                        <p>
                            <label>Harga Total (per tahun apabila disewakan)</label>
                            <input required class="w3-input" type="number" name="price" min="10000000" onkeypress="isInputNumber(event)">
                        </p>
                        <p>
                            <label>Komisi (dalam persen (%))</label>
                            <input required class="w3-input" type="text" name="commission" onkeypress="isInputNumber(event)">
                        </p>
                        <p>
                            <label>Nama Pemilik</label>
                            <input required class="w3-input" type="text" name="nama_pemilik">
                        </p>
                        <p>
                            <label>No Pemilik</label>
                            <input required class="w3-input" type="text" name="no_pemilik" onkeypress="isInputNumber(event)">
                        </p>
						@if (\App\User::where('id',Auth::user()->id)->first()->mrole_id != 3)
                        <p>
                            <label>Tipe Unit (Diisi apabila primary listing memiliki tipe)</label>
                            <input class="w3-input" type="text" name="tipe_unit">
                        </p>
                       
                        <p>
                            <label>Developer (Diisi apabila primary listing)</label>
                            <select class="w3-select w3-border" name="mdeveloper_id">
                                <option value="" disabled selected>None</option>
                                @foreach ($dev as $dev)
                                <option value="{{ $dev->id }}">{{ $dev->nama}}</option>
                                @endforeach
                            </select>
                        </p>
						@endif
                      
                        <p>
                            <label>Luas Bangunan (m2)(Diisi 0 apabila tidak ada)</label>
                            <input required class="w3-input" type="text" name="luas_bangunan" onkeypress="isInputNumber(event)">
                        </p>
                        <p>
                            <label>Luas Tanah (m2)(Diisi 0 apabila tidak ada)</label>
                            <input required class="w3-input" type="text" name="luas_tanah" onkeypress="isInputNumber(event)">
                        </p>
                        <p>
                            <label>Tingkat</label>
                            <input class="w3-input" type="text" name="tinggi" onkeypress="isInputNumber(event)">
                        </p>
                        <p>
                            <label>Lantai (diisi apabila properti berjenis apartmen)</label>
                            <input class="w3-input" type="text" name="lantai"  onkeypress="isInputNumber(event)">
                        </p>

                        <p>
                            <label>Lokasi</label>
                            <input required class="w3-input" type="text" name="lokasi">
                        </p>

                        <p>
                            <label>Kamar Mandi total (Diisi 0 apabila tidak ada)</label>
                            <input required class="w3-input" type="text" name="kamar_mandi"  onkeypress="isInputNumber(event)" required>
                        </p>

                        <p>
                            <label>Kamar Tidur total (Diisi 0 apabila tidak ada)</label>
                            <input required class="w3-input" type="text" name="kamar_tidur"  onkeypress="isInputNumber(event)" required>
                        </p>

                        <p>
                            <label>Arah Properti</label>
                            <select name="arah_properti" class="w3-input">
                                <option value="Utara">Utara</option>
                                <option value="Selatan">Selatan</option>
                                <option value="Timur">Timur</option>
                                <option value="Barat">Barat</option>
                            </select>
                        </p>

                        <p>
                            <label>Deskripsi</label>
                            <textarea  style="color:#000000 !important" class="w3-input" type="text" name="spesifikasi"></textarea>
                        </p>

                        <p>
                            <label>Kota</label>
                            <input required class="w3-input" type="text" name="kota">
                        </p>

                        <p>
                            <label>Listrik (KWH)</label>
                            <input class="w3-input" type="text" name="listrik"  onkeypress="isInputNumber(event)">
                        </p>

                        <p>
                            <label>Legalitas</label>
                            <input required class="w3-input" type="text" name="legalitas">
                        </p>
                        <p>
                            <input type="submit" name="submit" value="Simpan Listing" class="w3-btn w3-green"></input>
                            {{ csrf_field() }}
                        </p>
                    </form>
                    <br><br>
                </div>
            </div>


        </div>

    </div>
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
