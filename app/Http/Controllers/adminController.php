<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    function admin(){
        return view('admin.page.home.home');
    }
}