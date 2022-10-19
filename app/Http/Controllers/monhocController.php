<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Academics as mh;
use App\Models\Semester as hk;
class monhocController extends Controller
{
    function them(){
        $hocky =hk::all();
        return view('admin.page.ql_mon.them',['hocky'=>$hocky]);
    }
    function them_(){
        $monhoc = new mh ;
        $monhoc->SemesterCode = $_POST['hocky'];
        $monhoc->AcademicsCode = $_POST['mamh'];
        $monhoc->AcademicsName = $_POST['tenmh'];
        $monhoc->save();
        return redirect('admin/monhoc/them')->with('thongbao','Thêm Thành Công');
    }
    function sua($id){
        $hocky =hk::all();
        $monhoc = mh::find($id);
        return view('admin.page.ql_mon.sua',['monhoc'=>$monhoc,'hocky'=>$hocky])->with('thongbao','Thêm Thành Công');
    }
    function sua_($id){
        $monhoc = mh::find($id);
        $monhoc->SemesterCode = $_POST['hocky'];
        $monhoc->AcademicsCode = $_POST['mamh'];
        $monhoc->AcademicsName = $_POST['tenmh'];
        $monhoc->save();
        return redirect('admin/monhoc/sua/'.$monhoc->id)->with('thongbao','Thêm Thành Công');
    }
    function ds(){
        $monhoc = \App\Models\Academics::all();
        return view('admin.page.ql_mon.danhsach',['monhoc'=>$monhoc]);
    }
}
?>
