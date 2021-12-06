<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_fav_artikel extends Model
{
    use HasFactory;
    protected $table='table_fav_artikel';

    protected $fillable = ['id_favArt','id_akun','id_artikel','id_kategori'];

}
