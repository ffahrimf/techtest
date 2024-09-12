<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        $users = User::count();
        return view('dashboard.dashboard', [
            'users' => $users, // Pass the family count to the view
        ]);
    }
}