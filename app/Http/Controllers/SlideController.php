<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all(); // Ambil semua data slide
        return view('slides.index', compact('slides'));
    }

    public function home()
{
    $slides = Slide::all(); // Ambil semua data slides
    return view('index', compact('slides')); // Kirim ke view index.blade.php
}

    public function create()
    {
        return view('slides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        Slide::create([
            'title' => $request->title,
            'image_path' => $imagePath
        ]);

        return redirect()->route('slides.index')->with('success', 'Slide berhasil diunggah!');
    }

    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        unlink(public_path('storage/'.$slide->image_path));
        $slide->delete();

        return redirect()->route('slides.index')->with('success', 'Slide berhasil dihapus!');
    }

    public function edit($id)
    {
    $slide = Slide::findOrFail($id);
    return view('slides.edit', compact('slide'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'title' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:4096',
    ]);

    $slide = Slide::findOrFail($id);
    $data = ['title' => $request->title];

    // Jika ada file gambar baru
    if ($request->hasFile('image')) {
        // Hapus gambar lama
        unlink(public_path('storage/' . $slide->image_path));
        // Upload gambar baru
        $imagePath = $request->file('image')->store('uploads', 'public');
        $data['image_path'] = $imagePath;
    }

    $slide->update($data);

    return redirect()->route('slides.index')->with('success', 'Slide berhasil diperbarui!');
    }

}
