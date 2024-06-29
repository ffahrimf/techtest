<?php

namespace App\Http\Controllers;

use App\Models\{Mobil};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $mobil = Mobil::count();
        // $pegawai = Pegawai::count();

        return view('dashboard.dashboard', [
            'mobil' => $mobil,
            // 'pegawai' => $pegawai,
        ]);
    }
}
