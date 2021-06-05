<form action="{{ url('toko/' . $toko->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    ID TRANSAKSI: <input type="text" name="id" value="{{ $toko->id }}">
    ID PELANGGAN: <input type="text" name="id_pelanggan" value="{{ $toko->id_pelanggan }}">
    ID BARANG: <input type="text" name="id_barang" value="{{ $toko->id_barang }}">
    <button type="submit">Simpan</button>
</form>