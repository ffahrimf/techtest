<?php

namespace App\Http\Controllers;

use App\Models\{Penduduk,Disabilitas};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(Request $request)
    {
        $penduduk = Penduduk::all();

        // if (Auth::check()) {
        //     return redirect()->route('dashboard');
        // }

        $penduduk = Penduduk::count();
        $disabilitas = Disabilitas::count();
        $pekerjaanCount = Penduduk::distinct('pekerjaan')->count('pekerjaan');
        $jumlahKeluarga = Penduduk::distinct('no_kk')->count('no_kk');

        return view('start2', [
            'penduduk' => $penduduk,
            'disabilitas' => $disabilitas,
            'pekerjaanCount' => $pekerjaanCount,
            'jumlahKeluarga' => $jumlahKeluarga,
        ]);
    }
}
