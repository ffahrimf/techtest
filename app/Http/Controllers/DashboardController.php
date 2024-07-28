<?php

namespace App\Http\Controllers;

use App\Models\{Mobil,Penduduk};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $mobil = Mobil::count();
        $penduduk = Penduduk::count();
        // $pegawai = Pegawai::count();

        return view('dashboard.dashboard', [
            'mobil' => $mobil,
            'penduduk' => $penduduk,
            // 'pegawai' => $pegawai,
        ]);
    }
}
