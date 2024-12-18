<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;

Route::get('/', function () {
    return view('index');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('posts', [PostController::class, 'index'])
//     ->middleware('auth')
//     ->name('posts.index');

// Route::post('posts', [PostController::class, 'store'])
//     ->middleware('auth')
//     ->name('posts.store');

//上の記述をまとめる
Route::middleware('auth')->prefix('posts')->name('posts.')->group(function () {
    Route::get("/", [PostController::class, 'index'])->name('index');
    Route::post("/", [PostController::class, 'store'])->name('store');
    Route::get("{post}/edit", [PostController::class, 'edit'])->name('edit');
    Route::patch("{post}", [PostController::class, 'update'])->name('update');
    Route::delete("{post}", [PostController::class, 'delete'])->name('delete');
});

Route::post('/posts/{post}/like', [LikeController::class, 'store'])->name('posts.like');
Route::delete('/posts/{post}/like', [LikeController::class, 'destroy'])->name('posts.unlike');


require __DIR__ . '/auth.php';
