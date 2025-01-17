<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    // Menampilkan semua lokasi
    public function index()
    {
        // Mengambil semua data lokasi
        $lokasi = Lokasi::all();

        // Mengirim data lokasi ke view
        return view('lokasi.index', compact('lokasi'));
    }

    // Menampilkan halaman form tambah lokasi
    public function create()
    {
        return view('lokasi.create');
    }

    // Menyimpan data lokasi yang baru
    public function store(Request $request)
{
    $request->validate([
        'nomor_telepon' => 'required',
        'alamat' => 'required',
        'hari_operasional' => 'required',
        'jam_operasional' => 'required',
        'link_maps' => 'required|regex:/^[-+]?[0-9]*\.?[0-9]+,[\s]*[-+]?[0-9]*\.?[0-9]+$/', // Validasi format latitude,longitude
    ]);

    Lokasi::create($request->all());
    return redirect()->route('lokasi.index')->with('success', 'Lokasi berhasil ditambahkan.');
}

    // Menampilkan halaman form edit lokasi
    public function edit(Lokasi $lokasi)
    {
        return view('lokasi.edit', compact('lokasi'));
    }

    // Memperbarui data lokasi yang sudah ada
    public function update(Request $request, Lokasi $lokasi)
    {
        $request->validate([
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'hari_operasional' => 'required',
            'jam_operasional' => 'required',
            'link_maps' => 'required|regex:/^[-+]?[0-9]*\.?[0-9]+,[\s]*[-+]?[0-9]*\.?[0-9]+$/', // Validasi format latitude,longitude
        ]);

        // Pastikan format koordinat benar (latitude,longitude)
        $coordinates = explode(',', $request->link_maps);
        if (count($coordinates) != 2 || !is_numeric($coordinates[0]) || !is_numeric($coordinates[1])) {
            return redirect()->back()->withErrors(['link_maps' => 'Koordinat tidak valid'])->withInput();
        }

        // Memperbarui data lokasi
        $lokasi->update($request->all());

        return redirect()->route('lokasi.index')->with('success', 'Lokasi berhasil diperbarui.');
    }

    // Menghapus data lokasi
    public function destroy(Lokasi $lokasi)
    {
        $lokasi->delete();
        return redirect()->route('lokasi.index')->with('success', 'Lokasi berhasil dihapus.');
    }
}
