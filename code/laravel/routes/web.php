<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])
    ->name('index.posts');

Route::get('/posts/{id}', [PostController::class, 'text'])
    ->name('text.posts')
    ->where('id','[0-9]+');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('create.posts');

Route::get('/posts/store', [PostController::class, 'store'])
    ->name('store.posts');
