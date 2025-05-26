<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lapangan;

class ListLapanganController extends Controller
{
    public function show()
    {
        $data = lapangan::get();
        foreach ($data as $lapangan) {
            $nama[]  = $lapangan->nama;
            $desc[]  = $lapangan->deskripsi;
            $harga[] = $lapangan->harga;
        }

        return view('list_lapangan', compact('nama', 'desc', 'harga'));
    }
}
