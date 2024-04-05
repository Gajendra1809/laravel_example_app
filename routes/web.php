<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Uploadmanager;
use App\Http\Controllers\BlogController;
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
Route::redirect('/','login');

Route::get("/login",[AuthController::class,"index"])->name('login');

// Route::get("/user/{id}",[AuthController::class,"user"]);

// Route::resource("/blog",BlogController::class);

Route::get('/users',[AuthController::class,'listUsers']);

Route::get('/product/insert',[AuthController::class,'insertProducts'])->name('products.insert.get');

Route::post('/product/insert',[AuthController::class,'insertProductsPost'])->name('products.insert.post');

Route::post('/product/update',[AuthController::class,'updateProductsPost'])->name('products.update.post');

Route::get('/product/delete/{slug}',[AuthController::class,'deleteProduct'])->name('products.delete.get');

Route::post('/upload',[Uploadmanager::class,'uploadFile'])->name('file.upload');