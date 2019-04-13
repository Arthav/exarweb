<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mnew;
use Auth;

class NewsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $mnews = Mnew::all();
        return view('news.index',compact('mnews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah_news() {
        return view('news.tambahnews');
    }

    public function simpan_news(Request $request) {
        $this->validate($request, [
            'judul_artikel' => 'required',
            'isi_artikel' => 'required'
        ]);
        $mcalendar = new Mnew();
        $mcalendar->user_id = Auth::user()->id;
        $mcalendar->judul = $request->judul_artikel;
        $mcalendar->isi_artikel = $request->isi_artikel;
        $mcalendar->created_at = date('Y-m-d H:i:s');
        $mcalendar->updated_at = date('Y-m-d H:i:s');
        $mcalendar->save();

        $next = Mnew::where('user_id', Auth::user()->id)->orderby('id', 'ASC')->get()->last();
        return redirect()->route('News.Show', ['id' => $next->id]);
    }

    public function show($id) {
        $mnews = Mnew::all()
                ->where("id", "=", $id)
                ->first()
        ;
        return view('news.show', compact('mnews'));
    }

    public function hapus_news(Request $request, $id) {
        $mcalendar = Mnew::find($id);
        $mcalendar->delete();

        return redirect()->route('News');
    }

}
