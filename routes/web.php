<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\landing\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\landing\HomeController::class, 'about']);
Route::get('/blog', [App\Http\Controllers\landing\HomeController::class, 'blog']);
Route::get('/service', [App\Http\Controllers\landing\HomeController::class, 'service']);
Route::get('/contact', [App\Http\Controllers\landing\HomeController::class, 'contact']);
Route::get('/blog/blog-details/{id}', [App\Http\Controllers\landing\HomeController::class, 'blogDetails']);
