<?php

namespace App\Http\Controllers\showcase\demografi;

use App\Models\Penduduk;
use App\Http\Controllers\Controller;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class SCPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = auth()->user();
        $penduduk = Penduduk::orderBy('nik', 'asc')->get();

        // if ($user->level == 'Admin') {
        // } else {
        //     $penduduk = Penduduk::where('dusun', $user->level)->orderBy('nik', 'asc')->get();
        // }

        // Fetch pekerjaan data
        $pekerjaanList = Pekerjaan::orderBy('nama', 'asc')->get();

        $pekerjaanData = [];

        foreach ($pekerjaanList as $pekerjaan) {
            $total = $penduduk->where('pekerjaan', $pekerjaan->nama)->count();
            $laki_laki = $penduduk->where('pekerjaan', $pekerjaan->nama)->where('jenis_kelamin', 'Laki-laki')->count();
            $perempuan = $penduduk->where('pekerjaan', $pekerjaan->nama)->where('jenis_kelamin', 'Perempuan')->count();

            $jumlahPercent = $total ? ($total / $penduduk->count()) * 100 : 0;
            $lakiLakiPercent = $total ? ($laki_laki / $total) * 100 : 0;
            $perempuanPercent = $total ? ($perempuan / $total) * 100 : 0;

            $pekerjaanData[] = [
                'pekerjaan' => $pekerjaan->nama,
                'jumlah_n' => $total,
                'jumlah_percent' => number_format($jumlahPercent, 2),
                'laki_laki_n' => $laki_laki,
                'laki_laki_percent' => number_format($lakiLakiPercent, 2),
                'perempuan_n' => $perempuan,
                'perempuan_percent' => number_format($perempuanPercent, 2),
            ];
        }

        // Calculate totals
        $total_jumlah_n = array_sum(array_column($pekerjaanData, 'jumlah_n'));
        $total_jumlah_percent = $total_jumlah_n ? number_format(($total_jumlah_n / $penduduk->count()) * 100, 2) : 0;
        $total_laki_laki_n = array_sum(array_column($pekerjaanData, 'laki_laki_n'));
        $total_laki_laki_percent = $total_jumlah_n ? number_format(($total_laki_laki_n / $total_jumlah_n) * 100, 2) : 0;
        $total_perempuan_n = array_sum(array_column($pekerjaanData, 'perempuan_n'));
        $total_perempuan_percent = $total_jumlah_n ? number_format(($total_perempuan_n / $total_jumlah_n) * 100, 2) : 0;

        return view('showcase.demografi.scpekerjaan', [
            'penduduk' => $penduduk,
            'pekerjaanData' => $pekerjaanData,
            'total_jumlah_n' => $total_jumlah_n,
            'total_jumlah_percent' => $total_jumlah_percent,
            'total_laki_laki_n' => $total_laki_laki_n,
            'total_laki_laki_percent' => $total_laki_laki_percent,
            'total_perempuan_n' => $total_perempuan_n,
            'total_perempuan_percent' => $total_perempuan_percent,
        ]);
    }
}
