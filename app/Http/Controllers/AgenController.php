<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Table
use App\Mpolicy;
use App\Mrole;
Use App\User;

class AgenController extends Controller
{
    Public function index(Request $request)
    {
        $s = $request->input('s');
        $agens=user::where('delet','0')->orderBy('id')->search($s)->paginate(10);
        $mroles=mrole::all();
        // dd($s)->toarray();
        return view('human.agen.index',compact('agens','mroles'));
    }

    Public function show_agen($id)
    {
        
        $agen=user::find($id);
        $mroles=mrole::all();
        // dd($agen);
        return view('human.agen.show',compact('agen','mroles'));
    }

    Public function tambah_agen()
    {
        $mroles=mrole::all();
        return view('human.agen.tambah',compact('mroles'));
    }
 

    Public function ubah_agen(Request $request, $id)
    {
      
      $user = user::find($id);
      $mroles=mrole::all();

      //Data Pribadi = 10
      $user->name = $request->nama ;
      $user->mrole_id = $request->id_jabatan ;
      $user->email = $request->email ;
      $user->alamat = $request->alamat ;
      $user->nik = $request->nik ;
      $user->telp1 = $request->telp1 ;
      $user->telp2 = $request->telp2 ;
      $user->agama = $request->agama ;
      $user->jeniskelamin = $request->jeniskelamin ;
      $user->npwp = $request->npwp ;
      
      $user->save();
      $agen = user::find($id);

    //   return redirect()->route('Human.Agen.Show', ['id' => $id],compact('user','mroles'));
    return redirect()->route('Human.Agen.Show', ['id' => $id]);
    }

    Public function simpan_agen(Request $request)
    {
     
      $user = new user;

      //Data Pribadi = 11
      $user->name = $request->nama ;
      $user->mrole_id = $request->id_jabatan ;
      $user->email = $request->email ;
      $user->alamat = $request->alamat ;
      $user->nik = $request->nik ;
      $user->telp1 = $request->telp1 ;
      $user->telp2 = $request->telp2 ;
      $user->agama = $request->agama ;
      $user->jeniskelamin = $request->jeniskelamin ;
      $user->npwp = $request->npwp ;
      $user->password = bcrypt($request->password) ;
      
      $user->save();
      return redirect()->route('Human.Agen');
    }
    

    Public function hapus_agen(Request $request, $id)
    {
        $listing_hapus = mlisting::where('user_id','=',$id)->update(['delet' => '1']);

        $user = user::find($id);
        $user->delet = '1' ;
        $user->save();

        return redirect()->route('Human.Agen');
    }
}
