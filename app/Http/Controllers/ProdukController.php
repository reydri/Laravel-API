<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    //List Produk
    public function listproduk(){
        return Produk::all();
    }

    //Detail Produk
    public function detailproduk($id){
	    $produk = Produk::find($id);

	    return Produk::find($id);
    }

    //Upload Produk
    public function uploadproduk(request $request){
        $produk = new Produk;
        $produk->nama = $request->nama;
        $produk->toko = $request->toko;
        $produk->harga = $request->harga;
        $produk->save();
    
        return "Data Berhasil di Tambah";
    }

    //Delete Produk
    public function deleteproduk($id){
        $produk = Produk::find($id);
        $produk->delete();

        return "Data Berhasil di Hapus";
    }
}