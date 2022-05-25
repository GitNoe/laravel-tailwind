<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/posts/{slug}', [PostController::class, 'detail'])->name('posts.detail');
Route::post('/comment', [CommentController::class, 'store'])->name('comments.store');

// CONTROLA TODAS LAS FUNCIONES DE POSTS
Route::resource('/admin/posts', PostController::class);

Auth::routes();
