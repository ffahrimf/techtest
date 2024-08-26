<?php

namespace App\Http\Controllers\showcase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Berita};
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $beritas = Berita::all();
        // $user = auth()->user();

        return view('showcase.berita', [
            'beritas'=> $beritas
        ]);
    }



}
