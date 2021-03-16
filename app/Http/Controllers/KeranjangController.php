<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keranjang;

class KeranjangController extends Controller
{
    //List Keranjang
    public function listkeranjang(){
        return Keranjang::all();
    }

    //Tambah Keranjang
    public function tambahkeranjang(request $request){
        $keranjang = new Keranjang;
        $keranjang->nama = $request->nama;
        $keranjang->toko = $request->toko;
        $keranjang->jumlah = $request->jumlah;
        $keranjang->harga = $request->harga;
        $keranjang->save();

        return "Data Berhasil di Tambah";
    }

    //Hapus Keranjang
    public function hapuskeranjang($id){
        $keranjang = Keranjang::find($id);
        $keranjang->delete();

        return "Data Berhasil di Hapus";
    }
}