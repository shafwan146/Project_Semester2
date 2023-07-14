<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    public $timestamps = false;

    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'jenis_produk_id'
    ];

    public function kategoriProduk()
    {
        return $this->belongsTo(KategoriProduk::class, 'jenis_produk_id','id');
    }

}
