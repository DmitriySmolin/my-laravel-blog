<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TagController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'test';
});

//Route::get('/posts', [PostController::class, 'index']);
//Route::get('/posts/create', [PostController::class, 'create']);
//Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
//Route::get('/posts/{post}', [PostController::class, 'show']);
//Route::post('/posts', [PostController::class, 'store']);
//Route::patch('/posts/{post}', [PostController::class, 'update']);
//Route::delete('/posts/{post}', [PostController::class, 'destroy']);

Route::resource('posts', PostController::class);


Route::get('category/store', [CategoryController::class, 'store']);
Route::get('category/index', [CategoryController::class, 'index']);
Route::get('/category/{category}/show', [CategoryController::class, 'show']);
Route::get('/category/{category}/update', [CategoryController::class, 'update']);
Route::get('/category/{category}/destroy', [CategoryController::class, 'destroy']);

Route::get('/comment/store', [CommentController::class, 'store']);
Route::get('/comment/index', [CommentController::class, 'index']);
Route::get('/comment/{comment}/show', [CommentController::class, 'show']);
Route::get('/comment/{comment}/update', [CommentController::class, 'update']);
Route::get('/comment/{comment}/destroy', [CommentController::class, 'destroy']);

Route::get('/profile/store', [ProfileController::class, 'store']);
Route::get('/profile/index', [ProfileController::class, 'index']);
Route::get('/profile/{profile}/show', [ProfileController::class, 'show']);
Route::get('/profile/{profile}/update', [ProfileController::class, 'update']);
Route::get('/profile/{profile}/destroy', [ProfileController::class, 'destroy']);

Route::get('/role/store', [RoleController::class, 'store']);
Route::get('/role/index', [RoleController::class, 'index']);
Route::get('/role/{role}/show', [RoleController::class, 'show']);
Route::get('/role/{role}/update', [RoleController::class, 'update']);
Route::get('/role/{role}/destroy', [RoleController::class, 'destroy']);

Route::get('/tag/store', [TagController::class, 'store']);
Route::get('/tag/index', [TagController::class, 'index']);
Route::get('/tag/{tag}/show', [TagController::class, 'show']);
Route::get('/tag/{tag}/update', [TagController::class, 'update']);
Route::get('/tag/{tag}/destroy', [TagController::class, 'destroy']);
