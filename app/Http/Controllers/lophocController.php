<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Semester as hk;
use App\Models\Classes as lh;
use App\Models\User as user;
class lophocController extends Controller
{
    function them(){
        $hocky =hk::all();
        $user =user::all();
        return view('admin.page.ql_lop.them',['hocky'=>$hocky,'user'=>$user]);
    }
    function them_(){
        $lophoc = new lh ;
        $lophoc->class_code = $_POST['malh'];
        $lophoc->class_name = $_POST['tenlh'];
        $lophoc->semester_code = $_POST['hocky'];
        $lophoc->teacher_code = $_POST['user'];
        $lophoc->save();
        return redirect('admin/lophoc/them')->with('thongbao','Thêm Thành Công');
    }
    function sua($id){
        $lophoc =lh::find($id);
        $hocky =hk::all();
        $user =user::all();
        if ($lophoc==null)return redirect('/thongbao');
        return view('admin.page.ql_lop.sua',['hocky'=>$hocky,'lophoc'=>$lophoc,'user'=>$user]);
    }
    function sua_($id){
        $lophoc =lh::find($id);
        $lophoc->class_code = $_POST['malh'];
        $lophoc->class_name = $_POST['tenlh'];
        $lophoc->semester_code = $_POST['hocky'];
        $lophoc->teacher_code = $_POST['user'];
        $lophoc->save();
        return redirect('admin/lophoc/sua/'.$lophoc->id)->with('thongbao','Sửa Thành Công');
    }
    function ds(){
        $class = \App\Models\Classes::all();
        $user =user::all();
        return view('admin.page.ql_lop.danhsach',['class'=>$class,'user'=>$user]);
    }
}
?>
