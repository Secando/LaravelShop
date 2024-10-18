<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login',[\App\Http\Controllers\UserController::class,'showLoginForm']);
Route::get('/register',[\App\Http\Controllers\UserController::class,'showRegisterForm']);
Route::get('/', [IndexController::class, 'about']);
Route::get('/vacations', [IndexController::class, 'vacations']);
Route::get('/delivery', [IndexController::class, 'delivery']);
Route::get('/catalog', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/admin',[\App\Http\Controllers\Admin\IndexController::class,'index']);
Route::get('/admin/products/create',[\App\Http\Controllers\Admin\ProductController::class,'create']);
Route::post('/admin/products/create',[\App\Http\Controllers\Admin\ProductController::class,'store']);
Route::get('/admin/products',[\App\Http\Controllers\Admin\ProductController::class,'index']);
Route::delete('/admin/products/{id}',[\App\Http\Controllers\Admin\ProductController::class,'delete']);
Route::get('/admin/products/edit/{id}',[\App\Http\Controllers\Admin\ProductController::class,'edit']);
Route::patch('/admin/products/edit/{id}',[\App\Http\Controllers\Admin\ProductController::class,'update']);
