<?php

namespace App\Http\Controllers\Admin;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdmBeritaController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $beritas = Berita::all();
        return view('Admin.berita.index', compact('beritas'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('Admin.berita.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $berita = new Berita($request->except('image'));

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img', 'public');
            $berita->image = 'storage/img/' . basename($imagePath);
        }

        $berita->save();
        Alert::info('Success', 'Berita created successfully!');
        return redirect('/admin/berita');
    }

    // Display the specified resource.
    public function show(Berita $berita)
    {
        return view('Admin.berita.show', compact('berita'));
    }

    // Show the form for editing the specified resource.
    public function edit(Berita $berita)
    {
        return view('Admin.berita.edit', compact('berita'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $berita->fill($request->except('image'));

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img', 'public');
            $berita->image = 'storage/img/' . basename($imagePath);
        }

        $berita->save();
        Alert::info('Success', 'Berita has been updated!');
        return redirect('/admin/berita');
    }

    // Remove the specified resource from storage.
    public function destroy(Berita $berita)
    {
        if ($berita->image && file_exists(public_path('storage/img/' . $berita->image))) {
            unlink(public_path('storage/img/' . $berita->image));
        }
        $berita->delete();
        Alert::info('Success', 'Berita has been deleted!');
        return redirect('/admin/berita');
    }
}
