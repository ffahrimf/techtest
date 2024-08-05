<?php

namespace App\Http\Controllers;

use App\Models\{Penduduk};
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(Request $request)
    {
        $penduduk = Penduduk::all();
        // $pegawai = Pegawai::all();

        return view('start', [
            'penduduk' => $penduduk
            // 'pegawai' => $pegawai
        ]);
    }
}
