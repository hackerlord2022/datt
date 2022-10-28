<?php

namespace App\Http\Controllers;

use App\Models\Archives;
use App\Models\Subject;
use App\Models\Class_Lop;
use App\Models\Classes;
use App\Models\User;
use App\Models\ClassStudent;
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
    }
    function teacher_editclass($id){
        $hk = Subject::all();
        $teacher_editclass = Class_Lop::find($id);
        // dd($teacher_editclass);
       return view("teacher.page.teacher_editclass", ['teacher_editclass' => $teacher_editclass, 'hk'=> $hk]); 
    }
    function teacher_editclass_($id){
        $teacher_editclass = Class_Lop::find($id);
        $teacher_editclass->class_code = $_POST['class_code'];
        $teacher_editclass->class_name = $_POST['class_name'];
        $teacher_editclass->subject_code = $_POST['subject_code'];
        $teacher_editclass->teacher_code = Auth()->User()->id;
        $teacher_editclass->save();
        // dd($teacher_editclass);
        $alert='Cập nhật thành công!';return redirect()->back()->with('alert',$alert);
    }
    function teacher_deleteclass($id){
        $teacher_deleteclass = Class_Lop::find($id);
        $teacher_deleteclass->delete();
        $alert = 'Xóa thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('teacher.page.myclass');
    }




    function list_student($id){
        // liệt kê danh sách sinh viên của lớp
        //return view("teacher.page.class_detail", ['classDeatail' => $classDeatail, 'className' => $className]);
        return redirect('/teacher_myclass_list')->with('id', $id);
    }
    function list_student_(){
        // liệt kê danh sách sinh viên của lớp
        if(session('id')){
            $classDeatail = ClassStudent::join('users', 'users.id', '=', 'class_students.user_code')
            ->where('class_students.class_code', '=', session('id'))->get();
            $classCount = ClassStudent::join('users', 'users.id', '=', 'class_students.user_code')
            ->where('class_students.class_code', '=', session('id'))->count();
            $className = ClassStudent::join('class', 'class.class_code', '=', 'class_students.class_code')
            ->where('class_students.class_code', '=', session('id'))->first();
            return view("teacher.page.class_detail", ['classDeatail' => $classDeatail, 'className' => $className, 'classCount' => $classCount]);
        }
        else{
            return redirect('/teacher_myclass');
        }
    }

    function teacher_listexercise(){
        $list = Archives::all();
        return view("teacher.page.list_exercise", ['list' => $list]);
    }
    function teacher_addexercise(){
        $classCode = Classes::all();
        return view("teacher.page.teacher_addexercise", ['classCode' => $classCode]);
    }
    function teacher_addexercise_(){
        $exercise = new Archives();
        $exercise->archives_code = $_POST['archives_code'];
        $exercise->archives_name = $_POST['archives_name'];
        $exercise->deadline = $_POST['deadline'];
        $exercise->deadlinetime = $_POST['deadlinetime'];
        $exercise->class_code = $_POST['class_code'];
        $exercise->note = $_POST['note'];
        $exercise->save();
        $alert = 'Thêm Lab thành công!';return redirect()->back()->with('alert',$alert);
    }
    function teacher_editexercise($id){
        $editexercise = Archives::find($id);
        $classCode = Classes::all();
        return view("teacher.page.teacher_editexercise", ['editexercise' => $editexercise, 'classCode' => $classCode]);
    }
    function teacher_editexercise_($id){
        $editexercise = Archives::find($id);
        $editexercise->archives_code = $_POST['archives_code'];
        $editexercise->archives_name = $_POST['archives_name'];
        $editexercise->deadline = $_POST['deadline'];
        $editexercise->deadlinetime = $_POST['deadlinetime'];
        $editexercise->class_code = $_POST['class_code'];
        $editexercise->note = $_POST['note'];
        $editexercise->save();
        $alert = 'Cập nhật thành công!';return redirect()->back()->with('alert',$alert);
    }
    function teacher_deleteexercise($id){
        $editexercise = Archives::find($id);
        $editexercise->delete();
        $alert = 'Xóa thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('teacher.page.teacher_listexercise');
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
