@extends('layouts.app')

@section('content')
<h1>Edit Pemesanan</h1>
<form action="{{ route('history_pemesanan.update', $historyPemesanan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama Pelanggan:</label>
    <input type="text" name="nama_pelanggan" value="{{ $historyPemesanan->nama_pelanggan }}" required><br>
    <label>Nama Menu:</label>
    <input type="text" name="nama_menu" value="{{ $historyPemesanan->nama_menu }}" required><br>
    <label>Jumlah:</label>
    <input type="number" name="jumlah" value="{{ $historyPemesanan->jumlah }}" required><br>
    <label>Total Harga:</label>
    <input type="number" step="0.01" name="total_harga" value="{{ $historyPemesanan->total_harga }}" required><br>
    <button type="submit">Update</button>
</form>
@endsection
