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
            <table class="table table-bordered">
                <tr>
                    <th>Nama Jadwal</th>
                    <td>{{$mcalendars->schedule_name}}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{$mcalendars->schedule_description}}</td>
                </tr>
                <tr>
                    <th>Mulai</th>
                    <td>{{$mcalendars->schedule_start}}</td>
                </tr>
                <tr>
                    <th>Selesai</th>
                    <td>{{$mcalendars->schedule_end}}</td>
                </tr>
            </table>
            @if (\App\User::where('id',Auth::user()->id)->first()->mrole_id == 1)
            <form class="w3-container" action="{{ route('Calendar.Hapus',['id' => $mcalendars->id]) }}" method="post">

                <!-- POP UP DELETE -->
                <div style="color:black">
                    <h3>Apakah anda yakin untuk menghapus Jadwal {{ $mcalendars->schedule_name }}?</h3>
                </div>
                <input class="w3-button w3-block w3-red w3-section w3-padding" type="submit" value="Delete"></input>
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
            </form>
            @endif
        </div>
    </div>
</div>

@endsection
