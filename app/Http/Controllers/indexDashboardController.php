<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Classes;
use App\Models\User;
use App\Models\ClassStudent;
use App\Models\Semester;
use App\Models\Archives;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class indexDashboardController extends Controller
{
    //
    function index(){   
        $semester = Semester::all();
        return view("student.page.listsemester",['semester'=>$semester]);
    }
    function majors($id){
        $subject = Subject::where('semester_code', "=" ,$id)->get();
        return view("student.page.listmajors", ['subject' => $subject]);// ngành học
    }
    function class($id){
        $class = Classes::where('subject_code', "=" ,$id)->get();
        return view("student.page.listclass", ['class' => $class]);// lớp hoc
    }
    function joinclass(){ // tham gia lớp học
        //Thêm gì đó để push main
        return view("student.page.joinclass");
    }
    function classdetail($id){ // danh sách bài lab
        $lab = Archives::where('class_code', "=" ,$id)->get();
        $className = Classes::where('class_code', "=" ,$id)->first();
        return view("student.page.detailclass", ['lab' => $lab, 'className' => $className]);
    }
    function uploadfile($id){
        // 
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $formatTime = "G:i:s";
        $formatDate = "Y-m-d";
        $dateNow = date($formatDate, time());
        $timeNow = date($formatTime, time());
        // 
        
        $labdeatail = Archives::where('archives_code', "=" ,$id)->first();
        $className = Classes::where('class_code', "=" ,$labdeatail->class_code)->first();
        return view("student.page.upload", ['labdeatail' => $labdeatail, 'dateNow' => $dateNow, 'timeNow' => $timeNow, 'className' => $className]);
    }
}
