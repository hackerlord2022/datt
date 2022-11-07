<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Resubmit as nl;
use  \App\Models\User as user;
class bainopController extends Controller
{
    function ds(){
        $bainop =nl::all();
        $user =user::all();
        return view('admin.page.ql_bainop.danhsach',['bainop'=>$bainop,'user'=>$user]);
    }
    function deleteResubmit($id){
        $resubmit = nl::find($id);
        $resubmit->delete();
        return redirect('admin/bainop/ds')->with('thongbao','Xóa Thành Công');
    }
}
?>
