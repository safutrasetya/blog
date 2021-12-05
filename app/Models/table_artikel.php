<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_artikel extends Model
{
    use HasFactory;
    protected $table='table_artikel';
    protected $fillable = ['id_artikel','id_author','id_kat','judul','isi_art','gambar_art'];
}
