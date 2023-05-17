<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
})->name('welcome');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/register', [UserController::class,'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('product', [ProductController::class,'index'])->name('product');
Route::get('product/create', [ProductController::class,'create'])->name('product.create');
Route::post('product/create', [ProductController::class,'store'])->name('product.action.create');

Route::post('product/{id}/delete', [ProductController::class,'destroy'])->name('product.destroy');
Route::get('product/{id}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::post('product/{id}/edit', [ProductController::class,'update'])->name('product.update');

Route::get('product/{id}', [ProductController::class,'show'])->name('product.show');


