<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingersController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\SingersSongsController;

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
    return view('welcome');
});
Route::get('add-songs',[SongsController::class,'add_songs']);
Route::get('add-singers',[SingersController::class,'add_singer']);
Route::get('show-songs/{id}',[SongsController::class,'show_songs']);
