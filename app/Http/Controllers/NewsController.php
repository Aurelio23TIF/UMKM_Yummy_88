<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function home()
    {
        $news = News::all(); // Ambil semua data slides
        return view('index', compact('news')); // Kirim ke view index.blade.php
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        $path = $request->file('gambar')->store('images', 'public');

        News::create([
            'judul' => $request->judul,
            'gambar' => $path,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        $path = $news->gambar;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
        }

        $news->update([
            'judul' => $request->judul,
            'gambar' => $path,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus.');
    }
}
