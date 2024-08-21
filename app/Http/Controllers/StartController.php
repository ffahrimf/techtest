<?php

namespace App\Http\Controllers;

use App\Models\{Penduduk, Disabilitas};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // Hitung statistik pekerjaan
        // Hitung statistik pekerjaan dengan pengecualian
        $pekerjaanStats = Penduduk::select('pekerjaan', DB::raw('count(*) as jumlah'))
            ->whereNotIn('pekerjaan', ['Mengurus Rumah Tangga', 'Belum/Tidak Bekerja','Pelajar/Mahasiswa']) // Pengecualian pekerjaan
            ->groupBy('pekerjaan')
            ->orderBy('jumlah', 'desc')
            ->get(); // Ambil semua pekerjaan yang tidak dikecualikan dan hitung

        // Dapatkan pekerjaan terbanyak setelah pengecualian
        $mostCommonJob = $pekerjaanStats->first(); // Ambil pekerjaan yang terbanyak
        $mostCommonJobName = $mostCommonJob ? $mostCommonJob->pekerjaan : 'Tidak Diketahui';
        $mostCommonJobCount = $mostCommonJob ? $mostCommonJob->jumlah : 0;
        return view('start2', [
            'penduduk' => $penduduk,
            'disabilitas' => $disabilitas,
            'pekerjaanCount' => $pekerjaanCount,
            'jumlahKeluarga' => $jumlahKeluarga,
            'mostCommonJobName' => $mostCommonJobName, // Tambahkan nama pekerjaan terbanyak
            'mostCommonJobCount' => $mostCommonJobCount, // Tambahkan jumlah pekerjaan terbanyak
        ]);
    }
}
