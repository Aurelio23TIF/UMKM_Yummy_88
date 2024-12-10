@extends('layouts.app')

@section('content')
<h1>Tambah Pemesanan</h1>
<form action="{{ route('history_pemesanan.store') }}" method="POST">
    @csrf
    <label>Nama Pelanggan:</label>
    <input type="text" name="nama_pelanggan" required><br>
    <label>Nama Menu:</label>
    <input type="text" name="nama_menu" required><br>
    <label>Jumlah:</label>
    <input type="number" name="jumlah" required><br>
    <label>Total Harga:</label>
    <input type="number" step="0.01" name="total_harga" required><br>
    <button type="submit">Simpan</button>
</form>
@endsection
