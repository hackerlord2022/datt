<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subject as mh;
use App\Models\Semester as hk;
class monhocController extends Controller
{
    function them(){
        $hocky =hk::all();
        return view('admin.page.ql_mon.them',['hocky'=>$hocky]);
    }
    function them_(){
        $monhoc = new mh ;
        $monhoc->semester_code = $_POST['hocky'];
        $monhoc->subject_code = $_POST['mamh'];
        $monhoc->subject_name = $_POST['tenmh'];
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
        $monhoc->semester_code = $_POST['hocky'];
        $monhoc->subject_code = $_POST['mamh'];
        $monhoc->subject_name = $_POST['tenmh'];
        $monhoc->save();
        return redirect('admin/monhoc/sua/'.$monhoc->id)->with('thongbao','Thêm Thành Công');
    }
    function ds(){
        $monhoc = mh::all();
        return view('admin.page.ql_mon.danhsach',['monhoc'=>$monhoc]);
    }
}
?>
