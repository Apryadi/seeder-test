<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'isbn',
        'title',
        'penulis',
        'tahunTerbit',
        'penerbit',
    ];
}
