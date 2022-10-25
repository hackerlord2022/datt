<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Class_Lop;
use App\Models\User;
use App\Models\ClassStudent;
use App\Models\Semester;
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
        return view("student.page.listmajors", ["subject" => $subject]);// ngành học
    }
    function class(){
        return view("student.page.listclass");// lớp hoc
    }
    function joinclass(){ // tham gia lớp học
        return view("student.page.joinclass");
    }
    function classdetail(){ // danh sách bài lab
        return view("student.page.detailclass");
    }
    function uploadfile(){
        return view("student.page.upload");
    }
}
