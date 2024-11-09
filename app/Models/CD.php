<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CD extends Model
{
    protected $fillable = [
        'idKaset',
        'judul',
        'tahunTerbit',
        'sutradara',
    ];
}