<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use APP\Http\Controllers\LikeController;


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


Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class ,'show'])->name('products.show');
Route::get('/product', [ProductController::class, 'index'])->name('products.index');
Route::post('/like/{review}','LikeController@toggleLike')->name('like.toggle');
Route::get('/protected-route','SomeController@index')->middleware('auth');
Route::resource('reviews', 'ReviewController');