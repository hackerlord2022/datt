<?php

namespace App\Http\Controllers;

use App\Models\Archives;
use App\Models\User;
use App\Models\Class_Lop;
use App\Models\ClassStudent_;
use App\Models\Resubmit;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class studentController extends Controller
{
    //
    function index(){
        return "đây là trang quản lý tài khoản cá nhân sinh viên";
    }
    // account
    function account(){
        $User = Auth()->User()->id;
        return view("student.page.account");
    }
    function account_update(){
        $data = User::find(Auth()->User()->id);

            $data->name = $_POST['name'];
            $data->email = $_POST['email'];

            $passwword = $_POST['new_password'];
            $confirm_passwword = $_POST['confirm_new_password'];

            if($passwword == $confirm_passwword){
                $data->password = Hash::make($_POST['new_password']);
            }else{
                $alert = 'Mật khẩu không trùng khớp!';
                return redirect()->back()->with('alert',$alert);
            }
            $data->save();


        $alert = 'Cập nhật thông tin thành công!';
        return redirect()->back()->with('alert',$alert);
        return view("student.page.account");
    }
    // class
    function myclass(){
        $Class = DB::table('class_students')
        ->join('class', 'class_students.class_code', '=', 'class.class_code')
        ->select('class_students.*', 'class.class_name')
        ->where('user_code', '=', (Auth()->User()->id))
        ->get();
         return view("student.page.myclass", ['Class' => $Class]);
    }
    // resubmit
    function reupload(){
        $Class = DB::table('class_students')
        ->join('class', 'class_students.class_code', '=', 'class.class_code')
        ->select('class_students.*', 'class.class_name')
        ->where('user_code', '=', (Auth()->User()->id))
        ->get();
        return view("student.page.myclassR", ['Class' => $Class]);
    }
    function myclass_reupload($id){
        $lab = Archives::where('class_code', "=" ,$id)->get();
        return view("student.page.myclass_reupload", ['lab' => $lab]);
    }
    function resubmit($id){
        $lab = Archives::where('archives_code', "=" ,$id)->first();
        return view("student.page.reupload", ['lab' => $lab]);
    }
    function resubmit_($id){
        $resubmit = new Resubmit();
        $resubmit->resubmit_code = 'RSM'.mt_rand(1, 10000);
        $resubmit->status = "0";
        $resubmit->content = $_POST["content"];
        $resubmit->archives_code = $id;
        $resubmit->user_code = Auth()->User()->id;
        $resubmit->save();
        $alert = 'Yêu cầu xin nộp lại đã thành công!';
        return redirect()->back()->with('alert',$alert);
    }
   
    // đường dẫn vào giao diện sau khi có layout
    // return view("student.page.index");

}
