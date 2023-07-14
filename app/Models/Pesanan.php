<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    public $timestamps = false;
    
    protected $fillable = [
        'id_pelanggan',
        'tanggal',
        'keterangan',
        'total'
    ];

    public function pelanggan() 
    {

        return $this->belongsTo(Pelanggan::class, 'id_pelanggan','id');  
    }
    
}
