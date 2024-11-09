<?php

namespace App\Http\Controllers;
use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkripsiController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from skripsis order by judul desc');
        }
        else{
            $datas=DB::select('select * from skripsis order by judul asc');
        }
        return view('Skripsi', compact('datas'));
    }
}