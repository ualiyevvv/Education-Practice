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

Route::get('/', function () {
    return view('index');
    // dd($_SERVER['REQUEST_URI']);
});


Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::post('/register/store', [UserController::class, 'store'])->name('register.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('login');
    Route::post('/login/store', [UserController::class, 'login'])->name('login.store');

});
Route::get('/price', [MainController::class, 'price'])->name('price');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/news', [PostController::class, 'index'])->name('news.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/news/show/{id}', [PostController::class, 'show'])->name('news.show');

Route::group(['middleware' => 'auth'], function(){
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
Route::group(['prefix'=>'admin', 'middleware' => 'admin', 'namespace'=>'Admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::post('/news/store', [PostController::class, 'store'])->name('news.store');
});
