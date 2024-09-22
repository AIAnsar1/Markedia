<?php


use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\{AdminMiddleware, RedirectIfAuthenticated};
use App\Http\Controllers\Admin\{AdminCategoryController, MainController, AdminPostController, AdminTagController};
use App\Http\Controllers\{UserController, SearchController, TagController, PostController, CategoryController};


    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::get('/article/{slug}', [PostController::class, 'show'])->name('posts.single');
    Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.single');
    Route::get('/tag/{slug}', [TagController::class, 'show'])->name('tags.single');
    Route::get('/search', [SearchController::class, 'index'])->name('search');


Route::group(['prefix' => 'admin', /* 'middleware' => 'admin' */], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/tags', AdminTagController::class);
    Route::resource('/posts', AdminPostController::class);
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
