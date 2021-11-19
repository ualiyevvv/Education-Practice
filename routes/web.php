<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\AdminController;

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


Route::get('/', [MainController::class, 'index'])->name('home');


Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::post('/register/store', [UserController::class, 'store'])->name('register.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('login');
    Route::post('/login/store', [UserController::class, 'login'])->name('login.store');

});
Route::get('/pricelist', [MainController::class, 'price'])->name('price');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/news', [PostController::class, 'index'])->name('news.index');
Route::get('/news/{caption}', [PostController::class, 'show'])->name('news.show');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{category}/{caption}', [ShopController::class, 'show'])->name('shop.show');

Route::group(['middleware' => 'auth'], function(){
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
Route::group(['prefix'=>'admin', 'middleware' => 'admin', 'namespace'=>'Admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/news', [AdminController::class, 'news'])->name('admin.news');
    Route::get('/shop', [AdminController::class, 'shop'])->name('admin.shop');
    Route::post('/news/store', [PostController::class, 'store'])->name('admin.news.store');
    Route::post('/news/{id}/update', [PostController::class, 'update'])->name('admin.news.update');
    Route::get('/news/{id}/edit', [PostController::class, 'edit'])->name('admin.news.edit');
    Route::delete('/news/{id}/delete', [PostController::class, 'destroy'])->name('admin.news.delete');
    Route::post('/shop/store', [ShopController::class, 'store'])->name('admin.shop.store');
    Route::post('/shop/{id}/update', [ShopController::class, 'update'])->name('admin.shop.update');
    Route::get('/shop/{id}/edit', [ShopController::class, 'edit'])->name('admin.shop.edit');
    Route::delete('/shop/{id}/delete', [PostController::class, 'destroy'])->name('admin.shop.delete');
});
