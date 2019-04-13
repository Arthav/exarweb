<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mcalendar;
use Auth;

class CalendarController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $list_calendar['defaultDate'] = date('Y-m-d');
        $list_calendar['editable'] = true;
        $list_calendar['eventLimit'] = true;

        $calendar = Mcalendar::all();
        foreach ($calendar as $key => $value) {
            $temp['title'] = $value->schedule_name;
            $temp['url'] = action('CalendarController@show', ['id' => $value->id]);
            $temp['start'] = $value->schedule_start;
            $temp['end'] = $value->schedule_end;
            $list_calendar['events'][] = $temp;
        }
        return view('calendar.index', compact('list_calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah_calendar() {
        return view('calendar.tambahcalendar');
    }

    public function simpan_calendar(Request $request) {
        $this->validate($request, [
            'schedule_name' => 'required',
            'schedule_start' => 'required',
            'schedule_end' => 'required',
            'schedule_description' => 'required',
        ]);
        $mcalendar = new Mcalendar();
        $mcalendar->user_id = Auth::user()->id;
        $mcalendar->schedule_name = $request->schedule_name;
        $mcalendar->schedule_start = date('Y-m-d H:i:s', strtotime($request->schedule_start));
        $mcalendar->schedule_end = date('Y-m-d H:i:s', strtotime($request->schedule_end));
        $mcalendar->schedule_description = $request->schedule_description;
        $mcalendar->created_at = date('Y-m-d H:i:s');
        $mcalendar->updated_at = date('Y-m-d H:i:s');
        $mcalendar->save();

        $next = Mcalendar::where('user_id', Auth::user()->id)->orderby('id', 'ASC')->get()->last();
        return redirect()->route('Calendar.Show', ['id' => $next->id]);
    }

    public function show($id) {
        $mcalendars = Mcalendar::all()
                ->where("id", "=", $id)
                ->first()
        ;
        return view('calendar.show', compact('mcalendars'));
    }

    public function hapus_calendar(Request $request, $id) {
        $mcalendar = Mcalendar::find($id);
        $mcalendar->delete();

        return redirect()->route('Calendar');
    }

}
