<?php

use App\Http\Controllers\Admin\HomeController;
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
});
