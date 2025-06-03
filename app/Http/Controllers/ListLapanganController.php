<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lapangan;

class ListLapanganController extends Controller
{
    public function simpan(Request $request)
    {
        $produk = new lapangan;
        $produk->nama     = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga    = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function show()
    {
        $data = lapangan::all(); // ambil semua data dari model lapangan
        return view('list_lapangan', compact('data')); // pastikan view 'listlapangan.blade.php' ada
    }
}
