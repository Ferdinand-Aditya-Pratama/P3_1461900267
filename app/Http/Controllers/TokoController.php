<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toko = Toko::join('pelanggan', 'transaksi.id_pelanggan', 'pelanggan.id' )
        ->join('barang', 'transaksi.id_barang', 'barang.id')
        ->select('transaksi.id', 'pelanggan.nama', 'pelanggan.alamat', 'barang.harga')
        ->get();
    
        return view('transaksi0267', ['toko' => $toko]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_transaksi0267');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Toko::create([
            'id' => $request->id,
            'id_pelanggan' => $request->id_pelanggan,
            'id_barang' => $request->id_barang,
        ]);

        return redirect('toko');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $toko = Toko::find($id);
        return view('edit_transaksi0267', ['toko' => $toko]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $toko = Toko::find($id);
        $toko->id = $request->id;
        $toko->id_pelanggan = $request->id_pelanggan;
        $toko->id_barang = $request->id_barang;
        $toko->save();

        return redirect('toko');
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
 
		$toko1 = Toko::join('pelanggan', 'transaksi.id_pelanggan', 'pelanggan.id' )
        ->join('barang', 'transaksi.id_barang', 'barang.id')
        ->select('transaksi.id', 'pelanggan.nama', 'pelanggan.alamat', 'barang.harga')
		->where('nama','like',"%".$cari."%")
		->get();
 
		return view('transaksi0267',['toko1' => $toko1]);
 
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toko = Toko::find($id);
        $toko->delete();

        return redirect('toko');
    }
}
