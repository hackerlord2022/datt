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
Route::get('/joinclass/{id}', [indexDashboardController::class, 'joinclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/joinclass/{id}', [indexDashboardController::class, 'joinclass_'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/uploadfile/{id}', [indexDashboardController::class, 'uploadfile'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/uploadfile/{id}', [indexDashboardController::class, 'uploadfile_'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/search', [indexDashboardController::class, 'searchClass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/student_deletelab/{id}', [indexDashboardController::class, 'student_deletelab'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/laveClass/{id}', [indexDashboardController::class, 'laveClass'])->middleware(['auth', 'verified'])->name('dashboard');

//
// admin
Route::group(['prefix'=>'admin'],function(){
    Route::get('/', [adminController::class, 'admin'])->middleware(['admin', 'verified'])->name('dashboard');
    Route::group(['prefix'=>'bainop'],function(){
        Route::get('ds', [bainopController::class, 'ds'])->middleware(['admin', 'verified'])->name('dashboard');
        // Route::get('/xoa/{id}', [bainopController::class, 'deleteResubmit'])->middleware(['admin', 'verified'])->name('dashboard');
    });
    Route::group(['prefix'=>'hocky'],function(){
        Route::get('ds', [hockyController::class, 'ds'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('them', [hockyController::class, 'them'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::post('them', [hockyController::class, 'them_'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('sua/{id}', [hockyController::class, 'sua'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::post('sua/{id}', [hockyController::class, 'sua_'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('xoa/{id}', [hockyController::class, 'xoa'])->middleware(['admin', 'verified'])->name('dashboard');
    });
    Route::group(['prefix'=>'monhoc'],function(){
        Route::get('ds', [monhocController::class, 'ds'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('them', [monhocController::class, 'them'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::post('them', [monhocController::class, 'them_'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('sua/{id}', [monhocController::class, 'sua'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::post('sua/{id}', [monhocController::class, 'sua_'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('xoa/{id}', [monhocController::class, 'xoa'])->middleware(['admin', 'verified'])->name('dashboard');
    });
    Route::group(['prefix'=>'lophoc'],function(){
        Route::get('ds', [lophocController::class, 'ds'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('them', [lophocController::class, 'them'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::post('them', [lophocController::class, 'them_'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::post('sua/{id}', [lophocController::class, 'sua_'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('sua/{id}', [lophocController::class, 'sua'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('xoa/{id}', [lophocController::class, 'xoa'])->middleware(['admin', 'verified'])->name('dashboard');
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('ds', [userController::class, 'ds'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('them', [userController::class, 'them'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::post('them', [userController::class, 'them_'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('sua/{id}', [userController::class, 'sua'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::post('sua/{id}', [userController::class, 'sua_'])->middleware(['admin', 'verified'])->name('dashboard');
        Route::get('xoa/{id}', [userController::class, 'xoa'])->middleware(['admin', 'verified'])->name('dashboard');
    });
});
//
// giảng viên
Route::get('/teacher', [techerController::class, 'account'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher/delete/{id}', [techerController::class, 'deleteResubmit'])->middleware(['teacher', 'verified'])->name('dashboard');

Route::post('/teacher', [techerController::class, 'account_'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_reupload', [techerController::class, 'reupload'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_reupload_detail/{id}', [techerController::class, 'reuploadclass'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_listReupload/{id}', [techerController::class, 'reuploadclassD'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_listReuploadT/{id}', [techerController::class, 'reuploadclassD_'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_listReuploadF/{id}', [techerController::class, 'reuploadclassF_'])->middleware(['teacher', 'verified'])->name('dashboard');
// Class
Route::get('/teacher_addclass', [techerController::class, 'teacher_addclass'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::post('/teacher_addclass', [techerController::class, 'teacher_addclass_'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_myclass', [techerController::class, 'myclass'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_myclass_list/{id}', [techerController::class, 'list_student'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_editclass/{id}', [techerController::class, 'teacher_editclass'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::post('/teacher_editclass/{id}', [techerController::class, 'teacher_editclass_'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_deleteclass/{id}', [techerController::class, 'teacher_deleteclass'])->middleware(['teacher', 'verified'])->name('dashboard');
// Lab
Route::get('/teacher_listexercise/{id}', [techerController::class, 'teacher_listexercise'])->middleware(['teacher', 'verified'])->name('dashboard');
// Route::get('/teacher_listexercise', [techerController::class, 'teacher_listexercise'])->middleware(['teacher', 'verified'])->name('dashboard');

Route::get('/teacher_addexercise/{id}', [techerController::class, 'teacher_addexercise'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::post('/teacher_addexercise', [techerController::class, 'teacher_addexercise_'])->middleware(['teacher', 'verified'])->name('dashboard');

Route::get('/teacher_editexercise/{id}', [techerController::class, 'teacher_editexercise'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::post('/teacher_editexercise/{id}', [techerController::class, 'teacher_editexercise_'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_deleteexercise/{id}', [techerController::class, 'teacher_deleteexercise'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::get('/teacher_list_exercise/{id}', [techerController::class, 'listdownload'])->middleware(['teacher', 'verified'])->name('dashboard');


//test download
Route::get('/download/{id}', [techerController::class, 'downloadLab'])->middleware(['teacher', 'verified'])->name('dashboard');
Route::post('/downloadall/{id}', [techerController::class, 'downloadLabAll'])->middleware(['teacher', 'verified'])->name('dashboard');
//
// học sinh
Route::get('/account', [studentController::class, 'account'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/account', [studentController::class, 'account_update'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/myclass', [studentController::class, 'myclass'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/reupload', [studentController::class, 'reupload'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/list_reupload', [studentController::class, 'list_reupload'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/myclass_reupload/{id}', [studentController::class, 'myclass_reupload'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/resubmit/{id}', [studentController::class, 'resubmit'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/resubmit/{id}', [studentController::class, 'resubmit_'])->middleware(['auth', 'verified'])->name('dashboard');
//
require __DIR__.'/auth.php';
