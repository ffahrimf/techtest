<?php

namespace App\Http\Controllers\showcase\demografi;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class SCJenisKelaminController extends Controller
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

        // Define the list of gender categories
        $jenisKelaminCategories = ['Laki-laki', 'Perempuan'];

        $jenisKelaminData = [];

        foreach ($jenisKelaminCategories as $jenisKelamin) {
            $total = $penduduk->where('jenis_kelamin', $jenisKelamin)->count();

            $jumlahPercent = $total ? ($total / $penduduk->count()) * 100 : 0;

            $jenisKelaminData[] = [
                'jenis_kelamin' => $jenisKelamin,
                'jumlah_n' => $total,
                'jumlah_percent' => number_format($jumlahPercent, 2),
            ];
        }

        // Calculate totals
        $total_jumlah_n = array_sum(array_column($jenisKelaminData, 'jumlah_n'));
        $total_jumlah_percent = $total_jumlah_n ? number_format(($total_jumlah_n / $penduduk->count()) * 100, 2) : 0;

        return view('showcase.demografi.scjeniskelamin', [
            'penduduk' => $penduduk,
            'jenisKelaminData' => $jenisKelaminData,
            'total_jumlah_n' => $total_jumlah_n,
            'total_jumlah_percent' => $total_jumlah_percent,
        ]);
    }
}
