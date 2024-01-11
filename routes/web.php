<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\Content\PostController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Layout\menuController;
use App\Http\Controllers\Admin\Content\PostController;
use App\Http\Controllers\Admin\Layout\BannerController;
use App\Http\Controllers\Admin\Content\PostCategoryController;

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

Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');


    //menu 
    Route::get('/menu', [menuController::class, 'index'])->name('admin.menu.index');
    Route::get('/menu/create', [menuController::class, 'create'])->name('admin.menu.create');
    Route::post('/menu/store', [menuController::class, 'store'])->name('admin.menu.store');
    Route::delete('/menu/delete/{menu}', [menuController::class, 'destroy'])->name('admin.menu.destroy');
    Route::get('/menu/edit/{menu}', [menuController::class, 'edit'])->name('admin.menu.edit');
    Route::put('/menu/update/{menu}', [menuController::class, 'update'])->name('admin.menu.update');


    //banner 
    Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner.index');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('admin.banner.create');
    Route::post('/banner/store', [BannerController::class, 'store'])->name('admin.banner.store');
    Route::delete('/banner/delete/{banner}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');
    Route::get('/banner/edit/{banner}', [BannerController::class, 'edit'])->name('admin.banner.edit');
    Route::get('/banner/show/{banner}', [BannerController::class, 'show'])->name('admin.banner.show');
    Route::put('/banner/update/{banner}', [BannerController::class, 'update'])->name('admin.banner.update');


    //content

    Route::prefix('/post')->group(function () {

        //postCateory
        Route::get('/category', [PostCategoryController::class, 'index'])->name('admin.content.category.index');
        Route::get('/category/create', [PostCategoryController::class, 'create'])->name('admin.content.category.create');
        Route::post('/category/store', [PostCategoryController::class, 'store'])->name('admin.content.category.store');
        Route::get('/category/show/{category:slug}', [PostCategoryController::class, 'show'])->name('admin.content.category.show');
        Route::delete('/category/delete/{category:slug}', [PostCategoryController::class, 'destroy'])->name('admin.content.category.destroy');
        Route::get('/category/edit/{category:slug}', [PostCategoryController::class, 'edit'])->name('admin.content.category.edit');
        Route::put('/category/update/{category:slug}', [PostCategoryController::class, 'update'])->name('admin.content.category.update');

        //post
        Route::get('/', [PostController::class, 'index'])->name('admin.content.post.index');
        Route::get('/create', [PostController::class, 'create'])->name('admin.content.post.create');
        Route::post('/store', [PostController::class, 'store'])->name('admin.content.post.store');
        Route::get('/show/{post:slug}', [PostController::class, 'show'])->name('admin.content.post.show');
        Route::delete('/delete/{post:slug}', [PostController::class, 'destroy'])->name('admin.content.post.destroy');
        Route::get('/edit/{post:slug}', [PostController::class, 'edit'])->name('admin.content.post.edit');
        Route::put('/update/{post:slug}', [PostController::class, 'update'])->name('admin.content.post.update');
        Route::get('/fetch_categories', [PostController::class, 'fetch_categories'])->name('admin.content.post.fetch_categories');
    });
});
