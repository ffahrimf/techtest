<?php

namespace App\Http\Controllers;

use App\Models\{Mobil};
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(Request $request)
    {
        $mobil = Mobil::all();
        // $pegawai = Pegawai::all();

        return view('start', [
            'mobil' => $mobil
            // 'pegawai' => $pegawai
        ]);
    }
}
