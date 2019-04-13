@extends('layouts.master')

@section('title')
Exarweb
@endsection

@section('content')
Tambah Artikel
@endsection


@section('content2')
<div class="w3-padding">

    <div class="w3-padding">
        <div class="w3-card-4">
            <div class="w3-container w3-pale-green">
                <h4>Data Artikel</h4>
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
            <br/>
            <form enctype="multipart/form-data" class="w3-container" action="{{ route('News.Simpan') }}" method="post">
                <p>
                    <label>Judul Artikel</label>
                    <input required class="form-control input-sm" type="text" name="judul_artikel">
                </p>
                <p>
                    <label>Isi Artikel</label>
                    <textarea class="form-control input-sm" name="isi_artikel"></textarea>
                </p>
                <p>
                    <input type="submit" name="submit" value="Simpan Artikel" class="w3-btn w3-green"></input>
                    {{ csrf_field() }}
                </p>
            </form>
            <br><br>
        </div>
    </div>


</div>

</div>

@endsection
