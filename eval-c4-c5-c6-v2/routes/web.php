<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home', function(){
	return view('home');
});

Route::get('articles', 'ArticleController@index');


Route::get('history', 'HistoryController@index');

Route::get('creation', function(){
	return view('creation');
});
Route::post('creation', 'CreationController@add');	

Route::get('modifications', function(){
	return view('modifications');
});

Route::get('movements', function(){
	return view('movements');
});

Route::get('statistics', 'StatisticController@index');
