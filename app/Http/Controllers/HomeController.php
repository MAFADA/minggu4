<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function getAll(){
        $ar = Article::all();
        return view('Home',['ar'=>$ar]);
        // $ar = DB::table('articles')->get();
        // return view('Home',['ar'=>$ar]);
    }

    public function getById($id){
        $ar = Article::find($id);
        return view('Article',['ar'=>$ar]);
    }

}
