<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasi';
    protected $fillable = ['nomor_telepon', 'alamat', 'hari_operasional', 'jam_operasional', 'link_maps'];
}
