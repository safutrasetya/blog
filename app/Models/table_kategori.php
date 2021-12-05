<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_kategori extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='table_kategori';
    protected $fillable = ['id_kat','gambar','nama_kat','deskripsi_kat'];
}
