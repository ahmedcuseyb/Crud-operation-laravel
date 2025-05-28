<?php

use Illuminate\Support\Facades\Route;
Route::get('/categories',[App\Http\Controllers\CategoryController::class,'index']);
Route::get('categories/create',[App\Http\Controllers\CategoryController::class,'create']);
Route::post('categories/create',[App\Http\Controllers\CategoryController::class,'store']);
Route::get('categories/{id}/edit',[App\Http\Controllers\CategoryController::class,'edit']);
Route::put('categories/{id}/edit',[App\Http\Controllers\CategoryController::class,'update']);
Route::get('categories/{id}/delete',[App\Http\Controllers\CategoryController::class,'destroy']);




Route::get('/', function () {
    return view('form');

});

