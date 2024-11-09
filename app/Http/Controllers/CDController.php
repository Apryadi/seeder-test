<?php

namespace App\Http\Controllers;
use App\Models\CD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CDController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from c_d_s order by judul desc');
        }
        else{
            $datas=DB::select('select * from c_d_s order by judul asc');
        }
        return view('CD', compact('datas'));
    }
}