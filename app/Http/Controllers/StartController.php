<?php

namespace App\Http\Controllers;

use App\Models\{Barang,Pegawai};
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(Request $request)
    {
        $barang = Barang::all();
        // $pegawai = Pegawai::all();

        return view('start', [
            'barang' => $barang
            // 'pegawai' => $pegawai
        ]);
    }
}