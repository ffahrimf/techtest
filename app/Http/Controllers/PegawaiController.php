<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::orderBy('nama', 'asc')->get();

        return view('pegawai.pegawai', [
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.pegawai-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:100|unique:pegawai',
            'jabatan' => 'required',
            'alamat' => 'required'
        ]);

        $pegawai = Pegawai::create($request->all());

        Alert::success('Success', 'Pegawai has been saved !');
        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        return view('pegawai.pegawai-edit', [
            'pegawai' => $pegawai,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|max:100|unique:pegawai.nama,' . $id . ',id',
            'jabatan' => 'required',
            'alamat' => 'required'
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($validated);

        Alert::info('Success', 'Pegawai has been updated !');
        return redirect('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    try {
        $deletedpegawai = Pegawai::findOrFail($id);
        $deletedpegawai->delete();

        Alert::error('Success', 'Pegawai telah dihapus!');
        return redirect('/pegawai');
    } catch (Exception $ex) {
        Alert::warning('Error', 'Tidak dapat menghapus, Pegawai sedang digunakan!');
        return redirect('/pegawai');    
    }
}
}
