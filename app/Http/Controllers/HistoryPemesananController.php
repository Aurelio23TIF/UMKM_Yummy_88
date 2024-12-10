<?php

namespace App\Http\Controllers;

use App\Models\HistoryPemesanan;
use Illuminate\Http\Request;

class HistoryPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historyPemesanan = HistoryPemesanan::all();
        return view('history_pemesanan.index', compact('historyPemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('history_pemesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'nama_menu' => 'required',
            'jumlah' => 'required|integer',
            'total_harga' => 'required|numeric',
        ]);

        HistoryPemesanan::create($request->all());
        return redirect()->route('history_pemesanan.index')->with('success', 'Pesanan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(HistoryPemesanan $historyPemesanan)
    {
        return view('history_pemesanan.show', compact('historyPemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HistoryPemesanan $historyPemesanan)
    {
        return view('history_pemesanan.edit', compact('historyPemesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HistoryPemesanan $historyPemesanan)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'nama_menu' => 'required',
            'jumlah' => 'required|integer',
            'total_harga' => 'required|numeric',
        ]);

        $historyPemesanan->update($request->all());
        return redirect()->route('history_pemesanan.index')->with('success', 'Pesanan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HistoryPemesanan $historyPemesanan)
    {
        $historyPemesanan->delete();
        return redirect()->route('history_pemesanan.index')->with('success', 'Pesanan berhasil dihapus!');
    }
}
