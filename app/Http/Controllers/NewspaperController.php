<?php

namespace App\Http\Controllers;
use App\Models\Newspaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewspaperController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from newspapers order by judul desc');
        }
        else{
            $datas=DB::select('select * from newspapers order by judul asc');
        }
        return view('Newspaper', compact('datas'));
    }
}