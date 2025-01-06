<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'name',
        'judul',
        'deskripsi',
        'link_youtube',
        'foto_iklan',
        'pelanggan',
        'terjual',
        'ulasan',
        'merk',
        'koleksi',
        'layanan',
        'iklan',
        'deskripsi_iklan',
        'about_us',
    ];
}
