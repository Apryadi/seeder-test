<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    protected $fillable = [
        'idKoran',
        'judul',
        'penulis',
        'tahunTerbit',
        'konten',
    ];
}