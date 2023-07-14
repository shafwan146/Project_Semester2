<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'kode',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'email',
        'kartu_id',
    ];

    public function kartu() 
    {
        return $this->hasMany(Pelanggan::class, 'kartu_id');
    }
}
