<form action="{{ route('toko.store') }}" method="post">
    @csrf
    ID TRANSAKSI: <input type="text" name="id">
    ID PELANGGAN: <input type="text" name="id_pelanggan">
    ID BARANG: <input type="text" name="id_barang">
    <button type="submit">Simpan</button>
</form>