<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Class_Lop;
use App\Models\ClassStudent_;

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
    function account_update(Request $request, $id){
        $data = User::find(Auth()->User()->id);
         
            $data->name = $_POST['name'];
            $data->email = $_POST['email'];
            $data->passwword = $_POST['new_password'];
            $data->password = (new BcryptHasher)->make($request->get('new_password'));
            $data->save();

      
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
    // đường dẫn vào giao diện sau khi có layout
    // return view("student.page.index");

}