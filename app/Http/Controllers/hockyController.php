<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Semester as hk;
class hockyController extends Controller
{
    function them(){
        return view('admin.page.ql_hk.them');
    }
    function them_(){
        
        $hocky = new hk ;
        $hocky->semester_code = $_POST['mahk'];
        $hocky->semester_name = $_POST['tenhk'];
        $hocky->save();
        return redirect('admin/hocky/them')->with('thongbao','Thêm Thành Công');
    }
    function sua($id){
        $hocky = hk::find($id);
        if ($hocky==null)return redirect('/thongbao');
        return view('admin.page.ql_hk.sua',['hocky'=>$hocky]);
    }
    function sua_($id){
        $hocky = hk::find($id);
        $hocky->semester_code = $_POST['mahk'];
        $hocky->semester_name = $_POST['tenhk'];
        $hocky->save();
        return redirect('admin/hocky/sua/'.$hocky->id)->with('thongbao','Sửa Thành Công');
    }
    function ds(){
        $hocky = \App\Models\Semester::all();
        return view('admin.page.ql_hk.danhsach',['hocky'=>$hocky]);
    }
    function xoa($id){
        $hocky = hk::find($id);
        $hocky->delete();
        return redirect('admin/hocky/ds')->with('thongbao','Xóa Thành Công');

    }
}
?>
