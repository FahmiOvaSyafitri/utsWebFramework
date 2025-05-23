<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resep extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'judul_resep', 'kategori', 'bahan', 'langkah_pembuatan',
        'waktu_memasak', 'penulis', 'tingkat_kesulitan',
    ];
}
?>