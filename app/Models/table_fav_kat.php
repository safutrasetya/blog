<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_fav_kat extends Model
{
    use HasFactory;
    protected $table='table_fav_kat';

    protected $fillable = ['id_fav_kat','id_akun','id_kat'];
}
