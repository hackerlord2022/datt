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
        $lophoc->ClassCode = $_POST['malh'];
        $lophoc->ClassName = $_POST['tenlh'];
        $lophoc->SemesterCode = $_POST['hocky'];
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
        $lophoc->ClassCode = $_POST['malh'];
        $lophoc->ClassName = $_POST['tenlh'];
        $lophoc->SemesterCode = $_POST['hocky'];
        $lophoc->save();
        return redirect('admin/lophoc/sua/'.$lophoc->id)->with('thongbao','Sửa Thành Công');
    }
    function ds(){
        $class = \App\Models\Classes::all();
        return view('admin.page.ql_lop.danhsach',['class'=>$class]);
    }
}
?>
