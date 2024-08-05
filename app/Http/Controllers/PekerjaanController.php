<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        return view('demografi.pekerjaan.pekerjaan');
    }

    public function show(Penduduk $penduduk)
    {
        //
    }

    public function printPekerjaan()
{
    $penduduk = Penduduk::all();
    $data = ['t_penduduk' => $penduduk];

    $pdf = PDF::loadView('demografi.pekerjaan.pekerjaan-print', $data)
              ->setPaper('a4', 'landscape');

    return $pdf->stream('view-pekerjaan.pdf');
}


}
