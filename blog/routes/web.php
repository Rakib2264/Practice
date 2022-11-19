<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistationController;







Route::get('/register',[RegistationController::class,'index']);
Route::post('/register',[RegistationController::class,'register']);




























//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/demo/{name}/{id?}',function ($name,$id=null){
////    return view('demo');
//   $data=compact('name','id');
////   print_r($data);
//    return view('demo')->with($data);
//});
//
//Route::post('/test',function (){
//    echo "Hello World";
//});

//Route::get('/{name?}',function ($name=null){
//
//    $demo="<h2>Rakib khan</h2>>";
//    $data=compact('name','demo');lara
//    return view('home')->with($data);
//
//});

//Route::get('/',function (){
//   return view('home');
//});
//
//Route::get('/about',function (
//
//){
//    return view('about');
//});

