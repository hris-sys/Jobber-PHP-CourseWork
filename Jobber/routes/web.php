<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/index.html', [IndexController::class, 'index']);
Route::get('/job.html', [JobController::class, 'index']);
Route::get('/search', [JobController::class, 'search']);
Route::get('/about.html', [AboutController::class, 'index']); 
Route::get('/searchById', [JobController::class, 'searchById']);
Route::get('categories.html', [CategoriesController::class, 'index']); 