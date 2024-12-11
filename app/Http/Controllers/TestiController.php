<?php

namespace App\Http\Controllers;

use App\Models\testi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testis = Testi::all();
        return view('testi.index', compact('testis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_customer' => 'required|string|max:255',
            'pesan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Menyimpan data ke database
        $testi = new Testi();
        $testi->nama_customer = $validatedData['nama_customer'];
        $testi->pesan = $validatedData['pesan'];

        // Menyimpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('testimoni', 'public');
            $testi->gambar = $gambarPath;
        }

        $testi->save();

        return redirect()->route('testi.index')->with('successs', 'Testimoni berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(testi $testi)
    {
        return view('testi.show', compact('testi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testi $testi)
    {
        return view('testi.edit', compact('testi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testi $testi)
    {
       // Validasi input
    $validatedData = $request->validate([
        'nama_customer' => 'required|string|max:255',
        'pesan' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
    ]);

    // Update nama_customer dan pesan
    $testi->nama_customer = $validatedData['nama_customer'];
    $testi->pesan = $validatedData['pesan'];

    // Jika ada gambar baru, simpan dan update path-nya
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($testi->gambar) {
            Storage::delete($testi->gambar); // Menghapus gambar lama dari storage
        }

        // Menyimpan gambar baru
        $gambarPath = $request->file('gambar')->store('testimoni', 'public');
        $testi->gambar = $gambarPath;
    }

    $testi->save();

    return redirect()->route('testi.index')->with('successs', 'Testimoni berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testi $testi)
    {
        $testi->delete();
        return redirect()->route('testi.index')->with('success', 'Testimoni berhasil dihapus!');
    }
}
