<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class bainopController extends Controller
{
    function them(){
        return view('admin.page.ql_bainop.them');
    }
    function sua(){
        return view('admin.page.ql_bainop.sua');
    }
    function ds(){
        return view('admin.page.ql_bainop.danhsach');
    }
}
?>
