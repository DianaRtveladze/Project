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
Route::domain('admin.yourapp.com')->group(function () {
    Route::resource('posts', 'PostController');
    Route::resource('comments', 'CommentController');
});


Route::get('/', function () {
    return view('welcome');
});



Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');



Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{postId}/comments', [PostController::class, 'addComment'])->name('comments.store');
Route::delete('/posts/{postId}/comments/{commentId}', [PostController::class, 'deleteComment'])->name('comments.destroy');
