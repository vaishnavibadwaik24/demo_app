<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Category
Route::get('/category/create', [CategoryController::class, 'create'])->middleware('auth');
Route::post('/category/store',[CategoryController::class,'store']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/update/{id}',[CategoryController::class,'update']);
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::post('/blog/store',[BlogController::class,'store']);
Route::get('/blog/create', [BlogController::class, 'create'])->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
Route::post('/blog/update/{id}', [BlogController::class, 'update']);
Route::get('/blog/delete/{id}', [BlogController::class, 'destroy']);

require __DIR__.'/auth.php';