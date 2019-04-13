<!-- DONE -->
<!-- Listing list-->
@extends('layouts.master')

@section('title')
Exarweb: Daftar Artikel
@endsection

@section('content')
<br>
Artikel List
@endsection



@section('content2')
<div class="row" style="padding:25px;">
    <div class="col-md-6">
        <h4>Artikel</h4>
    </div>
    <div class="col-md-6 text-right">
        @if (\App\User::where('id',Auth::user()->id)->first()->mrole_id == 1)
            <a href="{{ route('News.Tambah') }}" class="btn btn-primary" >Tambah Artikel &raquo;</a> 
        @endif 
    </div>
</div>
<hr/>
@foreach($mnews as $list)
<div class="col-md-12" style="border: 1px solid #999999">
    <div class="agenproperti-thumb">
        <div class="agenproperti-title"><h4>{{$list->judul}}</h4>
            <p>{{substr($list->isi_artikel, 0, 100). " ... " }}<a href="{{ route('News.Show', ['id' => $list->id]) }}">Baca Selengkapnya &raquo;</a></p><br/></div>

    </div>
</div>

@endforeach
@endsection
