<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        $komentars = Komentar::with('user')->get();
        return view('komentar.index', compact('komentars'));
    }

    public function home()
    {
        $komentars = Komentar::all(); // Ambil semua data slides
        return view('index', compact('komentars')); // Kirim ke view index.blade.php
    }

    public function create()
    {
        return view('komentar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'deskripsi' => 'required|string|max:255',
        ]);

        Komentar::create([
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('komentar.index')->with('success', 'Komentar berhasil ditambahkan!');
    }

    public function edit(Komentar $komentar)
    {
        return view('komentar.edit', compact('komentar'));
    }

    public function update(Request $request, Komentar $komentar)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'deskripsi' => 'required|string|max:255',
        ]);

        $komentar->update($request->only(['rating', 'deskripsi']));

        return redirect()->route('komentar.index')->with('success', 'Komentar berhasil diperbarui!');
    }
}
