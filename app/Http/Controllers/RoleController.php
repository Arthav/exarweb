<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Table
use App\Mpolicy;
use App\Mrole;
Use App\User;

class RoleController extends Controller
{
  
    Public function index()
    {
        $jabats=mrole::where('delet','0')->paginate(10);
        // dd($jabats->toarray());
        return view('human.jabatan.index',compact('jabats'));
    }

    Public function show_jabatan($id)
    {
        $jabats=mrole::find($id);
        $bijaks=mpolicy::all()
        ->where('delete','=','0');        
        return view('human.jabatan.show',compact('jabats','bijaks'));
    }

    Public function tambah_jabatan()
    {
        $policy=mpolicy::all();    
        $bijaks=mpolicy::all()
        ->where('delete','=','0'); 
        return view('human.jabatan.tambah',compact('policy','bijaks'));
    }   

    Public function ubah_jabatan(Request $request, $id)
    {
      
      $mrole = mrole::find($id);

      //Data Pribadi = 10
      $mrole->nama = $request->nama ;
      $mrole->level = $request->level ;
      $mrole->mpolicy_id = $request->mpolicy_id ;
      
      $mrole->save();
      return redirect()->route('Human.Jabatan.Show', ['id' => $id]);
    }

    Public function simpan_jabatan(Request $request)
    {
     
      $mrole = new mrole;

      //Data jabatan = 3
      $mrole->nama = $request->nama ;
      $mrole->level = $request->level ;
      $mrole->mpolicy_id = $request->mpolicy_id ;
      
      $mrole->save();
      return redirect()->route('Human.Jabatan');
    }

    

    Public function hapus_jabatan(Request $request, $id)
    {      
        $agen = user::where('mrole_id','=',$id)->update(['mrole_id' => '3']);

        $mrole = mrole::find($id);
        $mrole->delet = '1' ;
        $mrole->save();

        return redirect()->route('Human.Jabatan');
    }

}
