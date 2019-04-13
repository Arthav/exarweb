<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Table
use App\Mpolicy;

class PolicyController extends Controller
{
    Public function index()
    {        
        $bijaks=mpolicy::where('delete','0')->paginate(10);
        return view('human.policy.index',compact('bijaks'));
    }

    Public function show_policy($id)
    {        
        $bijaks=mpolicy::find($id);
        return view('human.policy.show',compact('bijaks'));
    }

    Public function tambah_policy()
    {
        $bijaks=mpolicy::all();
        return view('human.policy.tambah',compact('bijaks'));
    }
   
    Public function ubah_policy(Request $request, $id)
    {
      // $karyawan->nama_kolom = isi tabel;
      $mpolicy = mpolicy::find($id);

      //Data = 10
      $mpolicy->nama = $request->nama ;
      $mpolicy->co_broke = $request->co_broke ;
      $mpolicy->reference = $request->reference ;
      $mpolicy->min_sell = $request->min_sell ;
      $mpolicy->split_fee = $request->split_fee ;
      $mpolicy->co_fee = $request->co_fee ;
      
      $mpolicy->save();
      return redirect()->route('Human.Policy.Show', ['id' => $id]);
    }

    Public function simpan_policy(Request $request)
    {
     
      $mpolicy = new mpolicy;

       //Data = 10
       $mpolicy->nama = $request->nama ;
       $mpolicy->co_broke = $request->co_broke ;
       $mpolicy->reference = $request->reference ;
       $mpolicy->min_sell = $request->min_sell ;
       $mpolicy->split_fee = $request->split_fee ;
       $mpolicy->co_fee = $request->co_fee ;
      
      $mpolicy->save();
      return redirect()->route('Human.Policy');
    }

    Public function hapus_policy(Request $request, $id)
    {
        

        $mpolicy = mpolicy::find($id);
        $mpolicy->delete = '1' ;
        $mpolicy->save();
        
        return redirect()->route('Human.Policy');

    }
}
