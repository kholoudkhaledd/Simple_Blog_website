<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Models\Post;

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
Route::resource('posts', BlogController::class);
Route::get('/', [BlogController::class, 'index'])->name('home');
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('posts', BlogController::class)->except(['index']);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
