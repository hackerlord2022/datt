<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    function index(){
        return "đây là trang quản lý tài khoản cá nhân sinh viên";
    }


    function account(){
        
        return view("student.page.account");
    }
    function myclass(){
        return view("student.page.myclass");
    }
    function reupload(){
        return view("student.page.reupload");
    }
    // đường dẫn vào giao diện sau khi có layout
    // return view("student.page.index");

}
