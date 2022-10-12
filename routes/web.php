<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

    Route::get('/' , function(){
    return redirect()->route('posts.index');
});
    Route::resource('posts', PostController::class);
    Route::get('/posts/bycat/{category}', [PostController::class, 'postsByCategory'])->name('postsByCat');

require __DIR__.'/auth.php';
