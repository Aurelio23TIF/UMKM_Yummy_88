<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'judul_berita' => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Menyimpan data ke database
        $news = new News();
        $news->judul_berita = $validatedData['judul_berita'];
        $news->isi_berita = $validatedData['isi_berita'];

        // Menyimpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('news', 'public');
            $news->gambar = $gambarPath;
        }

        $news->save();

        return redirect()->route('news.index')->with('successs', 'Berita berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(news $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(news $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, news $news)
    {
       // Validasi input
    $validatedData = $request->validate([
        'judul_berita' => 'required|string|max:255',
        'isi_berita' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
    ]);

    // Update nama_customer dan pesan
    $news->judul_berita = $validatedData['judul_berita'];
    $news->isi_berita = $validatedData['isi_berita'];

    // Jika ada gambar baru, simpan dan update path-nya
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($news->gambar) {
            Storage::delete($news->gambar); // Menghapus gambar lama dari storage
        }

        // Menyimpan gambar baru
        $gambarPath = $request->file('gambar')->store('news', 'public');
        $news->gambar = $gambarPath;
    }

    $news->save();

    return redirect()->route('news.index')->with('successs', 'Berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(news $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus!');
    }
}
