@extends('layouts.master')

@section('title')
Exarweb
@endsection

@section('content')

@endsection


@section('content2')
<div class="row" style="padding:25px;">
    <div class="col-md-6">
        <h4>Tampil Jadwal</h4>
    </div>
    <div class="col-md-6 text-right">

    </div>
</div>
<hr/>
<div class="w3-padding">

    <div class="w3-padding">
        <div class="w3-card-4">

            <br/>
            <table class="table table-bordered">
                <tr>
                    <th>Judul</th>
                    <td style="text-align: left">{{$mnews->judul}}</td>
                </tr>
                <tr>
                    <th>Isi Artikel</th>
                    <td style="text-align: left">{{$mnews->isi_artikel}}</td>
                </tr>
            </table>
            <form class="w3-container" action="{{ route('News.Hapus',['id' => $mnews->id]) }}" method="post">

                <!-- POP UP DELETE -->
                <div style="color:black">
                    <h3>Apakah anda yakin untuk menghapus Artikel {{ $mnews->judul }}?</h3>
                </div>
                <input class="w3-button w3-block w3-red w3-section w3-padding" type="submit" value="Delete"></input>
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
            </form>
        </div>
    </div>
</div>
@endsection
