<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class techerController extends Controller
{
    //
    function index(){
        return "đây là tranh quản lý tài khoản cá nhân của giảng viên";
    }

    function account(){
        return view("teacher.page.account");
    }
    function myclass(){
        return view("teacher.page.myclass");
    }
    function classdeatail(){
        return view("teacher.page.detail");
    }
    function addclass(){
        return view("teacher.page.addclass");
    }
    function reupload(){
        return view("teacher.page.reupload");
    }
    // đường dẫn vào giao diện sau khi có layout
    // return view("techer.page.index");
}
