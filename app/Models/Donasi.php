<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'tbl_donasi';

    protected $fillable = [
        'name',
        'nominal_uang',
        'alamat',
        'keterangan',
        'created_at'
    ];

     protected $casts = [
     'created_at' => 'datetime',
     ];
}