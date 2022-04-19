<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;


 
Route::get('/', function () {

    return view('welcome');
}); 

Route::get('/dashboard',[DashboardController::class,'showDashboard']); 

Route::get('/create',[ProductController::class,'create']); 
Route::get('/show/{id}',[ProductController::class,'show']); 
Route::get('/edit/{id}',[ProductController::class,'edit']); 
Route::get('/update/{id}',[ProductController::class,'update']); 
Route::get('/delete/{id}',[ProductController::class,'delete']); 


