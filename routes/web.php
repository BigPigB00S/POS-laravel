<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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
