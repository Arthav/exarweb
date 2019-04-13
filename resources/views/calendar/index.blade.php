<!-- DONE -->
<!-- Listing list-->
@extends('layouts.master')

@section('title')
Exarweb: Calendar
@endsection


@section('content')
<link href="{{ asset('css/fullcalendar/fullcalendar.min.css') }}" rel='stylesheet' />
<link href="{{ asset('css/fullcalendar/fullcalendar.print.min.css') }}" rel='stylesheet' media='print' />
<script src="{{ asset('js/fullcalendar/lib/moment.min.js') }}"></script>
<script src="{{ asset('js/fullcalendar/lib/jquery.min.js') }}"></script>
<script src="{{ asset('js/fullcalendar/fullcalendar.min.js') }}"></script>
<script>

$(document).ready(function () {

    $('#calendar').fullCalendar({!!json_encode($list_calendar)!!});
});

</script>
<style>

    body {
        margin: 40px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }

</style>
<br>
@endsection



@section('content2')
<div class="row" style="padding:25px;">
    <div class="col-md-6">
        <h4>Calendar</h4>
    </div>
    <div class="col-md-6 text-right">
        @if (\App\User::where('id',Auth::user()->id)->first()->mrole_id == 1)
            <a href="{{ route('Calendar.Tambah') }}" class="btn btn-primary" >Tambah Jadwal &raquo;</a>  
        @endif
    </div>
</div>
<hr/>
<div id='calendar'></div>

@endsection
