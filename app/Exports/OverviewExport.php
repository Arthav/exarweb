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
use DB;

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
            'Komisi Bersih Marketing',
            'Potongan Co-Broke',
            'Komisi Hasil Co-Broke',
            'Komisi Sebelum Pajak',
            'Potongan Pajak',
            'Total Komisi Akhir Marketing'
        ];
    }


    public function collection()
    {
        
        $over = DB::select(DB::raw("select A.id, A.name, A.ListSold, A.KomisiBersih,A.potongan,B.tambahan, A.KomisiBersih-A.potongan+b.tambahan as komisiTengah, if((A.KomisiBersih-A.potongan+b.tambahan)*ppn/100 is NULL ,0, (A.KomisiBersih-A.potongan+b.tambahan)*ppn/100)as pajak, if(A.KomisiBersih-A.potongan+b.tambahan-((A.KomisiBersih-A.potongan+b.tambahan)*ppn/100)is null,0,A.KomisiBersih-A.potongan+b.tambahan-((A.KomisiBersih-A.potongan+b.tambahan)*ppn/100)) as komisiAkir from (select users.id,`name`,count(if(sold='0',user_id,null)) as ListNow, count(if(sold='1',user_id,null)) as ListSold,if(sum(if(sold='1',round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)),null))) as KomisiBersih, sum(if(co_broke<>0,round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)*co_fee/100),0)) as potongan, ppn from users left join mlistings m on users.id = m.user_id left join mtransactions m2 on m.id = m2.mlisting_id group by users.id order by users.id) as A join (select users.id,sum(if(co_broke=users.id,round(close_price*final_commission/100-round(close_price*final_commission/100*split_fee/100)*co_fee/100),0)) as tambahan from users left join mtransactions on users.id = co_broke group by users.id order by users.id) as B on A.id = B.id"));
        return $over;
   
    }
}
