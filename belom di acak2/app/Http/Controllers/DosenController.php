<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::get();
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new dosen
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nidn' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'jk' => 'required|string',
            'prodi_id' => 'required|integer',
        ]);

        // Create a new dosen instance with the validated data
        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'prodi_id' => $request->prodi_id,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('dosens.index')->with('success', 'dosen created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        // Pass the dosen instance to the view
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        // Pass the dosen instance to the view
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {

        // Update the dosen instance
        $dosen->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('dosens.index')->with('success', 'dosen updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        // Delete the dosen instance
        $dosen->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('dosens.index')->with('success', 'Dosen deleted successfully');
    }
}