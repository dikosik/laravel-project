<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect()->route('posts.index');
});
Route::resource('posts', PostController::class);
//Route::get('/posts',[\App\Http\Controllers\PostController::class,'index'])->name('postAll');
//Route::get('/posts/create', [PostController::class, 'create'])->name('postCreate');
