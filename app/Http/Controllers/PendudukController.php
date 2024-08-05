<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->level == 'Admin') {
            $penduduk = Penduduk::orderBy('nik', 'asc')->get();
        } else {
            $penduduk = Penduduk::where('dusun', $user->level)->orderBy('nik', 'asc')->get();
        }

        return view('demografi.penduduk.penduduk', [
            'penduduk' => $penduduk
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('demografi.penduduk.penduduk-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi data yang dikirim
    $validated = $request->validate([
        'nik' => 'required|digits_between:1,16|unique:t_penduduk',
        'no_kk' => 'required|digits_between:1,16',
        'nama' => 'required|max:50',
        'tempat_lahir' => 'required|max:20',
        'tanggal_lahir' => 'required|date',
        'jenis_kelamin' => 'required|max:20',
        'alamat' => 'required|max:100',
        'rt' => 'required|max:5',
        'rw' => 'required|max:50',
        'dusun' => 'required|max:50',
        'agama' => 'required|max:20',
        'status_perkawinan' => 'required|max:20',
        'pendidikan' => 'required|max:50',
        'pekerjaan' => 'required|max:20',
        'golongan_darah' => 'required|max:20',
        'shdk' => 'required|max:20',
        'ayah' => 'required|max:50',
        'ibu' => 'required|max:50',
        'kepala_keluarga' => 'required|max:50',
    ]);
    
    // Simpan data
    Penduduk::create($validated);

    Alert::success('Success', 'Penduduk has been saved!');
    return redirect('/penduduk');
}





    /**
     * Display the specified resource.
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    public function printPenduduk()
{
    $penduduk = Penduduk::all();
    $data = ['t_penduduk' => $penduduk];

    $pdf = PDF::loadView('demografi.penduduk.penduduk-print', $data)
              ->setPaper('a4', 'landscape');

    return $pdf->stream('view-penduduk.pdf');
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nik)
    {
        $penduduk = Penduduk::findOrFail($nik);

        return view('demografi.penduduk.penduduk-edit', [
            'penduduk' => $penduduk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nik)
{
    $validated = $request->validate([
        'nik' => 'required|digits_between:1,16|unique:t_penduduk,nik,' . $nik . ',nik',
        'no_kk' => 'required|digits_between:1,16',
        'nama' => 'required|max:50',
        'tempat_lahir' => 'required|max:20',
        'tanggal_lahir' => 'required|date',
        'jenis_kelamin' => 'required|max:20',
        'alamat' => 'required|max:100',
        'rt' => 'required|max:5',
        'rw' => 'required|max:50',
        'dusun' => 'required|max:50',
        'agama' => 'required|max:20',
        'status_perkawinan' => 'required|max:20',
        'pendidikan' => 'required|max:50',
        'pekerjaan' => 'required|max:20',
        'golongan_darah' => 'required|max:20',
        'shdk' => 'required|max:20',
        'ayah' => 'required|max:50',
        'ibu' => 'required|max:50',
        'kepala_keluarga' => 'required|max:50',
    ]);

    $penduduk = Penduduk::findOrFail($nik);
    $penduduk->update($validated);

    Alert::info('Success', 'Penduduk has been updated!');
    return redirect('/penduduk');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nik)
    {
        try {
            $deletedpenduduk = Penduduk::findOrFail($nik);

            $deletedpenduduk->delete();

            Alert::error('Success', 'Penduduk has been deleted !');
            return redirect('/penduduk');
        } catch (Exception $ex) {
            Alert::warning('Error', 'Cant deleted, Penduduk already used !');
            return redirect('/penduduk');
        }
    }
}
