<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ClientController;

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

Route::get('/show-all-post',[ClientController::class,'ShowAllPost'])->name('show-all-post');
Route::get('/show-post-by-category/{id}',[ClientController::class,'ShowPostByCategory'])->name('show-post-by-category');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('category',CategoryController::class);
    Route::resource('post',PostController::class);
    Route::resource('photo',PhotoController::class);
});

