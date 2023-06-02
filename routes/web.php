<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CamiisController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KayitController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\SlidersController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home']); //anasayfa kontrolu

Route::get('admin/posts/create', [PostsController::class, 'create'])->middleware('admin'); //slider eklenecek sayfaya yönlendirir.
Route::post('admin/posts', [PostsController::class, 'store']);//slider ekleme

Route::get('route',[PageController::class,'route']); //rota sayfası için yönlendirme


Route::get('register', [RegisterController::class, 'create'])->middleware('guest'); //register sayfasına yönlendirme yapılıyor.
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');//kayıt işlemi için yönlendirme yapılıyor.

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');//login sayfasına yönlendirme yapılıyor.
Route::post('login/post', [SessionsController::class, 'store'])->middleware('guest'); 

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


Route::get('posts/{category}', [PageController::class, 'sub_category']);
Route::get('/post/{slider}', [PageController::class, 'post']);


Route::post('admin/new', [AdminPostController::class, 'store']);
Route::get('admin/posts/new_post', [AdminPostController::class, 'create']);


Route::get('admin/post', [AdminPostController::class, 'index']);
Route::get('admin/post/{slider}/edit', [AdminPostController::class,'edit']);
Route::patch('admin/update/{category}',[AdminPostController::class,'update']);
Route::delete('admin/update/{category}',[AdminPostController::class,'destroy']);
