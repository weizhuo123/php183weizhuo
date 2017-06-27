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

Route::get('/', function () {
    //return view('welcome');

    return 'hello world';
});
Route::get('/mytest',function(){
	return '你好';
});

Route::get('/form',function(){
	return view('form');
});

Route::post('/test',function(){
	return '你坏';
});

Route::put('/myput',function(){
	return '这是PUT请求';
});

Route::delete('/mydelete',function(){
	return '这是DELETE请求';
});

// Route::get('/php',function(){
// 	return '这是GET php';
// });

// Route::post('/php',function(){
// 	return '这是POST php';
// });

// Route::match(['get','post'],'/php',function(){
// 	return '这是GET+POST请求';
// });

// Route::any('/php',function(){
// 	return '这是所有请求';
// });

// Route::get('/new/{id}',function($id){
// 	return $id;
// });

// Route::get('/new/{id}/{name}',function($id,$name){
// 	return $id."<br>".$name;

// });

// Route::get('/new/{id?}/{name?}',function($id=1,$name="abc"){
// 	return $id."<br>".$name;
	
// });

Route::get('/new/{id?}/{name?}',function($id=1,$name="abc"){
	return $id."<br>".$name;
	
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);