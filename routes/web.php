<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// PostController Routes
Route::get('/feed', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
Route::post('/posts', [PostController::class, 'store']);
Route::patch('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'delete']);



// Route::get('/', function () {
//     return view('posts.index');
// });
