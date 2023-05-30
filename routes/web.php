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
Route::get('action', [PostController::class, 'indexAction'])->name('action');
Route::post('action/create', [PostController::class, 'create'])->name('action-create');
