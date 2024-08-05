<?php

namespace App\Http\Controllers;

use App\Models\{Penduduk};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // $mobil = Mobil::count();

        $user = auth()->user();

        if ($user->level == 'Admin') {
            $penduduk = Penduduk::count();
        } else {
            $penduduk = Penduduk::where('dusun', $user->level)->count();
        }

        return view('dashboard.dashboard', [
            'penduduk' => $penduduk,
            // 'pegawai' => $pegawai,
        ]);
    }
}
