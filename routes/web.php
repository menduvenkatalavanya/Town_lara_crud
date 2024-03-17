<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'index']);
Route::post('/insert',[HomeController::class,'insert']);
Route::get('/delete/{id}',[HomeController::class,'delete']);
Route::get('/update_view/{id}',[HomeController::class,'update_view']);
Route::post('/update/{id}',[HomeController::class,'update']);