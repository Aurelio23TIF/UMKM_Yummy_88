<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news'; // Nama tabel di database

    protected $primaryKey = 'id_news';

    public $timestamps = false;

    protected $fillable = [
        'judul_berita',
        'isi_berita',
        'gambar',
    ];
}
