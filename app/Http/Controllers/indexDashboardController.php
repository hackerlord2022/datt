<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexDashboardController extends Controller
{
    //
    function index(){   
        return view("student.page.listsemester");//học kì
    }
    function majors(){
        return view("student.page.listmajors");// ngành học
    }
    function class(){
        return view("student.page.listclass");// lớp hoc
    }
    function joinclass(){ // tham gia lớp học
        return view("student.page.joinclass");
    }
    function classdetail(){ // danh sách bài lab
        return view("student.page.detailclass");
    }
    function uploadfile(){
        return view("student.page.upload");
    }
}
