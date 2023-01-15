<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/welcome', function () {
    return view('welcome');
})->middleware('guest');*/


Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');


Route::get('/users', [UserController::class, 'index'])->withoutMiddleware(['auth'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::put('/posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
});

Route::group(['middleware' => 'auth', 'prefix' => 'posts'], function () {
    Route::post('/comments/{post_id}', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::get('/comments/show/{post_id}', [CommentController::class, 'show'])->name('comments.show');
    Route::delete('/comments/delete/{comment_id}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::get('/comments/{comment_id}', [CommentController::class, 'delete'])->name('comments.delete');
});

/*
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
});*/


require __DIR__ . '/auth.php';
