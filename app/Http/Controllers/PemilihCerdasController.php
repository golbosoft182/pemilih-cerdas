<?php

namespace App\Http\Controllers;

use App\Models\PemilihCerdas;
use Illuminate\Http\Request;

class PemilihCerdasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemilihCerdas = PemilihCerdas::all();

        return view('pemilih_cerdas.index', compact('pemilihCerdas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemilih_cerdas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:pemilih_cerdas',
            'password' => 'required',
        ]);

        $pemilihCerdas = new PemilihCerdas([
            'nama' => $request->get('nama'),
            'umur' => $request->get('umur'),
            'alamat' => $request->get('alamat'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);

        $pemilihCerdas->save();

        return redirect('/pemilih_cerdas')->with('success', 'Pemilih cerdas berhasil dibuat.');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    $pemilih_cerdas = PemilihCerdas::find($id);
    return view('pemilih_cerdas.show', ['pemilih_cerdas' => $pemilih_cerdas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pemilih_cerdas = PemilihCerdas::findOrFail($id);
        return view('pemilih_cerdas.edit', compact('pemilih_cerdas'));
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
