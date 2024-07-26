<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;

    protected $table = 'tbl_pengeluaran';

    protected $fillable = [
        'name',
        'nominal_uang',
        'keterangan',
        'created_at',
    ];

    protected $casts = [
    'created_at' => 'datetime',
    ];
}