<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class JenisKelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        return view('demografi.jeniskelamin.jeniskelamin');
    }

    public function show(Penduduk $penduduk)
    {
        //
    }

    public function printJenisKelamin()
{
    $penduduk = Penduduk::all();
    $data = ['t_penduduk' => $penduduk];

    $pdf = PDF::loadView('demografi.jeniskelamin.jeniskelamin-print', $data)
              ->setPaper('a4', 'landscape');

    return $pdf->stream('view-jeniskelamin.pdf');
}


}
