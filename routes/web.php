<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
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

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('archive/article', function () {
    return view('article');
})->name('article');

// Route::get('/tags', function () {
//     return view ('tags');
// });

Route::get('/tag', [DemoController::class, 'tag']);
Route::get('/category', [DemoController::class, 'category']);
Route::get('/blog', [DemoController::class, 'blog']);

Route::get('/admin/category',[CategoryController::class,'admin_category'])->name('admin.category.admin_category');
Route::get('/admin/category.admin_create',[CategoryController::class,'admin_create'])->name('admin.category.admin_create');
Route::post('/admin/category.admin_store',[CategoryController::class,'admin_store'])->name('admin.category.admin_store');


Route::put('/admin/category.{id}',[CategoryController::class,'admin_update'])->name('admin.category.admin_update');
Route::get('/admin/category.{id}',[CategoryController::class,'admin_edit'])->name('admin.category.admin_edit');
