@extends('layouts.master')

@section('title')
Exarweb
@endsection

@section('content')
Tambah Listing
@endsection


@section('content2')
<div class="w3-container w3-blue w3-padding-32">
    <!--Awal bagian container-->
    <div class="W3-container">
        <div class="w3-padding">

            {{-- Header --}}
            <div class="w3-half w3-padding">
                <div class="w3-card-4">
                    <div class="w3-container w3-pale-green">
                        <h2>{{ $mlisting->nama }}</h2>
                        <h4> id listing: {{ $mlisting->id }}</h4>
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

                    {{-- Form --}}
                    <form enctype="multipart/form-data" class="w3-container" action="{{ route('Listing.Simpan.Foto') }}" method="post">
                        <input hidden type="text" name="mlisting_id" value="{{ $mlisting->id }}">
                        <p>
                            <label>Foto Properti</label>
                            <input class="w3-input" type="file" name="ml_img"></p>
                        @if ($errors->has('ml_img'))
                        <p> {{ $errors->first('ml_img') }} </p>
                        @endif


                        <input type="submit" name="submit" value="Simpan Foto Ini" class="w3-btn w3-green w3-round-large"></input>
                        <a href="{{ route('Listing_Default') }}"class="w3-button w3-red w3-round-large">Selesai</a>

                        <br/>
                        <br/>
                        {{ csrf_field() }}
                    </form>
                    {{-- Tombol Kembali --}}
                </div>
                {{-- tampilan foto dikanan --}}
            </div>
            <div class="w3-half w3-padding">
                <div class="w3-card-4">
                    <div class="w3-container w3-pale-green">
                        <h2>Foto</h2>
                    </div>
                    @foreach ($images as $img)
                    <p>
                        <img src="{{ url('/storage/mlisting') }}/{{$img->imageid}}.jpeg " alt="foto listing" style="width:100%">
                    </p>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
