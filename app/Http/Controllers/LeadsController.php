<?php

namespace App\Http\Controllers;

use App\Mlead;
Use App\User;
use Auth;

use Illuminate\Http\Request;

class LeadsController extends Controller
{
    Public function index(Request $request)
    {
        $s = $request->input('s');
        $leads=mlead::leftjoin('users','mleads.user_id','=','users.id')
        ->selectRaw("mleads.id,deskripsi,users.name,telp1,telp2")
        ->where('mleads.delet','0')
        ->orderBy('mleads.id')
        ->search($s)
        ->paginate(10);
        $uid=Auth::user()->id;

        $myleads=mlead::all()
        ->where('delet','=','0') 
        ->where('user_id','=',$uid);

        // dd($myleads)->toarray();

        return view('leads.index',compact('leads','myleads'));
    }

    Public function show_leads($id)
    {
        $myleads=mlead::find($id);
        // dd($myleads);
        return view('Leads.Show',compact('myleads'));
        
    }

    Public function tambah_leads()
    {
        return view('leads.tambah');
    }
 

    Public function ubah_leads(Request $request, $id)
    {
      
      $mlead = mlead::find($id);

      //Data  = 4
      $mlead->name = $request->nama ;
      $mlead->contact = $request->contact ;
      $mlead->email = $request->email ;
      $mlead->deskripsi = $request->deskripsi;
      
      $mlead->save();

    return redirect()->route('Leads.Show', ['id' => $id]);
    }

    Public function simpan_leads(Request $request)
    {
     
      $mlead = new mlead;

      //Data  = 
      $mlead->name = $request->nama ;
      $mlead->contact = $request->contact ;
      $mlead->email = $request->email ;
      $mlead->deskripsi = $request->deskripsi;
      $mlead->user_id = Auth::user()->id;
      
      $mlead->save();
      return redirect()->route('Leads');
    }
    

    Public function hapus_leads(Request $request, $id)
    {
        $mlead = mlead::find($id);
        $mlead->delet = '1' ;
        $mlead->save();

        return redirect()->route('Leads');
    }
}
