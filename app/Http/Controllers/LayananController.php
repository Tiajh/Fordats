<?php //tanda awal file php

namespace App\Http\Controllers; //lokasi file berada

use Illuminate\Http\Request; //untuk menerima data dari form/request
use App\Models\Layanan; 
//model adalah penghubung antara kode program dan database
//agar bisa mengakses database melalui Models/Layanan
use Resources\Views\Layanan\index;

class LayananController extends Controller //membuat class dan mewarisi fungsi dari 'Controller'
{
    public function index() //menampilkan daftar data di public ".../Layanan"
    // idex berarti mengambil semua data di /views/Layanan/index.blade.php
    {
        $data = Layanan::all (); //mengambil semua data dari tabel layanan
        return view ('Layanan.index', compact('Layanan')); 
        //mengambil semua data pesanan dari database 'Tabel Layanan' menggunakan Model Layanan
    }

    public function store (Request $request) //menerima data baru dari form dan disimpan ke database
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi' => 'required|string']);

        Layanan::create([$request->all]);

        return redirect()->back()->with('Berhasil, Layanan telah dikirim');
    }

    public function create()
    {
        Layanan::create($request->all());
        return redirect()->back()->with('Berhasil! Layanan telah dibuat');
        // back karena setelah data disimpan, user akan dikembalikan ke halaman sebelumnya 
        // kemudian user akan mendapat pesan 'Berhasil....'
    }
}