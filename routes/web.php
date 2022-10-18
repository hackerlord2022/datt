<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexDashboardController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\techerController;
use App\Http\Controllers\adminController;
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
    return view('auth.index');
});
// trang chủ
Route::get('/dashboard', [indexDashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/list_majors', [indexDashboardController::class, 'majors'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/list_class', [indexDashboardController::class, 'class'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/class_detail', [indexDashboardController::class, 'classdetail'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/class_join', [indexDashboardController::class, 'joinclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/uploadfile', [indexDashboardController::class, 'uploadfile'])->middleware(['auth', 'verified'])->name('dashboard');
// 
// admin
// Route::get('/admin', [adminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// 
// giảng viên
Route::get('/teacher', [techerController::class, 'account'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_account', [techerController::class, 'account'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_reupload', [techerController::class, 'reupload'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/addclass', [techerController::class, 'addclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_myclass', [techerController::class, 'myclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_class_detail', [techerController::class, 'classdeatail'])->middleware(['auth', 'verified'])->name('dashboard');
//
// học sinh
Route::get('/account', [studentController::class, 'account'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/myclass', [studentController::class, 'myclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/reupload', [studentController::class, 'reupload'])->middleware(['auth', 'verified'])->name('dashboard');
//
require __DIR__.'/auth.php';
