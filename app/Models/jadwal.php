<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    protected $fillable =['nama', 'jam', 'alamat', 'nomortelp'];
    protected $table = 'jadwal';
    public $timestamps = false;
}
