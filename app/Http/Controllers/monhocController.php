<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class monhocController extends Controller
{
    function them(){
        return view('admin.page.ql_mon.them');
    }
    function sua(){
        return view('admin.page.ql_mon.sua');
    }
    function ds(){
        return view('admin.page.ql_mon.danhsach');
    }
}
?>
