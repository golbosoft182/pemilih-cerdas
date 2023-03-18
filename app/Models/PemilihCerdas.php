<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilihCerdas extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'umur', 'alamat', 'email', 'password'];
}
