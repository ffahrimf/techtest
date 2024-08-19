<?php

namespace App\Http\Controllers\showcase\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = auth()->user();

        return view('showcase.profile.visi-misi');
    }


}
