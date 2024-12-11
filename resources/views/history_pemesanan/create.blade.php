<form action="/history_pemesanan" method="POST">
    @csrf
    <div>
        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" required>
    </div>

    <div>
        <label for="nama_menu">Nama Menu:</label>
        <input type="text" id="nama_menu" name="nama_menu" required>
    </div>

    <div>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required>
    </div>

    <div>
        <label for="total_harga">Total Harga:</label>
        <input type="number" step="0.01" id="total_harga" name="total_harga" required>
    </div>

    <button type="submit">Simpan</button>
</form>
