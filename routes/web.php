<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GameAssetController;
use App\Http\Controllers\UmumController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\DevMiddleware;
use App\Http\Middleware\PubMiddleware;
use App\Http\Controllers\CommentController;
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
Route::get('/',[UmumController::class,'beranda']);
Route::get('/search', [UmumController::class, 'search']);
Route::get('/detail/{id}',[UmumController::class,'detail']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/keluar',[LoginController::class,'keluar']);
Route::post('/komen/store/{iduser}/{id}', [CommentController::class, 'store']);
Route::get('/daftar',[UserController::class,'daftar']);
Route::post('/daftar',[UserController::class,'store']);

Route::middleware('dev')->group(function(){
    Route::prefix('/games')->group(function(){
        Route::get('/berandadev',[GameController::class,'index']);
        Route::get('/tambah',[GameController::class,'create']);
        Route::post('/store',[GameController::class,'store']);
        Route::get('/delete/{id}',[GameController::class,'edit']);
        Route::get('/edit/{id}',[GameController::class,'edit']);
        Route::post('/update/{id}',[GameController::class,'update']);
        Route::get('/delete/{id}',[GameController::class,'destroy']);
    });
    Route::prefix('/gameasset')->group(function(){
        Route::get('/{id}',[GameAssetController::class,'index']);
        Route::post('/store/{id}',[GameAssetController::class,'store']);
        Route::post('/delete/{id}',[GameAssetController::class,'destroy']);
    });
});
Route::middleware('pub')->group(function(){
    Route::prefix('/pub')->group(function(){
        Route::get('/berandapub',[PubController::class,'publish']);
        Route::get('/detail/{id}',[PubController::class,'detail']);;
        Route::get('/verify/{id}',[PubController::class,'verify']);;
    });
});