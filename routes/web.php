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
Route::get('/list_majors/{id}', [indexDashboardController::class, 'majors'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/list_class/{id}', [indexDashboardController::class, 'class'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/class_detail/{id}', [indexDashboardController::class, 'classdetail'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/class_join', [indexDashboardController::class, 'joinclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/uploadfile/{id}', [indexDashboardController::class, 'uploadfile'])->middleware(['auth', 'verified'])->name('dashboard');
//
// admin
Route::group(['prefix'=>'admin'],function(){
    Route::get('/', [adminController::class, 'admin']);
    Route::group(['prefix'=>'bainop'],function(){
        Route::get('ds', [bainopController::class, 'ds']);
    });
    Route::group(['prefix'=>'hocky'],function(){
        Route::get('ds', [hockyController::class, 'ds']);
        Route::get('them', [hockyController::class, 'them']);
        Route::post('them', [hockyController::class, 'them_']);
        Route::get('sua/{id}', [hockyController::class, 'sua']);
        Route::post('sua/{id}', [hockyController::class, 'sua_']);
        Route::get('xoa/{id}', [hockyController::class, 'xoa']);
    });
    Route::group(['prefix'=>'monhoc'],function(){
        Route::get('ds', [monhocController::class, 'ds']);
        Route::get('them', [monhocController::class, 'them']);
        Route::post('them', [monhocController::class, 'them_']);
        Route::get('sua/{id}', [monhocController::class, 'sua']);
        Route::post('sua/{id}', [monhocController::class, 'sua_']);
        Route::get('xoa/{id}', [monhocController::class, 'xoa']);
    });
    Route::group(['prefix'=>'lophoc'],function(){
        Route::get('ds', [lophocController::class, 'ds']);
        Route::get('them', [lophocController::class, 'them']);
        Route::post('them', [lophocController::class, 'them_']);
        Route::post('sua/{id}', [lophocController::class, 'sua_']);
        Route::get('sua/{id}', [lophocController::class, 'sua']);
        Route::get('xoa/{id}', [lophocController::class, 'xoa']);
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('ds', [userController::class, 'ds']);
        Route::get('them', [userController::class, 'them']);
        Route::post('them', [userController::class, 'them_']);
        Route::get('sua/{id}', [userController::class, 'sua']);
        Route::post('sua/{id}', [userController::class, 'sua_']);
        Route::get('xoa/{id}', [userController::class, 'xoa']);
    });
});
//
// giảng viên
Route::get('/teacher', [techerController::class, 'account'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/teacher', [techerController::class, 'account_'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_reupload', [techerController::class, 'reupload'])->middleware(['auth', 'verified'])->name('dashboard');
// Class
Route::get('/teacher_addclass', [techerController::class, 'teacher_addclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/teacher_addclass', [techerController::class, 'teacher_addclass_'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_myclass', [techerController::class, 'myclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_myclass_list/{id}', [techerController::class, 'list_student'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_myclass_list', [techerController::class, 'list_student_'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_editclass/{id}', [techerController::class, 'teacher_editclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/teacher_editclass/{id}', [techerController::class, 'teacher_editclass_'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_deleteclass/{id}', [techerController::class, 'teacher_deleteclass'])->middleware(['auth', 'verified'])->name('dashboard');
// Lab
Route::get('/teacher_listexercise', [techerController::class, 'teacher_listexercise'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_addexercise', [techerController::class, 'teacher_addexercise'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/teacher_addexercise', [techerController::class, 'teacher_addexercise_'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_addexercise', [techerController::class, 'teacher_addexercise'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/teacher_addexercise', [techerController::class, 'teacher_addexercise_'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_editexercise/{id}', [techerController::class, 'teacher_editexercise'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/teacher_editexercise/{id}', [techerController::class, 'teacher_editexercise_'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teacher_deleteexercise/{id}', [techerController::class, 'teacher_deleteexercise'])->middleware(['auth', 'verified'])->name('dashboard');


// học sinh
Route::get('/account', [studentController::class, 'account'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/myclass', [studentController::class, 'myclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/reupload', [studentController::class, 'reupload'])->middleware(['auth', 'verified'])->name('dashboard');
//
require __DIR__.'/auth.php';
