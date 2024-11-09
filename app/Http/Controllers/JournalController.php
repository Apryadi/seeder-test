<?php

namespace App\Http\Controllers;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JournalController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from journals order by title desc');
        }
        else{
            $datas=DB::select('select * from journals order by title asc');
        }
        return view('Journal', compact('datas'));
    }
}