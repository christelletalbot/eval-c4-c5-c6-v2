<?php

namespace App\Http\Controllers;

// 

use App\Models\Movement;
use DB;


class HistoryController extends Controller
{
    
    	public function index()
    	{
    		$movements = DB::table('movements')
    					->join('articles', 'movements.article_id','=','articles.id')
    					
    					->get();
    		return view('history', ['movements'=>$movements]);	
    		

    	}
    
}


    
