<?php

use App\Http\Controllers\CategoryController;
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

// Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

// Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

// Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

// Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');

// Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');

// Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');

// Route::delete('/category/{category}/delete', [CategoryController::class, 'destroy'])->name('category.delete');

Route::resource('/category', CategoryController::class);


// put
// patch
