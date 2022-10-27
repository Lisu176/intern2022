<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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
// ToDo: Postコントローラをルートに登録する

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/add',[CategoryController::class, 'index'])->name('edit');
// Route::get('/add',[CategoryController::class, 'index'])->name('newcategory');

Route::resource('/post', PostController::class);
Auth::routes();