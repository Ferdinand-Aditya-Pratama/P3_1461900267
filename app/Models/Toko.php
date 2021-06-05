<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'transaksi';

    protected $fillable = [
        'id',
        'id_pelanggan',
        'id_barang',
    ];
}
