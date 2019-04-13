@extends('layouts.master')

@section('title')
Exarweb
@endsection

@section('content')
Tambah Calendar
@endsection


@section('content2')
<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

<div class="w3-padding">

    <div class="w3-padding">
        <div class="w3-card-4">
            <div class="w3-container w3-pale-green">
                <h2>Form Calendar</h2>
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
            <form enctype="multipart/form-data" class="w3-container" action="{{ route('Calendar.Simpan') }}" method="post">
                <p>
                    <label>Nama Jadwal</label>
                    <input required class="w3-input" type="text" name="schedule_name">
                </p>
                <p>
                    <label>Jadwal Mulai</label>
                    <div class='input-group'>
                        <input type='text' class="form-control date" name="schedule_start"  required />
                    </div>
                </p>
                <p>
                    <label>Jadwal Selesai </label>
                    <div class='input-group'>
                        <input type='text' class="form-control date" name="schedule_end" required />
                    </div>
                </p>
                <p>
                    <label>Deskripsi Jadwal </label>
                    <textarea class="w3-input" name="schedule_description"></textarea>
                </p>
                <p>
                    <input type="submit" name="submit" value="Simpan Jadwal" class="w3-btn w3-green"></input>
                    {{ csrf_field() }}
                </p>
            </form>
            <br><br>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function () {
    $('.date').datetimepicker({
        format: 'DD-MM-YYYY, HH:mm:ss'
    });
});
</script>

@endsection
