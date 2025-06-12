<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sofa extends Model
{
    use HasFactory;

    protected $table = 'sofa';  // nama tabel di database kamu
    protected $fillable = ['merk_sofa', 'harga_sofa', 'tersedia', 'berat']; // sesuaikan dengan kolom tabel kamu
    public $timestamps = false; // kalau tabel kamu tidak pakai created_at dan updated_at
}
