<?php

namespace App\Http\Controllers;

use App\Models\{Penduduk};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(Request $request)
    {
        $penduduk = Penduduk::all();

        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('start2', [
            'penduduk' => $penduduk
            // 'pegawai' => $pegawai
        ]);
    }
}
