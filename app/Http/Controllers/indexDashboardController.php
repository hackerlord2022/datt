<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Classes;
use App\Models\User;
use App\Models\ClassStudent;
use App\Models\Semester;
use App\Models\Archives;
use App\Models\Submission;
use App\Models\Resubmit;
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
        $semester = Semester::where('semester_code', "=" ,$id)->first();
        return view("student.page.listmajors", ['subject' => $subject, 'semester' => $semester]);// ngành học
    }
    function class($id){
        $class = Classes::where('subject_code', "=" ,$id)->join('users', 'users.id', 'teacher_code')->get();
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
            $className = Classes::where('class_code', "=" ,$id)
                                ->join('users', 'users.id', 'teacher_code')->first();
            return view("student.page.detailclass", ['lab' => $lab, 'className' => $className]);
        }
    }
    function uploadfile($id){
        
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $formatTime = "G:i:s Y-m-d";
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
            $labdeatail = Archives::where('archives_code', $id)->first();

            $className = Classes::where('class_code', $labdeatail->class_code)
                                ->join('users', 'users.id', 'teacher_code')->first();
            $labUploaded = Submission::join('archives', 'archives.archives_code', 'submission.archives_code')
                                ->where('submission.archives_code', $labdeatail->archives_code)
                                ->where('submission.user_code',auth()->user()->id )->first();
            $checkResubmit = Resubmit::where('user_code', auth()->user()->id)
                                     ->where('archives_code', $id)->first();
            // dd($labUploaded);
            return view("student.page.upload", ['checkResubmit' => $checkResubmit ,'labdeatail' => $labdeatail,
            'dateNow' => $dateNow, 'timeNow' => $timeNow, 'className' => $className, 'labUploaded' => $labUploaded]);
            
        }
    }

    function student_deletelab($id){
        $student_deletelab = Submission::where('submission_code', $id)->first();
        $student_deletelab->delete();
        // dd($student_deletelab);
        $alert = 'Xóa File nộp thành công!';return redirect()->back()->with('alert',$alert);
        // return redirect('/class_detail');
    }

    function uploadfile_($id, Request $request){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $formatTime = "G:i:s";
        $formatDate = "Y-m-d";
        $dateNow = date($formatDate, time());
        $checkResubmit = Resubmit::where('user_code', auth()->user()->id)
                                     ->where('archives_code', $id)->first();
        if(!isset($_POST['btn'])){
            $submission = new Submission;
            $submission->submission_code = 'SM'.mt_rand(1, 10000);
            //
            $submission->submission = $_FILES['file']['name'];
            $submission->archives_code = $id;
            if($request->hasFile('file')){
                $file = $request->file('file');
                $file_name = $file->getClientOriginalName();
                $file->move(public_path('/upload/filelab'),$file_name);
            
                $file_path = "/upload/imgNews/" . $file_name;
            }
            //
            $submission->user_code = auth()->user()->id;
            $submission->deadline = $dateNow;
            if($checkResubmit){
                $submission->resubmit = 1;
            }
            else{
                $submission->resubmit = 0;
            }
            $submission->save();
            return redirect('/uploadfile/'.$id);
        }
        else{
            return "thiếu file";
        }
    }
    function searchClass(){
        $class = Classes::where('class_code', "like" ,'%'.$_POST['keyword'].'%')
                        ->orWhere('class_name', "like" ,'%'.$_POST['keyword'].'%')
                        ->join('users', 'users.id', 'teacher_code')->get();
        return view('student.page.search',['class' => $class, 'keyword' => $_POST['keyword']]);
    }  
}
