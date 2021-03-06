<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Backend\PostController;
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


Route::get('/posts', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [PageController::class, 'posts']);

Route::get('blog/{post}', [PageController::class, 'post'])->name('post');

Route::resource('/posts', PostController::class)
->middleware('auth')
->except('show');
