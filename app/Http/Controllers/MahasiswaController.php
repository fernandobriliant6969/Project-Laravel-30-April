<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('mahasiswa.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'nama' => 'required',
            'npm' => 'required|unique:mahasiswas,npm',
            'foto' => '',
            'idProdi' => 'required'
        ]);

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $fileExtension = $file->getClientOriginalExtension();

            $newFileName = $input['npm'] . '.' . $fileExtension;
            $file->storeAs('foto', $newFileName, 'public'); 
        } else {
            $newFileName = null;
        };

        $input['foto'] = $newFileName;
        $mahasiswa = Mahasiswa::create($input);


        return redirect()->route('mahasiswa.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idMahasiswa)
    {
        $mahasiswa = Mahasiswa::find($idMahasiswa);
        $prodi = Prodi::all();

        return view('mahasiswa.edit', compact('mahasiswa', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idMahasiswa)
    {
        $mahasiswa = Mahasiswa::where('id', $idMahasiswa);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index');
    }
}
