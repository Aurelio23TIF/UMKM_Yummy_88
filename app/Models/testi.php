<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testi extends Model
{
    use HasFactory;

    protected $table = 'testis'; // Nama tabel di database

    protected $fillable = [
        'nama_customer',
        'pesan',
        'gambar',
    ];
}
