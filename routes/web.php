<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/demo', function(){
//     echo "Hi! WElcome to laravel";
// });

// Route::get('/demo1/{s}/{id?}', function ($s, $id = null){
//     echo $s;
//     echo $id;
// });

Route::get('/{name?}',function($name = null){
    $data= '<h1>Created By</h1>';
    $bim = compact('name','data');
    return view('me')->with($bim);
    // echo $nam;
});