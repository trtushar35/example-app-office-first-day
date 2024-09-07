<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/create/blog', [BlogController::class, 'create'])->name('blog.create');
Route::post('/store/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/edit/blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/update/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::get('/delete/blog/{id}', [BlogController::class, 'delete'])->name('blog.delete');

