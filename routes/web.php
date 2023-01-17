<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AdminController;
use app\Http\Controllers\UserController;
use app\Http\Controllers\AuthController;

Route::get('/','App\Http\Controllers\UserController@index');



//Route Admin
Route::get('/login','App\Http\Controllers\AuthController@login')->name('login')->middleware('guest');
Route::post('/login','App\Http\Controllers\AuthController@auth')->middleware('guest');
Route::get('/logout','App\Http\Controllers\AuthController@logout')->middleware('auth');

Route::get('/dashboard-admin', 'App\Http\Controllers\AdminController@dashboard')->middleware('auth');
Route::get('/profil', 'App\Http\Controllers\AdminController@profile')->middleware('auth');
Route::get('/master-data', 'App\Http\Controllers\AdminController@index')->middleware('auth');
Route::get('/arsip-pendirian', 'App\Http\Controllers\AdminController@arsippendirian')->middleware('auth');
Route::get('/arsip-pad', 'App\Http\Controllers\AdminController@arsippad')->middleware('auth');


//Belum masuk auth
Route::get('/detail-master-data', 'App\Http\Controllers\AdminController@show');