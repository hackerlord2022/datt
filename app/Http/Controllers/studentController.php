<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Class_Lop;
use App\Models\ClassStudent_;
use App\Models\Resubmit;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class studentController extends Controller
{
    //
    function index(){
        return "đây là trang quản lý tài khoản cá nhân sinh viên";
    }


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
                $data->password =  $_POST['new_password'];
            }else{
                $alert = 'Mật khẩu không trùng khớp!';
                return redirect()->back()->with('alert',$alert);
            }
            $data->save();

    //   Huy bị Khùng
        $alert = 'Cập nhật thông tin thành công!';
        return redirect()->back()->with('alert',$alert);
        return view("student.page.account");
    }
    function myclass(){      
      
        $Class = DB::table('class_students')
        ->join('class', 'class_students.class_code', '=', 'class.class_code')
        ->select('class_students.*', 'class.class_name')
        ->where('user_code', '=', (Auth()->User()->id))
        ->get();
        

        return view("student.page.myclass", ['Class' => $Class]);
    }
    function reupload(){
        return view("student.page.reupload");
    }
    function reupload_(){
        $data = new Resubmit();
            $data->status = $_POST['status'];
            $data->content = $_POST['content'];
            $data->name = $_POST['name'];
            $data->user_code = $_POST['user_code'];
            $data->save();


        $alert = 'Cập nhật thông tin thành công!';
        return redirect()->back()->with('alert',$alert);
    }
    // đường dẫn vào giao diện sau khi có layout
    // return view("student.page.index");

}