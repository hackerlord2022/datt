<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User as user;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    function them(){
        return view('admin.page.ql_user.them');
    }
    function them_(){
        $user = new user ;
        $name = $_POST['hoten'];
        if($name > 0 ){
            $user->name = $_POST['hoten'];

        }else{
            $alert = 'Họ tên không được bỏ trống!';
            return redirect()->back()->with('alert',$alert);
        }

        $user->email = $_POST['email'];
        $user->password = Hash::make($_POST['password']);
        $user->role = $_POST['role'];
        $user->save();
        return redirect('admin/user/them')->with('thongbao','Thêm Thành Công');
    }
    function sua($id){
        $user = user::find($id);
        if ($user==null)return redirect('/thongbao');
        return view('admin.page.ql_user.sua',['user'=>$user]);
    }
    function sua_($id){
        $user = user::find($id);
        $user->name = $_POST['hoten'];
        $user->email = $_POST['email'];
        $user->password = Hash::make($_POST['password']);
        $user->role = $_POST['role'];
        $user->save();
        return redirect('admin/user/sua/'.$user->id)->with('thongbao','Sửa Thành Công');
    }
    function ds(){
        $user = \App\Models\User::all();
        return view('admin.page.ql_user.danhsach',['user'=>$user]);
    }
    function xoa($id){
        $user = user::find($id);
        $user->delete();
        return redirect('admin/user/ds')->with('thongbao','Xóa Thành Công');
    }
}
?>
