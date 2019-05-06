<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;
use App\Exports\OverviewExport;
use Maatwebsite\Excel\Facades\Excel;

//Table
use App\Mpolicy;
use App\User;
use App\Mtransaction;
use App\Mrole;
use App\Mlisting;
use Auth;



class ReportController extends Controller
{

    public function download_overview()
    {
      
        return Excel::download(new OverviewExport, 'Laporan Agen.xlsx');
    }

    Public function penjualan_agen(Request $request)
    {        
        $now = carbon::now();
        $bulan = $request->input('bulan');
        if($bulan == null){
            $bulan = $now->month;
        }
        $tahun = $request->input('tahun');
        if($tahun == null){
            $tahun = $now->year;
        }

        $overview=DB::select(DB::raw("select A.id, A.name, A.ListNow, A.ListSold, A.KomisiBersih,A.potongan,B.tambahan, A.KomisiBersih-A.potongan+B.tambahan as komisiTengah, if((A.KomisiBersih-A.potongan+B.tambahan)*ppn/100 is NULL ,0, (A.KomisiBersih-A.potongan+B.tambahan)*ppn/100)as pajak, if(A.KomisiBersih-A.potongan+B.tambahan-((A.KomisiBersih-A.potongan+B.tambahan)*ppn/100)is null,0,A.KomisiBersih-A.potongan+B.tambahan-((A.KomisiBersih-A.potongan+B.tambahan)*ppn/100)) as komisiAkir from (select users.id,`name`,count(if(sold='0',user_id,null)) as ListNow, count(if(sold='1',user_id,null)) as ListSold,if(sum(if(sold='1',round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)),null))) as KomisiBersih, sum(if(co_broke<>0,round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)*co_fee/100),0)) as potongan, ppn from users left join mlistings m on users.id = m.user_id left join mtransactions m2 on m.id = m2.mlisting_id where month(m2.created_at) = ".$bulan." and year(m2.created_at) = ".$tahun." group by users.id order by users.id) as A join (select users.id,sum(if(co_broke=users.id,round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)*co_fee/100),0)) as tambahan from users left join mtransactions on users.id = co_broke group by users.id order by users.id) as B on A.id = B.id"));
   
        $listingview=user::leftjoin('mlistings','mlistings.user_id','=','users.id')
        ->leftjoin('mtransactions','mlistings.id' ,'=', 'mlisting_id')
        ->selectRaw("users.id,`name`,count(if(sold='0',user_id,null)) as ListNow,count(if(sold='1',user_id,null)) as ListSold,if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null))) as KomisiBersih,if(if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)))*(ppn/100) is null,0,if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)))*(ppn/100)) as Pajak,(if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null))))-(if(if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*-round(split_fee/100)),null)))*(ppn/100) is null,0,if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)))*(ppn/100))) as komisiakir")       
        ->where('users.delet','=','0')
        ->where('mlistings.delet','=','0')
        ->groupBy('user_id','name','users.id')
        ->orderBy('users.id')
        ->paginate(10);
        // dd($listingview->toarray());

        return view('report.penjualanagen.index',compact('overview','bulan','tahun','listingview'));
    }

    Public function penjualan_agen_show($id)
    {        
        // dd($id);
        $agen=user::find($id);
        $allviews=mlisting::join('users', 'mlistings.user_id', '=', 'users.id')
        ->selectRaw("nama,jenis_list,price, jenis_properti,luas_bangunan,luas_tanah,lokasi,kamar_mandi,kamar_tidur,kota,listrik")
        ->where('user_id','=',$id)
        ->where('mlistings.delet','=','0')
        ->paginate(10);

        $availableview=mlisting::join('users', 'mlistings.user_id', '=', 'users.id')
        ->selectRaw("nama,jenis_list,price, jenis_properti,luas_bangunan,luas_tanah,lokasi,kamar_mandi,kamar_tidur,kota,listrik")
        ->where('users.id',$id)
        ->where('sold','=','0')
        ->where('mlistings.delet','=','0')
        ->paginate(10);

        $soldview=mlisting::join('users', 'mlistings.user_id', '=', 'users.id')
        ->selectRaw("nama,jenis_list,price, jenis_properti,luas_bangunan,luas_tanah,lokasi,kamar_mandi,kamar_tidur,kota,listrik")
        ->where('user_id','=',$id)
        ->where('mlistings.delet','=','0')
        ->where('sold','=','1')
        ->paginate(10);

        return view('report.penjualanagen.show',compact('allviews','agen','availableview','soldview'));
    }

    Public function komisi_saya(Request $request)
    {        
        $now = carbon::now();
        $userr = Auth::user()->id;
        $bulan = $request->input('bulan');
        if($bulan == null){
            $bulan = $now->month;
        }
        $tahun = $request->input('tahun');
        if($tahun == null){
            $tahun = $now->year;
        }

        $overview=DB::select(DB::raw("select A.id, A.name, A.ListNow, A.ListSold, A.KomisiBersih,A.potongan,B.tambahan, A.KomisiBersih-A.potongan+B.tambahan as komisiTengah, if((A.KomisiBersih-A.potongan+B.tambahan)*ppn/100 is NULL ,0, (A.KomisiBersih-A.potongan+B.tambahan)*ppn/100)as pajak, if(A.KomisiBersih-A.potongan+B.tambahan-((A.KomisiBersih-A.potongan+B.tambahan)*ppn/100)is null,0,A.KomisiBersih-A.potongan+B.tambahan-((A.KomisiBersih-A.potongan+B.tambahan)*ppn/100)) as komisiAkir from (select users.id,`name`,count(if(sold='0',user_id,null)) as ListNow, count(if(sold='1',user_id,null)) as ListSold,if(sum(if(sold='1',round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)),null))) as KomisiBersih, sum(if(co_broke<>0,round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)*co_fee/100),0)) as potongan, ppn from users left join mlistings m on users.id = m.user_id left join mtransactions m2 on m.id = m2.mlisting_id where month(m2.created_at) = ".$bulan." and year(m2.created_at) = ".$tahun." and users.id=".$userr." group by users.id order by users.id) as A join (select users.id,sum(if(co_broke=users.id,round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)*co_fee/100),0)) as tambahan from users left join mtransactions on users.id = co_broke group by users.id order by users.id) as B on A.id = B.id"));

        $listingview=user::leftjoin('mlistings','mlistings.user_id','=','users.id')
        ->leftjoin('mtransactions','mlistings.id' ,'=', 'mlisting_id')
        ->selectRaw("users.id,`name`,count(if(sold='0',user_id,null)) as ListNow,count(if(sold='1',user_id,null)) as ListSold,if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null))) as KomisiBersih,if(if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)))*(ppn/100) is null,0,if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)))*(ppn/100)) as Pajak,(if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null))))-(if(if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*-round(split_fee/100)),null)))*(ppn/100) is null,0,if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)))*(ppn/100))) as komisiakir")       
        ->groupBy('user_id','name','users.id')
        ->orderBy('users.id')
        ->paginate(10);
        

        return view('report.laporansaya.index',compact('overview','bulan','tahun','listingview'));
    }



}
