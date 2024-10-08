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
        'kategori',
        'created_at',
        'tgl_donasi'
        
    ];

     protected $casts = [
     'created_at' => 'datetime',
     ];
}