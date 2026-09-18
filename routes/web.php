<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/posts',[PostController::class,'index']);

route::get('/posts/{post}',[PostController::class,'show']);
Route::post('/posts/{post}/comment', [PostController::class, 'storeComment'])->name('comment.store');