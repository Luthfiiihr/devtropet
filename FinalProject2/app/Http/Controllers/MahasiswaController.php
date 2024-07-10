<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new mahasiswa
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nim' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'ipk' => 'required|string',
            'prodi_id' => 'required|integer',
            'rombel_id' => 'required|integer',
        ]);

        // Create a new mahasiswa instance with the validated data
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'ipk' => $request->ipk,
            'prodi_id' => $request->prodi_id,
            'rombel_id' => $request->rombel_id,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('mahasiswas.index')->with('success', 'mahasiswa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        // Pass the mahasiswa instance to the view
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        // Pass the mahasiswa instance to the view
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {

        // Update the mahasiswa instance
        $mahasiswa->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('mahasiswas.index')->with('success', 'mahasiswa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        // Delete the mahasiswa instance
        $mahasiswa->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('mahasiswas.index')->with('success', 'mahasiswa deleted successfully');
    }
}
