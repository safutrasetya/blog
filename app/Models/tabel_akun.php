<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_akun extends Model
{
    use HasFactory;
    protected $table='table_akun';
    protected $fillable = ['id_akun','nama','email','pass','no_hp','level'];

}
