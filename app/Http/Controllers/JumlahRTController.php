<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class JumlahRTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        return view('demografi.jumlahrt.jumlahrt');
    }

    public function show(Penduduk $penduduk)
    {
        //
    }

    public function printJumlahRT()
{
    $penduduk = Penduduk::all();
    $data = ['t_penduduk' => $penduduk];

    $pdf = PDF::loadView('demografi.jumlahrt.jumlahrt-print', $data)
              ->setPaper('a4', 'landscape');

    return $pdf->stream('view-jumlahrt.pdf');
}


}
