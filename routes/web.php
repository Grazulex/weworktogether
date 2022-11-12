<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\CookieController;
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

Route::get('/', DefaultController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/policy', PolicyController::class)->name('policy');
Route::get('/term', TermController::class)->name('term');
Route::get('/cookie', CookieController::class)->name('cookie');
Route::get('/contact', ContactController::class)->name('contact');
Route::get('/blogs', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'blog'])->name('blog_show');
