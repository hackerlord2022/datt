<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subject as mh;
use App\Models\Classes as lh;
use App\Models\User as user;
class lophocController extends Controller
{
    function them(){
        $monhoc =mh::all();
        $user =user::all();
        return view('admin.page.ql_lop.them',['monhoc'=>$monhoc,'user'=>$user]);
    }
    function them_(){
        $lophoc = new lh ;
        $lophoc->class_code = $_POST['malh'];
        $lophoc->class_name = $_POST['tenlh'];
        $lophoc->subject_code = $_POST['monhoc'];
        $lophoc->teacher_code = $_POST['user'];
        $lophoc->save();
        return redirect('admin/lophoc/them')->with('thongbao','Thêm Thành Công');
    }
    function sua($id){
        $lophoc =lh::find($id);
        $monhoc =mh::all();
        $user =user::all();
        if ($lophoc==null)return redirect('/thongbao');
        return view('admin.page.ql_lop.sua',['monhoc'=>$monhoc,'lophoc'=>$lophoc,'user'=>$user]);
    }
    function sua_($id){
        $lophoc =lh::find($id);
        $lophoc->class_code = $_POST['malh'];
        $lophoc->class_name = $_POST['tenlh'];
        $lophoc->subject_code = $_POST['monhoc'];
        $lophoc->teacher_code = $_POST['role'];
        $lophoc->save();
        return redirect('admin/lophoc/sua/'.$lophoc->id)->with('thongbao','Sửa Thành Công');
    }
    function ds(){
        $lophoc =lh::all();
        $user =user::all();
        return view('admin.page.ql_lop.danhsach',['lophoc'=>$lophoc,'user'=>$user]);
    }
    function xoa($id){
        $lophoc = lh::find($id);
        $lophoc->delete();
        return redirect('admin/lophoc/ds')->with('thongbao','Xóa Thành Công ');
    }
}
?>