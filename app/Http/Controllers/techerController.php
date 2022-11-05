<?php

namespace App\Http\Controllers;

use App\Models\Archives;
use App\Models\Subject;
use App\Models\Class_Lop;
use App\Models\Classes;
use App\Models\User;
use App\Models\ClassStudent;
use App\Models\Resubmit;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;
use File;
use ZipArchive;

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
        //dd($myClass);
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
        $teacher_editclass = Class_Lop::where('class_code', $id)->first();
        // dd($teacher_editclass);
       return view("teacher.page.teacher_editclass", ['teacher_editclass' => $teacher_editclass, 'hk'=> $hk]);
    }
    function teacher_editclass_($id){
        $teacher_editclass = Class_Lop::where('class_code', $id)->first();
        $teacher_editclass->class_code = $_POST['class_code'];
        $teacher_editclass->class_name = $_POST['class_name'];
        $teacher_editclass->subject_code = $_POST['subject_code'];
        $teacher_editclass->teacher_code = Auth()->User()->id;
        $teacher_editclass->save();
        // dd($teacher_editclass);
        $alert='Cập nhật thành công!';return redirect()->back()->with('alert',$alert);
    }
    function teacher_deleteclass($id){
        $teacher_deleteclass = Class_Lop::where('class_code', $id)->first();
        $teacher_deleteclass->delete();
        $alert = 'Xóa thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('teacher.page.myclass');
    }
    function list_student($id){
        // liệt kê danh sách sinh viên của lớp
        $classDeatail = ClassStudent::join('users', 'users.id', '=', 'class_students.user_code')
        ->where('class_students.class_code', '=', $id)->get();
        $classCount = ClassStudent::join('users', 'users.id', '=', 'class_students.user_code')
        ->where('class_students.class_code', '=', $id)->count();
        $className = ClassStudent::join('class', 'class.class_code', '=', 'class_students.class_code')
        ->where('class_students.class_code', '=', $id)->first();
        if($className == null){
            $alert = 'Lớp hiện chưa có sinh viên!';
            return redirect()->back()->with('alert',$alert);
        }
        else{
            return view("teacher.page.class_detail", ['classDeatail' => $classDeatail, 'className' => $className, 'classCount' => $classCount]);
        }
    }
    function teacher_listexercise($id){
        // $list = Archives::all();
        $list = Archives::join('class', 'class.class_code', '=', 'archives.class_code')
        ->where('archives.class_code', '=', $id)->where('class.teacher_code', '=', Auth()->User()->id)->get();
        $class_code_class = $id;
        return view("teacher.page.list_exercise", ['list' => $list, 'class_code_class' => $class_code_class]);
    }
    function teacher_addexercise($id){
        // $classCode = Classes::all();
        $classCode = Classes::where('class_code', $id)
        ->where('teacher_code', '=', Auth()->User()->id)->first();
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
        $editexercise = Archives::where('archives_code', $id)->first();
        $classCode = Classes::where('class_code', $editexercise->class_code)->first();
        return view("teacher.page.teacher_editexercise", ['editexercise' => $editexercise, 'classCode' => $classCode]);
    }
    function teacher_editexercise_($id){
        $editexercise = Archives::where('archives_code', $id)->first();
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
        $editexercise =  Archives::where('archives_code', $id)->first();
        $editexercise->delete();
        $alert = 'Xóa thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('teacher.page.teacher_listexercise');
    }

    function addclass(){
        return view("teacher.page.addclass");
    }
    function reupload(){
        $myClass = Class_Lop::whereTeacher_code(Auth()->User()->id)->get();
        return view("teacher.page.myclassRS", ['myClass' => $myClass]);
    }
    function reuploadclass($id){
        $myArchives = Archives::where("class_code", $id)->get();
        return view("teacher.page.reuploadR", ['myArchives' => $myArchives]);
    }
    function reuploadclassD($id){
        $resubmit = Resubmit::where("archives_code", $id)->join('users', 'users.id','resubmit.user_code')->orderBy('resubmit.created_at', 'ASC')->get();
        return view("teacher.page.reupload", ['resubmit' => $resubmit]);
    }
    function reuploadclassD_($id){
        $resubmit = Resubmit::where('resubmit_code', $id)
                            ->update(['status' => 1]);
        $alert = 'Đã duyệt!';
        return redirect()->back()->with('alert',$alert);
    }
    function listdownload($id){
        $submission = Submission::where('archives_code', $id)
                    ->join('users', 'users.id', 'submission.user_code')->get();
        $archives = Archives::where("archives_code", $id)->first();
        $submissionCount = Submission::where('archives_code', $id)
                    ->join('users', 'users.id', 'submission.user_code')->count();
        return view("teacher.page.list_exercise_dow", ['submission' => $submission, 'archives' => $archives, 'submissionCount' => $submissionCount]);
    }

    function downloadLab($id){
        $fileLab = Submission::where('submission_code' ,$id)->first();
        //dd($fileLab->submission);
        $file = public_path(). "/upload/filelab/".$fileLab->submission;
        $filename = $fileLab->submission;
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, $filename, $headers);
    }


    function downloadLabAll($id){
        dd("dang thử nghiệm");
        $fileLabAll = Submission::where('archives_code', $id)->get();
        // $filename = [];
        foreach($fileLabAll as $item){
            $file = public_path(). "/upload/filelab/".$item->submission;
            $filename = $item->submission;
            // $headers = array(
            //     'Content-Type: application/pdf',
            // );
            $url=$item->submission;
            $pathToFile = public_path('/upload/filelab//'.$url);
            response()->download($pathToFile);
        }
        return Response::download(["file_1.txt","file_2.txt"]);
    }

    // đường dẫn vào giao diện sau khi có layout ||
    // return view("techer.page.index");
}
