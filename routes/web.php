<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Layout\BannerController;
use App\Http\Controllers\Admin\Layout\menuController;
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
    Route::put('/banner/update/{banner}', [BannerController::class, 'update'])->name('admin.banner.update');
});
