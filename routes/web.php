<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexDashboardController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\techerController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bainopController;
use App\Http\Controllers\hockyController;
use App\Http\Controllers\monhocController;
use App\Http\Controllers\lophocController;
use App\Http\Controllers\userController;
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
Route::group(['prefix'=>'admin'],function(){
    Route::get('/', [adminController::class, 'admin']);
    Route::group(['prefix'=>'bainop'],function(){
        Route::get('ds', [bainopController::class, 'ds']);
        Route::get('them', [bainopController::class, 'them']);
        Route::get('sua', [bainopController::class, 'sua']);
    });
    Route::group(['prefix'=>'hocky'],function(){
        Route::get('ds', [hockyController::class, 'ds']);
        Route::get('them', [hockyController::class, 'them']);
        Route::get('sua', [hockyController::class, 'sua']);
    });
    Route::group(['prefix'=>'monhoc'],function(){
        Route::get('ds', [monhocController::class, 'ds']);
        Route::get('them', [monhocController::class, 'them']);
        Route::get('sua', [monhocController::class, 'sua']);
    });
    Route::group(['prefix'=>'lophoc'],function(){
        Route::get('ds', [lophocController::class, 'ds']);
        Route::get('them', [lophocController::class, 'them']);
        Route::get('sua', [lophocController::class, 'sua']);
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('ds', [userController::class, 'ds']);
        Route::get('them', [userController::class, 'them']);
        Route::get('sua', [userController::class, 'sua']);
    });
});
//
// giảng viên
Route::get('/teacher', [techerController::class, 'account'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/teacher', [techerController::class, 'account_'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/teacher_account', [techerController::class, 'teacher_account'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_reupload', [techerController::class, 'reupload'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_addclass', [techerController::class, 'teacher_addclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/teacher_addclass', [techerController::class, 'teacher_addclass_'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_myclass', [techerController::class, 'myclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_class_detail', [techerController::class, 'classdeatail'])->middleware(['auth', 'verified'])->name('dashboard');
//
// học sinh
Route::get('/account', [studentController::class, 'account'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/myclass', [studentController::class, 'myclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/reupload', [studentController::class, 'reupload'])->middleware(['auth', 'verified'])->name('dashboard');
//
require __DIR__.'/auth.php';