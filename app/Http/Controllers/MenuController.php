<?php

namespace App\Http\Controllers;

use App\Models\Menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'harga_makanan' => 'required|String',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('images', 'public');
        }

        Menu::create($validated);
        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'harga_makanan' => 'required|String',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('images', 'public');
        }

        $menu->update($validated);
        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus.');
    }
}
