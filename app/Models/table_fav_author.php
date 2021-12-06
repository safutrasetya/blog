<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_fav_author extends Model
{
    use HasFactory;
    protected $table='table_fav_author';

    protected $fillable = ['id_favAuth','id_akun','id_author'];
}
