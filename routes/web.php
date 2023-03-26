<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;

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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('home.index', [
        'page' => 'Home',
    ]);
})->middleware('auth');

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'detail']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user:email}', function (User $user) {
    return view('blog.index', [
        'page' => 'Blog',
        'title' => "Blog by $user->name",
        'blogs' => $user->blogs->load('user', 'category'),
    ]);
});

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog.index', [
        'page' => 'Blog',
        'title' => "Category in $category->name",
        'blogs' => $category->blogs->load('user', 'category'),
        'name' => $category->name,
    ]);
});

Route::resource('/profile/blog', ProfileController::class);
