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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/service/create',[App\Http\Controllers\ServiceController::class, 'create']);
Route::post('/service/store',[App\Http\Controllers\ServiceController::class, 'store']);
Route::get('/services',[App\Http\Controllers\ServiceController::class, 'index']);
Route::get('/servicedetails/{id}',[App\Http\Controllers\ServiceController::class, 'show']);


Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create-category');
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('store-category');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('show-category');
Route::get('/category/show/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('show-category-service');



