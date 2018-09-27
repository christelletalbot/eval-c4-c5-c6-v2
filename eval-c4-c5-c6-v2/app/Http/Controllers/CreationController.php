<?php

namespace App\Http\Controllers;
use Illuminate\Database\Query;


use Illuminate\Http\Request;

use App\Models\Article;
use DB;

class CreationController extends Controller
{
	

	public function add()

	{
		$name = DB::table('articles')->post('name');
		$quantity = DB::table('articles')->post('quantity');
		$unit = DB::table('articles')->post('unit');
		$category = DB::table('articles')->post('category');
		$sale = DB::table('articles')->post('sales_prices');

		$data = array('name'=>$name,"quantity"=>$quantity,"unit"=>$unit,"category"=>$category,"sales_prices"=>$sale);

		$creations= DB::table('articles')->post($data);

		return view('creation', ['articles'=>$creations]);
	}

    // public function index()
    // {
    // 	$creations = DB::table('articles')->get();

    // 	return view('creation', ['articles'=>$creations]);
    // }
}







    
