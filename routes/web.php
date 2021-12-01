<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/best', [PostController::class, 'best'])->name('best');
Route::get('/new', [PostController::class, 'new'])->name('new');
Route::get('/hot', [PostController::class, 'hot'])->name('hot');
Route::get('/video', [PostController::class, 'video'])->name('video');
Route::get('/review', [PostController::class, 'review'])->name('review');
Route::get('/jerkoff', [PostController::class, 'jerkoff'])->name('jerkoff');
Route::get('/post/{slug:slug}', [PostController::class, 'show'])->name('show')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


