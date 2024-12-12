<?php

namespace App\Http\Controllers;

use App\Models\Catatpesanan;
use Illuminate\Http\Request;

class CatatpesananController extends Controller
{

    public function index()
    {
        $catatpesanan = Catatpesanan::all();
        return view('catatpesanan.index', compact('catatpesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catatpesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'nomor_meja' => 'required|string|max:255',
        'makanan' => 'required|string|max:255',
        'harga' => 'required|int',
    ]);

    // Buat instance baru dari model Catatpesanan
    $catatpesanan = new Catatpesanan();
    $catatpesanan->nama = $request->nama;
    $catatpesanan->nomor_meja = $request->nomor_meja;
    $catatpesanan->makanan = $request->makanan;
    $catatpesanan->harga = $request->harga;
    $catatpesanan->save();

    return redirect()->route('catatpesanan.index')->with('success', 'Pesanan telah dicatat');
}

    /**
     * Display the specified resource.
     */
    public function show(Catatpesanan $catatpesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catatpesanan $catatpesanan)
    {
        return view('catatpesanan.edit',compact('catatpesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catatpesanan $catatpesanan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_meja'=> 'required|string|max:255',
            'makanan' => 'required|string|max:255',
            'harga' => 'required|int',
        ]);

        $catatpesanan->nama = $request->nama;
        $catatpesanan->nomor_meja = $request->nomor_meja;
        $catatpesanan->makanan = $request->makanan;
        $catatpesanan->harga = $request->harga;
        $catatpesanan->save();

        return redirect()->route('catatpesanan.index')->with('success','Pesanan telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catatpesanan $catatpesanan)
{
    $catatpesanan->delete();
    return redirect()->route('catatpesanan.index')->with('danger', 'Pesanan berhasil dihapus!');
}
}
