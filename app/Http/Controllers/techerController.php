<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Class_Lop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class techerController extends Controller
{
    //
    function index(){
        return "đây là tranh quản lý tài khoản cá nhân của giảng viên";
    }

    function account(){
        $id_User = Auth()->User()->id;
        return view("teacher.page.account");
    }
    function account_(){
        $user_update= User::find(Auth()->User()->id);
        $user_update->name = $_POST['name'];
        $user_update->email = $_POST['email'];
        $user_update->save();
        $alert = 'Cập nhật thông tin thành công!';return redirect()->back()->with('alert',$alert);
        return view("teacher.page.account");
    }
    function myclass(){
        $myClass = Class_Lop::whereTeacher_code(Auth()->User()->id)->get();
        // dd($myClass);
        return view("teacher.page.myclass", ['myClass' => $myClass]);
    }
    function teacher_addclass(){
        $hk = Subject::all();
        // dd($hk);
        return view("teacher.page.teacher_addclass", ['hk'=> $hk]); 
    }
    function teacher_addclass_(){
        $addClass = new Class_Lop();
        $addClass->class_code = $_POST['class_code'];
        $addClass->class_name = $_POST['class_name'];
        $addClass->teacher_code = Auth()->User()->id;
        $addClass->subject_code = $_POST['subject_code'];
        $addClass->save();
        $alert = 'Thêm lớp học thành công!';return redirect()->back()->with('alert',$alert);
        // return view("teacher.page.teacher_addclass"); 
    }
    function classdeatail($id){
        // liệt kê danh sách sinh viên của lớp
        $classDeatail = DB::table('class_students')
        ->join('users', 'users.id', '=', 'class_students.user_code')
        ->join('class', 'class.class_code', '=', 'class_students.class_code')
        ->where('class_students.class_code', '=', $id)
        ->get();
        // dd($classDeatail);
        return view("teacher.page.detail");
    }
    function addclass(){
        return view("teacher.page.addclass");
    }
    function reupload(){
        // liệt lê yêu cầu xin nộp lại
        return view("teacher.page.reupload");
    }
    // đường dẫn vào giao diện sau khi có layout
    // return view("techer.page.index");
}
