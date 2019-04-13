<?php

namespace App\Exports;

use App\Mpolicy;
use App\User;
use App\Mtransaction;
use App\Mrole;
use App\Mlisting;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class OverviewExport implements WithHeadings, ShouldAutoSize,FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */



    public function headings(): array
    {
        return [
            'ID Agen',
            'Nama Agen',
            'Jumlah Penjualan ',
            'Total Komisi Marketing',
            'Potongan Pajak',
            'Total Komisi Akhir Marketing'
        ];
    }


    public function collection()
    {
        

        return user::leftjoin('mlistings','mlistings.user_id','=','users.id')
        ->leftjoin('mtransactions','mlistings.id' ,'=', 'mlisting_id')
        ->selectRaw("users.id,`name`,count(if(sold='0',user_id,null)) as ListNow,count(if(sold='1',user_id,null)) as ListSold,if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null))) as KomisiBersih,if(if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)))*(ppn/100) is null,0,if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)))*(ppn/100)) as Pajak,(if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null))))-(if(if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*-round(split_fee/100)),null)))*(ppn/100) is null,0,if(sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(split_fee/100)),null)))*(ppn/100))) as komisiakir")       
        ->where(function ($query){
            $query->where('users.delet','=','0');
        })
        ->where(function ($query){
            $query->where('mlistings.delet','=','0') 
                  ->orwherenull('mlistings.delet') ;
        })
        ->groupBy('users.id')
        ->orderBy('users.id')
        ->paginate(10);
    }
}
