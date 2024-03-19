<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/adicionar-produto', [ProductController::class, 'index'])->name('create.product');
Route::post('/adicionar-produto', [ProductController::class, 'store'])->name('store.product');

Route::post('/produtos/{id}', [ProductController::class, 'delete'])->name('delete.product');

Route::get('/editar-produto/{id}', [ProductController::class, 'edit'])->name('edit.product');

