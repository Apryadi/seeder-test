<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class skripsi extends Model
{
    protected $fillable = [
        'idSkripsi',
        'judul',
        'namaSiswa',
        'namaPembimbing',
        'tanggalSidangSkripsi',
    ];
}