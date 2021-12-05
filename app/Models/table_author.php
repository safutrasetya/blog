<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_author extends Model
{
    use HasFactory;
    protected $table='table_author';
    protected $fillable = ['id_author','id_akun_author','nama_author','instagram','twitter'];
}
