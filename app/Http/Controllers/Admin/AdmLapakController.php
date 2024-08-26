<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lapakdesa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdmLapakController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $lapakdesas = Lapakdesa::all();
        return view('Admin.lapakdesa.index', compact('lapakdesas'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('Admin.lapakdesa.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'mitra' => 'required|string|max:255',
            'link_wa' => 'nullable|url',
            'link_maps' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $lapakdesa = new Lapakdesa($request->except('image'));

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img', 'public');
            $lapakdesa->image = 'storage/img/' . basename($imagePath);
        }

        $lapakdesa->save();
        Alert::info('Success', 'Lapak Desa created successfully!');
        return redirect('/admin/lapakdesa');
    }

    // Display the specified resource.
    public function show(Lapakdesa $lapakdesa)
    {
        return view('Admin.lapakdesa.show', compact('lapakdesa'));
    }

    // Show the form for editing the specified resource.
    public function edit(Lapakdesa $lapakdesa)
    {
        return view('Admin.lapakdesa.edit', compact('lapakdesa'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Lapakdesa $lapakdesa)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'mitra' => 'required|string|max:255',
            'link_wa' => 'nullable|url',
            'link_maps' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $lapakdesa->fill($request->except('image'));

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img', 'public');
            $lapakdesa->image = 'storage/img/' . basename($imagePath);
        }

        $lapakdesa->save();
        Alert::info('Success', 'Lapak Desa has been updated!');
        return redirect('/admin/lapakdesa');
    }

    // Remove the specified resource from storage.
    public function destroy(Lapakdesa $lapakdesa)
    {
        if ($lapakdesa->image && file_exists(public_path('storage/img/' . $lapakdesa->image))) {
            unlink(public_path('storage/img/' . $lapakdesa->image));
        }
        $lapakdesa->delete();
        Alert::info('Success', 'Lapak Desa has been deleted!');
        return redirect('/admin/lapakdesa');
    }
}
