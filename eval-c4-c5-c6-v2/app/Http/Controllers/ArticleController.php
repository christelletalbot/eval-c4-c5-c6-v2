<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Http\Request;
//use App\Http\Controllers\Controller;

use App\Models\Article;
use DB;

class ArticleController extends Controller
{
    public function index()
    {

    	$articles = DB::table('articles')->get();

    	return view('articles', ['articles'=>$articles]);


    }

    
}
