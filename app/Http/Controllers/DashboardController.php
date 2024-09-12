<?php

namespace App\Http\Controllers;

// use App\Models\{Disabilitas, Penduduk};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        return view('dashboard.dashboard');
    }
}