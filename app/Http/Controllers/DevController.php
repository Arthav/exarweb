<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Mdeveloper;

use Auth;

class DevController extends Controller
{
    Public function index()
    {     

        $devs=mdeveloper::all()
        ->where('delet','=','0');

        // dd($myleads)->toarray();

        return view('developer.index',compact('devs'));
    }

    Public function show_dev($id)
    {
        $devs=mdeveloper::find($id);
        // dd($myleads);
        return view('developer.show',compact('devs'));
        
    }

    Public function tambah_dev()
    {
        return view('developer.tambah');
    }
 

    Public function ubah_dev(Request $request, $id)
    {
      
      $devs = mdeveloper::find($id);

      //Data  = 4
      $devs->nama = $request->nama ;
      $devs->kontak = $request->kontak ;
      $devs->email = $request->email ;
      
      $devs->save();

    return redirect()->route('Dev.Show', ['id' => $id]);
    }

    Public function simpan_dev(Request $request)
    {
     
      $devs = new mdeveloper;

      //Data  = 
      $devs->nama = $request->nama ;
      $devs->kontak = $request->kontak ;
      $devs->email = $request->email ;
      
      $devs->save();
      return redirect()->route('Dev');
    }
    

    Public function hapus_dev(Request $request, $id)
    {
        $mdeveloper = mdeveloper::find($id);
        $mdeveloper->delet = '1' ;
        $mdeveloper->save();

        return redirect()->route('Dev');
    }
}
