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
        $SubjectName = Subject::where('subject_code', "=" ,$id)->first();
        return view("student.page.listclass", ['class' => $class, 'SubjectName' => $SubjectName]);// lớp hoc
    }
    function joinclass($id){ // tham gia lớp học
        //Thêm gì đó để push main
        $checkUser = ClassStudent::where('user_code', auth()->user()->id)
                                 ->where('class_code', $id)->first();
        if($checkUser == null){
            $class = Classes::where('class_code', $id)->join('users', 'users.id', 'class.teacher_code')->first();
            return view("student.page.joinclass", ['class' => $class]);
        }
        else{
            return redirect('/class_detail/'.$id);
        }
    }
    function joinclass_($id){
        $checkUser = ClassStudent::where('user_code', auth()->user()->id)
                                 ->where('class_code', $id)->first();
        if($checkUser == null){
            $joinclass = new ClassStudent;
            $joinclass->class_code = $id;
            $joinclass->user_code = auth()->user()->id;
            $joinclass->save();
            return redirect('/class_detail/'.$id);
        }
        else{
            return redirect('/joinclass/'.$id);
        }
    }
    function classdetail($id){ // danh sách bài lab
        $checkUser = ClassStudent::where('user_code', auth()->user()->id)
                                 ->where('class_code', $id)->first();
        if($checkUser == null){
            return redirect('/joinclass/'.$id);
        }
        else{
            $lab = Archives::where('class_code', "=" ,$id)->get();
            $className = Classes::where('class_code', "=" ,$id)->first();
            return view("student.page.detailclass", ['lab' => $lab, 'className' => $className]);
        }
    }
    function uploadfile($id){
        // 
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $formatTime = "G:i:s";
        $formatDate = "Y-m-d";
        $dateNow = date($formatDate, time());
        $timeNow = date($formatTime, time());
        // 
        $checkUser = ClassStudent::where('user_code', auth()->user()->id)
                                 ->where('class_code', $id)->get();
        if($checkUser == null){
            return redirect('/joinclass');
        }
        else{
            $labdeatail = Archives::where('archives_code', "=" ,$id)->first();
            $className = Classes::where('class_code', "=" ,$labdeatail->class_code)->first();
            return view("student.page.upload", ['labdeatail' => $labdeatail, 'dateNow' => $dateNow, 'timeNow' => $timeNow, 'className' => $className]);
        }
    }
}
