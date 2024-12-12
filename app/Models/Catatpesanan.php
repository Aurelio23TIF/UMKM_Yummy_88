<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catatpesanan extends Model
{
    protected $table = 'catatpesanan';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'nomor_meja',
        'makanan',
        'harga',
    ];
}
