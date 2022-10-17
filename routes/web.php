<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ApartmentController;

    Route::get('/' , function(){
    return redirect()->route('posts.index');
});
    Route::resource('posts', PostController::class);
    Route::resource('apartments', ApartmentController::class);
    Route::get('/posts/bycat/{category}', [PostController::class, 'postByCategory'])->name('postsByCat');
    Route::get('/apartments/bycat/{category}', [ApartmentController::class, 'postByCategory'])->name('postsByCat2');

require __DIR__.'/auth.php';
