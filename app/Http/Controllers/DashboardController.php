<?php

namespace App\Http\Controllers;

use App\Models\{Barang,Pegawai};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $barang = Barang::count();
        $pegawai = Pegawai::count();

        return view('dashboard.dashboard', [
            'barang' => $barang,
            'pegawai' => $pegawai,
        ]);
    }
}
