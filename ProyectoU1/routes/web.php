<?php
use Illuminate\Support\Facades\Route;

/* --RUTAS-- */
Route::group(['prefix'=>'inicio','as'=>'inicio.'], function(){
    Route::get('/', function () {
        return view('layouts.main');
    });
});

Route::group(['prefix'=>'usuarios','as'=>'usuarios.'], function(){
    Route::get('/', function () {
        return view('layouts.users');
    });      
});
Route::group(['prefix'=>'shopping','as'=>'shopping.'], function(){
    Route::get('/', function () {
        return view('layouts.shop');
    });      
});
