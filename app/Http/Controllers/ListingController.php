<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use App\Mlisting;
use App\Mtransaction;
use App\User;
use App\Image;
Use App\Mdeveloper;
use Auth;
use App\Image_uploaded;

class ListingController extends Controller {

    public function index() {
        $kota = isset($_GET['kota']) ? $_GET['kota'] : '';
        $price = isset($_GET['price']) ? $_GET['price'] : '';
        $jenis_list = isset($_GET['jenis_list']) ? $_GET['jenis_list'] : '';
        $jenis_properti = isset($_GET['jenis_properti']) ? $_GET['jenis_properti'] : '';
        $kamar_tidur = isset($_GET['kamar_tidur']) ? $_GET['kamar_tidur'] : '';
        $kamar_mandi = isset($_GET['kamar_mandi']) ? $_GET['kamar_mandi'] : '';
        $luas_bangunan = isset($_GET['luas_bangunan']) ? $_GET['luas_bangunan'] : '';
        $luas_tanah = isset($_GET['luas_tanah']) ? $_GET['luas_tanah'] : '';
        $arah_properti = isset($_GET['arah_properti']) ? $_GET['arah_properti'] : '';
        $min_price = isset($_GET['min_price']) && $_GET['min_price'] != '' ? $_GET['min_price'] : 0;
        $max_price = isset($_GET['max_price']) && $_GET['max_price'] != '' ? $_GET['max_price'] : 999999999999;
        $mlistings = mlisting::leftjoin('images', 'mlistings.id', '=', 'mlisting_id')
                ->selectRaw("mlistings.id as listid,mlistings.nama,jenis_list,price,commission,nama_pemilik,no_pemilik,tipe_unit,total_unit,available_unit,jenis_properti,luas_bangunan,luas_tanah,tinggi,lantai,lokasi,kamar_mandi,kamar_tidur,arah_properti,spesifikasi,kota,listrik,legalitas,user_id,mdeveloper_id,mlistings.created_at,min(imageid) imageid,mlisting_id")
                ->Where("mlistings.sold","=",0)
                ->Where("mlistings.delet","=",0)
                ->Where("mlistings.kota", "like", $kota != '' ? $kota : '%')
                // ->orWhereNull("mlistings.kota")
                ->whereBetween("mlistings.price", [$min_price, $max_price])
                ->Where("mlistings.jenis_list", "like", $jenis_list != '' ? $jenis_list : '%')
                // ->orWhereNull("mlistings.jenis_list")
                ->Where("mlistings.jenis_properti", "like", $jenis_properti != '' ? $jenis_properti : '%')
                // ->orWhereNull("mlistings.jenis_properti")
                ->Where("mlistings.kamar_tidur", "like", $kamar_tidur != '' ? $kamar_tidur : '%')
                // ->orWhereNull("mlistings.kamar_tidur")
                ->Where("mlistings.kamar_mandi", "like", $kamar_mandi != '' ? $kamar_mandi : '%')
                // ->orWhereNull("mlistings.kamar_mandi")
                // ->Where("mlistings.luas_bangunan", "like", $luas_bangunan != '' ? $luas_bangunan : '%')
                // ->orWhereNull("mlistings.luas_bangunan")
                // ->Where("mlistings.luas_tanah", "like", $luas_tanah != '' ? $luas_tanah : '%')
                // ->orWhereNull("mlistings.luas_tanah")
                ->Where("mlistings.arah_properti", "like", $arah_properti != '' ? $arah_properti : '%')
                // ->orWhereNull("mlistings.arah_properti")
                ->Where("mlistings.kota", "like", $kota != '' ? $kota : '%')
                ->groupBy("mlistings.id")
                ->get()
        ;
        
        return view('listing.index', compact('mlistings', 'kota', 'price', 'jenis_list', 'jenis_properti', 'kamar_tidur', 'kamar_mandi', 'luas_bangunan', 'luas_tanah', 'arah_properti', 'tipe_unit','min_price','max_price'));
    }

    public function show($id) {
        // dd($id);
        $mlistings = mlisting::leftjoin('images', 'mlistings.id', '=', 'mlisting_id')
                ->selectRaw("mlistings.id,mlistings.nama as nama,jenis_list,price,commission,nama_pemilik,no_pemilik,tipe_unit,total_unit,available_unit,jenis_properti,luas_bangunan,luas_tanah,tinggi,lantai,lokasi,kamar_mandi,kamar_tidur,arah_properti,spesifikasi,kota,listrik,legalitas,user_id,mdeveloper_id,mlistings.created_at, images.imageid,mlisting_id,sold")
                ->groupBy("mlistings.id", "mlistings.nama", "mlistings.price", "mlistings.commission", "mlistings.nama_pemilik", "mlistings.no_pemilik", "mlistings.tipe_unit", "mlistings.available_unit", "mlistings.total_unit", "mlistings.jenis_properti", "mlistings.luas_bangunan", "mlistings.luas_tanah", "mlistings.tinggi", "mlistings.lantai", "mlistings.lokasi", "mlistings.kamar_mandi", "mlistings.kamar_tidur", "mlistings.arah_properti", "mlistings.spesifikasi", "mlistings.kota", "mlistings.listrik", "mlistings.legalitas", "mlistings.user_id", "mlistings.mdeveloper_id", "mlistings.created_at", "images.imageid", "mlisting_id", "sold")
                ->where("mlistings.id", "=", $id)
                ->first()
        ;

        $listing1 = image::all()
                ->where("mlisting_id", "=", $id)
                ->first()
        ;

        $listing2 = image::all()
                ->where("mlisting_id", "=", $id)
        ;

        $user = User::all();

        // dd($listing1);
        return view('listing.show', compact('mlistings', 'listing1', 'listing2', 'user'));
    }

    public function tambah_listing() {
        $dev = mdeveloper::all()
        ->where('delet','=','0');
        return view('listing.tambahlisting',compact('dev'));
    }

    public function simpan_listing(Request $request) {
        $this->validate($request, [
            'nama' => 'required'
        ]);
        $mlisting = new Mlisting;
        $mlisting->user_id = Auth::user()->id;
        $mlisting->nama = $request->nama;
        $mlisting->jenis_list = $request->jenis_list;
        $mlisting->price = $request->price;
        $mlisting->commission = $request->commission;
        $mlisting->nama_pemilik = $request->nama_pemilik;
        $mlisting->no_pemilik = $request->no_pemilik;
        $mlisting->tipe_unit = $request->tipe_unit;
        $mlisting->total_unit = $request->total_unit;
        $mlisting->jenis_properti = $request->jenis_properti;       
        $mlisting->luas_bangunan = $request->luas_bangunan;    
        $mlisting->luas_tanah = $request->luas_tanah;
                                
        $mlisting->tinggi = $request->tinggi;
        $mlisting->lantai = $request->lantai;
        $mlisting->lokasi = $request->lokasi;

        $km = $request->kamar_mandi;
        if ($km == NULL){
            $mlisting->kamar_mandi = "0";
        }else{
            $mlisting->kamar_mandi = $request->kamar_mandi;
        }
        $kt =  $request->kamar_tidur;
        if ($kt == NULL){
            $mlisting->kamar_tidur = "0";
        }else{
            $mlisting->kamar_tidur = $request->kamar_tidur;
        }
                
        $mlisting->arah_properti = $request->arah_properti;
        $mlisting->spesifikasi = $request->spesifikasi;
        $mlisting->kota = $request->kota;
        $mlisting->listrik = $request->listrik;
        $mlisting->legalitas = $request->legalitas;
        $mlisting->mdeveloper_id = $request->mdeveloper_id;
        $mlisting->sold = 0;
        $mlisting->save();

        $next = Mlisting::where('user_id', Auth::user()->id)->orderby('id', 'ASC')->get()->last();
        return redirect()->route('Listing.Tambah.Foto', ['id' => $next->id]);
    }

    public function tambah_listing_foto(Request $request) {
        // dd($request->id);

        $mlisting = Mlisting::find($request->id);
        $images = Image::where('mlisting_id', $request->id)->orderby('imageid', 'DESC')->get();
        
        return view('listing.tambahlistingfoto', compact('mlisting', 'images'));
    }

    public function simpan_listing_foto(Request $request) {

        $this->validate($request, [
            'ml_img' => 'mimes:jpeg,jpg|max:10000',
        ]);


        if ($request->file('ml_img')) {
            $file = $request->file('ml_img');
            $image = new Image;
            $image->mlisting_id = $request->mlisting_id;
            $image->save();

            $img_name = Image::where('mlisting_id', $request->mlisting_id)->orderby('imageid', 'ASC')->get()->last();

            $nama_gambar = $img_name->imageid . '.jpeg';
            $request->file('ml_img')->storeAs('/public/mlisting', $nama_gambar);

            // $mlisting->gambar = $nama_gambar;
        }

        $next = $request->mlisting_id;
        return redirect()->route('Listing.Tambah.Foto', ['id' => $next]);
    }

    public function ubah_listing() {
        return view('listing.ubahlisting');
    }

    public function primary() {
        $kota = isset($_GET['kota']) ? $_GET['kota'] : '';
        $price = isset($_GET['price']) ? $_GET['price'] : '';
        $jenis_list = isset($_GET['jenis_list']) ? $_GET['jenis_list'] : '';
        $jenis_properti = isset($_GET['jenis_properti']) ? $_GET['jenis_properti'] : '';
        $kamar_tidur = isset($_GET['kamar_tidur']) ? $_GET['kamar_tidur'] : '';
        $kamar_mandi = isset($_GET['kamar_mandi']) ? $_GET['kamar_mandi'] : '';
        $tipe_unit = isset($_GET['tipe_unit']) ? $_GET['tipe_unit'] : '';
        $luas_bangunan = isset($_GET['luas_bangunan']) ? $_GET['luas_bangunan'] : '';
        $luas_tanah = isset($_GET['luas_tanah']) ? $_GET['luas_tanah'] : '';
        $arah_properti = isset($_GET['arah_properti']) ? $_GET['arah_properti'] : '';
        $min_price = isset($_GET['min_price']) && $_GET['min_price'] != '' ? $_GET['min_price'] : 0;
        $max_price = isset($_GET['max_price']) && $_GET['max_price'] != '' ? $_GET['max_price'] : 9999999999;
        $mlistings = mlisting::leftjoin('images', 'mlistings.id', '=', 'mlisting_id')
                ->selectRaw("mlistings.id as listid,mlistings.nama,jenis_list,price,commission,nama_pemilik,no_pemilik,tipe_unit,total_unit,available_unit,jenis_properti,luas_bangunan,luas_tanah,tinggi,lantai,lokasi,kamar_mandi,kamar_tidur,arah_properti,spesifikasi,kota,listrik,legalitas,user_id,mdeveloper_id,mlistings.created_at,min(imageid) imageid,mlisting_id")
                ->Where("mlistings.kota", "like", $kota != '' ? $kota : '%')
                // ->orWhereNull("mlistings.kota")
                ->whereBetween("mlistings.price", [$min_price, $max_price])
                ->where("tipe_unit","<>",NULL)
                ->Where("mlistings.jenis_list", "like", $jenis_list != '' ? $jenis_list : '%')
                // ->orWhereNull("mlistings.jenis_list")
                ->Where("mlistings.jenis_properti", "like", $jenis_properti != '' ? $jenis_properti : '%')
                // ->orWhereNull("mlistings.jenis_properti")
                ->Where("mlistings.kamar_tidur", "like", $kamar_tidur != '' ? $kamar_tidur : '%')
                // ->orWhereNull("mlistings.kamar_tidur")
                ->Where("mlistings.kamar_mandi", "like", $kamar_mandi != '' ? $kamar_mandi : '%')
                // ->orWhereNull("mlistings.kamar_mandi")
                ->Where("mlistings.luas_bangunan", "like", $luas_bangunan != '' ? $luas_bangunan : '%')
                // ->orWhereNull("mlistings.luas_bangunan")
                ->Where("mlistings.luas_tanah", "like", $luas_tanah != '' ? $luas_tanah : '%')
                ->orWhereNull("mlistings.luas_tanah")
                ->Where("mlistings.arah_properti", "like", $arah_properti != '' ? $arah_properti : '%')
                // ->orWhereNull("mlistings.arah_properti")
                ->Where("mlistings.tipe_unit", "like", $tipe_unit != '' ? $tipe_unit : '%')
                // ->orWhereNull("mlistings.tipe_unit")
                ->groupBy("mlistings.id")
                ->get()
        ;
       

        return view('listing.primary', compact('mlistings', 'kota', 'price', 'jenis_list', 'jenis_properti', 'kamar_tidur', 'kamar_mandi', 'luas_bangunan', 'luas_tanah', 'arah_properti', 'tipe_unit','min_price','max_price'));
    }

    public function closing(Request $request) {
        $this->validate($request, [
            'mlistingid' => 'required'
        ]);
        $muser = User::query()
                ->leftjoin('mroles as mr', 'mr.id', '=', 'users.mrole_id')
                ->leftjoin('mpolicies as mp', 'mp.id', '=', 'users.mrole_id')
                ->where('users.id', '=', Auth::user()->id)
                ->get([
                    'mp.nama',
                    'mp.co_broke',
                    'mp.reference',
                    'mp.min_sell',
                    'mp.split_fee',
                    'mp.co_fee',
                    'mp.reference_fee',
                    'mp.ppn',
                ])

                ->first();

        $mlistings = mlisting::find($request->mlistingid);
        $mlistings->sold = 1;
        $mlistings->save();

        $mtransaction = new Mtransaction();

        $mtransaction->property_sold = 1;
        $mtransaction->co_broke = $request->user_id;
        $mtransaction->reference = $muser->split_fee;
        $mtransaction->close_price = $request->close_price;
        $mtransaction->final_commission = $request->final_commission;
        $mtransaction->split_fee = $muser->split_fee;
        $mtransaction->co_fee = $muser->co_fee;
        $mtransaction->reference_fee = $muser->reference_fee;
        $mtransaction->cobroke_id = Auth::user()->id;
        $mtransaction->ppn = $muser->ppn;
        $mtransaction->delet = 0;
        $mtransaction->mlisting_id = $request->mlistingid;
        $mtransaction->created_at = date('Y-m-d H:i:s');
        $mtransaction->updated_at = date('Y-m-d H:i:s');

        $mtransaction->save();

        return redirect()->route('Listing.Show', ['id' => $request->mlistingid]);
    }

    public function sold() {
        $kota = isset($_GET['kota']) ? $_GET['kota'] : '';
        $price = isset($_GET['price']) ? $_GET['price'] : '';
        $jenis_list = isset($_GET['jenis_list']) ? $_GET['jenis_list'] : '';
        $jenis_properti = isset($_GET['jenis_properti']) ? $_GET['jenis_properti'] : '';
        $kamar_tidur = isset($_GET['kamar_tidur']) ? $_GET['kamar_tidur'] : '';
        $kamar_mandi = isset($_GET['kamar_mandi']) ? $_GET['kamar_mandi'] : '';
        $tipe_unit = isset($_GET['tipe_unit']) ? $_GET['tipe_unit'] : '';
        $luas_bangunan = isset($_GET['luas_bangunan']) ? $_GET['luas_bangunan'] : '';
        $luas_tanah = isset($_GET['luas_tanah']) ? $_GET['luas_tanah'] : '';
        $arah_properti = isset($_GET['arah_properti']) ? $_GET['arah_properti'] : '';
        $min_price = isset($_GET['min_price']) && $_GET['min_price'] != '' ? $_GET['min_price'] : 0;
        $max_price = isset($_GET['max_price']) && $_GET['max_price'] != '' ? $_GET['max_price'] : 9999999999;
        
        $mlistings = mlisting::leftjoin('images', 'mlistings.id', '=', 'mlisting_id')
                ->selectRaw("mlistings.id as listid,mlistings.nama,jenis_list,price,commission,nama_pemilik,no_pemilik,tipe_unit,total_unit,available_unit,jenis_properti,luas_bangunan,luas_tanah,tinggi,lantai,lokasi,kamar_mandi,kamar_tidur,arah_properti,spesifikasi,kota,listrik,legalitas,user_id,mdeveloper_id,mlistings.created_at,min(imageid) imageid,mlisting_id")
                ->Where("mlistings.sold","=",1)
                ->Where("mlistings.delet","=",0)
                ->Where("mlistings.kota", "like", $kota != '' ? $kota : '%')
                // ->orWhereNull("mlistings.kota")
                ->whereBetween("mlistings.price", [$min_price, $max_price])
                ->Where("mlistings.jenis_list", "like", $jenis_list != '' ? $jenis_list : '%')
                // ->orWhereNull("mlistings.jenis_list")
                ->Where("mlistings.jenis_properti", "like", $jenis_properti != '' ? $jenis_properti : '%')
                // ->orWhereNull("mlistings.jenis_properti")
                ->Where("mlistings.kamar_tidur", "like", $kamar_tidur != '' ? $kamar_tidur : '%')
                // ->orWhereNull("mlistings.kamar_tidur")
                ->Where("mlistings.kamar_mandi", "like", $kamar_mandi != '' ? $kamar_mandi : '%')
                // ->orWhereNull("mlistings.kamar_mandi")
                ->Where("mlistings.luas_bangunan", "like", $luas_bangunan != '' ? $luas_bangunan : '%')
                // ->orWhereNull("mlistings.luas_bangunan")
                ->Where("mlistings.luas_tanah", "like", $luas_tanah != '' ? $luas_tanah : '%')
                ->orWhereNull("mlistings.luas_tanah")
                ->Where("mlistings.arah_properti", "like", $arah_properti != '' ? $arah_properti : '%')
                // ->orWhereNull("mlistings.arah_properti")
                ->Where("mlistings.tipe_unit", "like", $tipe_unit != '' ? $tipe_unit : '%')
                // ->orWhereNull("mlistings.tipe_unit")
                ->groupBy("mlistings.id")
                ->get()
        ;
       

        return view('listing.Sold', compact('mlistings', 'kota', 'price', 'jenis_list', 'jenis_properti', 'kamar_tidur', 'kamar_mandi', 'luas_bangunan', 'luas_tanah', 'arah_properti', 'tipe_unit','min_price','max_price'));
    }

    public function mylisting() {
        $kota = isset($_GET['kota']) ? $_GET['kota'] : '';
        $price = isset($_GET['price']) ? $_GET['price'] : '';
        $jenis_list = isset($_GET['jenis_list']) ? $_GET['jenis_list'] : '';
        $jenis_properti = isset($_GET['jenis_properti']) ? $_GET['jenis_properti'] : '';
        $kamar_tidur = isset($_GET['kamar_tidur']) ? $_GET['kamar_tidur'] : '';
        $kamar_mandi = isset($_GET['kamar_mandi']) ? $_GET['kamar_mandi'] : '';
        $tipe_unit = isset($_GET['tipe_unit']) ? $_GET['tipe_unit'] : '';
        $luas_bangunan = isset($_GET['luas_bangunan']) ? $_GET['luas_bangunan'] : '';
        $luas_tanah = isset($_GET['luas_tanah']) ? $_GET['luas_tanah'] : '';
        $arah_properti = isset($_GET['arah_properti']) ? $_GET['arah_properti'] : '';
        $min_price = isset($_GET['min_price']) && $_GET['min_price'] != '' ? $_GET['min_price'] : 0;
        $max_price = isset($_GET['max_price']) && $_GET['max_price'] != '' ? $_GET['max_price'] : 9999999999;
        $userids = Auth::user()->id;
        $mlistings = mlisting::leftjoin('images', 'mlistings.id', '=', 'mlisting_id')
                ->selectRaw("mlistings.id as listid,mlistings.nama,jenis_list,price,commission,nama_pemilik,no_pemilik,tipe_unit,total_unit,available_unit,jenis_properti,luas_bangunan,luas_tanah,tinggi,lantai,lokasi,kamar_mandi,kamar_tidur,arah_properti,spesifikasi,kota,listrik,legalitas,user_id,mdeveloper_id,mlistings.created_at,min(imageid) imageid,mlisting_id")
                ->Where("mlistings.user_id","=",$userids)
                ->Where("mlistings.delet","=",0)
                ->Where("mlistings.kota", "like", $kota != '' ? $kota : '%')
                // ->orWhereNull("mlistings.kota")
                ->whereBetween("mlistings.price", [$min_price, $max_price])
                ->Where("mlistings.jenis_list", "like", $jenis_list != '' ? $jenis_list : '%')
                // ->orWhereNull("mlistings.jenis_list")
                ->Where("mlistings.jenis_properti", "like", $jenis_properti != '' ? $jenis_properti : '%')
                // ->orWhereNull("mlistings.jenis_properti")
                ->Where("mlistings.kamar_tidur", "like", $kamar_tidur != '' ? $kamar_tidur : '%')
                // ->orWhereNull("mlistings.kamar_tidur")
                ->Where("mlistings.kamar_mandi", "like", $kamar_mandi != '' ? $kamar_mandi : '%')
                // ->orWhereNull("mlistings.kamar_mandi")
                ->Where("mlistings.luas_bangunan", "like", $luas_bangunan != '' ? $luas_bangunan : '%')
                // ->orWhereNull("mlistings.luas_bangunan")
                ->Where("mlistings.luas_tanah", "like", $luas_tanah != '' ? $luas_tanah : '%')
                ->orWhereNull("mlistings.luas_tanah")
                ->Where("mlistings.arah_properti", "like", $arah_properti != '' ? $arah_properti : '%')
                // ->orWhereNull("mlistings.arah_properti")
                ->Where("mlistings.tipe_unit", "like", $tipe_unit != '' ? $tipe_unit : '%')
                // ->orWhereNull("mlistings.tipe_unit")
                ->groupBy("mlistings.id")
                ->get()
        ;
       

        return view('listing.mylisting', compact('mlistings', 'kota', 'price', 'jenis_list', 'jenis_properti', 'kamar_tidur', 'kamar_mandi', 'luas_bangunan', 'luas_tanah', 'arah_properti', 'tipe_unit','min_price','max_price'));
    }

    Public function hapus(Request $request, $id)
    {       
        dd($id);
        $list = mlisting::find($id);
        $list->delet = '1' ;
        $list->save();

        return redirect()->route('Listing_Default');
    }

}
