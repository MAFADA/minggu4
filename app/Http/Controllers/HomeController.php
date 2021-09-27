<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class HomeController extends Controller
{
    public function getAll(){
        $post = Article::all();
        return view('Home',['post'=>$post]);
    }

    public function getById($id){
        $post = Article::find($id);
        return view('Article',['post'=>$post]);
    }

}
