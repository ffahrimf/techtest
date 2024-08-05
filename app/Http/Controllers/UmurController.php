<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class UmurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        return view('demografi.umur.umur');
    }

    public function show(Penduduk $penduduk)
    {
        //
    }

    public function printUmur()
{
    $penduduk = Penduduk::all();
    $data = ['t_penduduk' => $penduduk];

    $pdf = PDF::loadView('demografi.umur.umur-print', $data)
              ->setPaper('a4', 'landscape');

    return $pdf->stream('view-umur.pdf');
}


}
