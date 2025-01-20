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
        $komens = Komentar::all();
        return view('komentar.index', compact('komens'));
    }

    public function home()
    {
        $komens = Komentar::all(); // Ambil semua data slides
        return view('index', compact('komens')); // Kirim ke view index.blade.php
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

        $komens = Komentar::create($validated);

        Komentar::create([
            'username' => $request->username,
            'rating' => $request->rating,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json([
            'message' => 'Komentar berhasil ditambahkan!',
            'data' => $komens,
        ], 201);

        return redirect()->route('home');

    }

    /**
     * Display the specified comment.
     *
     * @param  \App\Models\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function show(Komentar $komens)
    {
        return response()->json($komens);
    }

    /**
     * Update the specified comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komentar $komens)
    {
        $validated = $request->validate([
            'username' => 'sometimes|required|string|max:255',
            'rating' => 'sometimes|required|integer|min:1|max:5',
            'deskripsi' => 'sometimes|required|string',
        ]);

        $komens->update($validated);

        return response()->json([
            'message' => 'Komentar berhasil diperbarui!',
            'data' => $komens,
        ]);
    }

    /**
     * Remove the specified comment from storage.
     *
     * @param  \App\Models\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komentar $komens)
    {
        $komens->delete();

        return response()->json([
            'message' => 'Komentar berhasil dihapus!',
        ]);
    }
}
