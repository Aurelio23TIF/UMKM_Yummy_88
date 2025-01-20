<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    /**
     * Display a listing of the comments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komentars = Komentar::all();
        return response()->json($komentars);
    }

    public function home()
    {
        $komentars = Komentar::all(); // Ambil semua data slides
        return view('index', compact('komentars')); // Kirim ke view index.blade.php
    }

    public function create()
{
    return view('komentar.create'); // Pastikan view ini ada
}

    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'deskripsi' => 'required|string',
        ]);

        $komentar = Komentar::create($validated);

        return response()->json([
            'message' => 'Komentar berhasil ditambahkan!',
            'data' => $komentar,
        ], 201);
    }

    /**
     * Display the specified comment.
     *
     * @param  \App\Models\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function show(Komentar $komentar)
    {
        return response()->json($komentar);
    }

    /**
     * Update the specified comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komentar $komentar)
    {
        $validated = $request->validate([
            'username' => 'sometimes|required|string|max:255',
            'rating' => 'sometimes|required|integer|min:1|max:5',
            'deskripsi' => 'sometimes|required|string',
        ]);

        $komentar->update($validated);

        return response()->json([
            'message' => 'Komentar berhasil diperbarui!',
            'data' => $komentar,
        ]);
    }

    /**
     * Remove the specified comment from storage.
     *
     * @param  \App\Models\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komentar $komentar)
    {
        $komentar->delete();

        return response()->json([
            'message' => 'Komentar berhasil dihapus!',
        ]);
    }
}
