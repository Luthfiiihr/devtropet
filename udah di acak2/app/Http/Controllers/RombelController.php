<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rombongan_belajar = Rombel::get();
        return view('rombongan_belajar.index', compact('rombongan_belajar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new rombel
        return view('rombongan_belajar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'id' => 'required|string',
            'kode' => 'required|string',
            'thn_masuk' => 'required|integer',
            'dosen_pa' => 'required|integer',
        ]);

        // Create a new rombel instance with the validated data
        Rombel::create([
            'id' => $request->id,
            'kode' => $request->kode,
            'thn_masuk' => $request->thn_masuk,
            'dosen_pa' => $request->dosen_pa,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('rombongan_belajars.index')->with('success', 'rombel created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rombel $rombel)
    {
        // Pass the rombel instance to the view
        return view('rombongan_belajar.show', compact('rombel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rombel $rombel)
    {
        // Pass the rombel instance to the view
        return view('rombongan_belajar.edit', compact('rombel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rombel $rombel)
    {

        // Update the rombel instance
        $rombel->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('rombongan_belajars.index')->with('success', 'rombel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rombel $rombel)
    {
        // Delete the Pasien instance
        $rombel->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('rombongan_belajars.index')->with('success', 'Rombel deleted successfully');
    }
}
