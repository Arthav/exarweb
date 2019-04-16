<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mlisting;
use App\Image;
use App\Mnew;

class WelcomeController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
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
        $max_price = isset($_GET['max_price']) && $_GET['max_price'] != '' ? $_GET['max_price'] : 999999999999999;
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
                ->Where("mlistings.luas_bangunan", "like", $luas_bangunan != '' ? $luas_bangunan : '%')
                ->orWhereNull("mlistings.luas_bangunan")
                ->Where("mlistings.luas_tanah", "like", $luas_tanah != '' ? $luas_tanah : '%')
                ->orWhereNull("mlistings.luas_tanah")
                ->Where("mlistings.arah_properti", "like", $arah_properti != '' ? $arah_properti : '%')
                // ->orWhereNull("mlistings.arah_properti")
                ->Where("mlistings.tipe_unit", "like", $tipe_unit != '' ? $tipe_unit : '%')
                // ->orWhereNull("mlistings.tipe_unit")
                ->groupBy("mlistings.id")
                ->get()
        ;
        $mlistings2 = mlisting::all()->first();
        $listing1 = image::all()
                ->where("mlisting_id", "=", isset($mlistings2->id) ? $mlistings2->id : 0 )
        ;
        return view('welcome', compact('mlistings', 'listing1', 'kota', 'price', 'jenis_list', 'jenis_properti', 'kamar_tidur', 'kamar_mandi', 'luas_bangunan', 'luas_tanah', 'arah_properti'));
    }

    public function properti() {
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
        $max_price = isset($_GET['max_price']) && $_GET['max_price'] != '' ? $_GET['max_price'] : 999999999999999;
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
                ->Where("mlistings.tipe_unit", "like", $tipe_unit != '' ? $tipe_unit : '%')
                // ->orWhereNull("mlistings.tipe_unit")
                ->Where("mlistings.kota", "like", $kota != '' ? $kota : '%')
                ->orderby("mlistings.id","desc")
                ->groupBy("mlistings.id")
                ->get()
        ;
        $mlistings2 = mlisting::all()->first();
        $listing1 = image::all()
                ->where("mlisting_id", "=", isset($mlistings2->id) ? $mlistings2->id : 0 )
        ;
        return view('properti', compact('mlistings', 'listing1', 'kota', 'price', 'jenis_list', 'jenis_properti', 'kamar_tidur', 'kamar_mandi', 'luas_bangunan', 'luas_tanah', 'arah_properti'));
    }

    public function propertishow($id) {
        // dd($id);
        $mlistings = mlisting::leftjoin('images', 'mlistings.id', '=', 'mlisting_id')
                ->selectRaw("mlistings.id,mlistings.nama as nama,jenis_list,price,commission,nama_pemilik,no_pemilik,tipe_unit,total_unit,available_unit,jenis_properti,luas_bangunan,luas_tanah,tinggi,lantai,lokasi,kamar_mandi,kamar_tidur,arah_properti,spesifikasi,kota,listrik,legalitas,user_id,mdeveloper_id,mlistings.created_at, images.imageid,mlisting_id")
                ->groupBy("mlistings.id", "mlistings.nama", "mlistings.price", "mlistings.commission", "mlistings.nama_pemilik", "mlistings.no_pemilik", "mlistings.tipe_unit", "mlistings.available_unit", "mlistings.total_unit", "mlistings.jenis_properti", "mlistings.luas_bangunan", "mlistings.luas_tanah", "mlistings.tinggi", "mlistings.lantai", "mlistings.lokasi", "mlistings.kamar_mandi", "mlistings.kamar_tidur", "mlistings.arah_properti", "mlistings.spesifikasi", "mlistings.kota", "mlistings.listrik", "mlistings.legalitas", "mlistings.user_id", "mlistings.mdeveloper_id", "mlistings.created_at", "images.imageid", "mlisting_id")
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

        // dd($listing1);
        return view('propertishow', compact('mlistings', 'listing1', 'listing2'));
    }

    public function artikel() {
        $mnews = Mnew::all();
        return view('artikel', compact('mnews'));
    }

    public function kontak() {
        return view('kontak');
    }

    public function about() {
        return view('about');
    }

}
