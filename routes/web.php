<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/modal',[HomeController::class,'modal'])->name('modal');
// Route::get('/detail',[HomeController::class,'detail'])->name('home');
Route::get('/detail/{id}',[HomeController::class,'show'])->name('detail');
Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class,'index']);
    Route::get('/banner-manager',[AdminController::class,'editbanner'])->name('banner');
    Route::get('/add-product',[AdminController::class,'addproduct'])->name('addproduct');
    Route::post('/add-product',[AdminController::class,'store'])->name('addproduct');
    Route::get('/product-manager',[AdminController::class,'create'])->name('manager');
    Route::get('/product-manager/edit/{id}',[AdminController::class,'edit'])->name('edit');
    Route::post('/product-manager/edit/{id}',[AdminController::class,'update'])->name('update');
    Route::get('/product-manager/delete/{id}',[AdminController::class,'delete'])->name('delete');
});


require __DIR__.'/auth.php';
