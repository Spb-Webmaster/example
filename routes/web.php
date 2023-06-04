<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
Route::get('/', function () {
    return view('index');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('phones', [PhoneController::class, 'index'])->name('phones');
Route::get('posts', [PostController::class, 'index'])->name('posts');


Route::get('admin/create-page', [PostController::class, 'createAction'])->name('action-create-page');
Route::get('admin/update-page/{id}', [PostController::class, 'updateAction'])->name('action-update-page');


Route::post('admin/create', [PostController::class, 'create'])->name('action-create');
Route::post('admin/update', [PostController::class, 'update'])->name('action-update');


Route::get('posts/{id}', [PostController::class, 'show'])->name('post-show');
