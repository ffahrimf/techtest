<?php

namespace App\Http\Controllers\showcase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class LapakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = auth()->user();

        return view('showcase.lapakdesa');
    }



}
