<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::get();
        return view('prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'kode' => 'required|string',
            'nama' => 'required|string',
        ]);

        // Create a new prodi instance with the validated data
        Prodi::create([
            'id' => $request->id,
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('prodis.index')->with('success', 'Prodi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        return view('prodi.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        // Pass the prodi instance to the view
        return view('prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {

        // Update the prodi instance
        $prodi->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('prodis.index')->with('success', 'Prodi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        // Delete the prodi instance
        $prodi->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('prodis.index')->with('success', 'prodi deleted successfully');
    }
}
