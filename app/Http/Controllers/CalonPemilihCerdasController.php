<?php

namespace App\Http\Controllers;

use App\Models\CalonPemilihCerdas;
use Illuminate\Http\Request;

class CalonPemilihCerdasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calonPemilihCerdas = CalonPemilihCerdas::all();

        return view('calon_pemilih_cerdas.index', compact('calonPemilihCerdas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('calon_pemilih_cerdas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:pemilih_cerdas',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $calonPemilihCerdas = new CalonPemilihCerdas([
            'nama' => $request->get('nama'),
            'umur' => $request->get('umur'),
            'alamat' => $request->get('alamat'),
            'email' => $request->get('email'),
            'visi' => $request->get('visi'),
            'misi' => $request->get('misi'),
        ]);

        $calonPemilihCerdas->save();

        return redirect('/calon_pemilih_cerdas')->with('success', 'Calon pemilih cerdas berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $calon_pemilih_cerdas = CalonPemilihCerdas::find($id);
        return view('calon_pemilih_cerdas.show', ['calon_pemilih_cerdas' => $calon_pemilih_cerdas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $calon_pemilih_cerdas = CalonPemilihCerdas::findOrFail($id);
        return view('calon_pemilih_cerdas.edit', compact('calon_pemilih_cerdas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
