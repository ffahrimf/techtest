<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sejarah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdmSejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::all();
        return view('Admin.sejarah.index', compact('sejarah'));
    }

    // public function create()
    // {
    //     return view('Admin.sejarah.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'content' => 'required',
    //     ]);

    //     Sejarah::create($request->all());
    //     return redirect()->route('Admin.sejarah.index')
    //                      ->with('success', 'Sejarah berhasil ditambahkan.');
    // }

    public function show(Sejarah $sejarah)
    {
        return view('Admin.sejarah.show', compact('sejarah'));
    }

    public function edit(Sejarah $sejarah)
    {
        return view('Admin.sejarah.edit', compact('sejarah'));
    }

    public function update(Request $request, Sejarah $sejarah)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $sejarah->update($request->all());
        Alert::info('Success', 'Sejarah Desa has been updated!');
        return redirect('/admin/sejarah');
    }

    public function destroy(Sejarah $sejarah)
    {
        $sejarah->delete();
        Alert::info('Success', 'Sejarah Desa has been deleted!');
        return redirect('/admin/sejarah');
    }
}
