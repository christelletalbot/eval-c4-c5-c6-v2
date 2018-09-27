<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\Statistic;
use DB;

class StatisticController extends Controller
{
   

    
    	public function index()
    	{
    		$movements = DB::table('movements')
    					->join('articles', 'movements.article_id','=','articles.id')
    					->join('purchases', 'movements.purchase_id', '=','purchase_id')
    					->join('sales', 'movements.sale_id', '=', 'sale_id')
    					->get();
    		return view('statistics', ['movements'=>$movements]);	
    		

    	}
    
    			
    
}

