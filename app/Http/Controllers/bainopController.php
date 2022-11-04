<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class bainopController extends Controller
{
    function ds(){
        $bainop = \App\Models\Resubmit::all();
        $user= \App\Models\User::all();
        return view('admin.page.ql_bainop.danhsach',['bainop'=>$bainop,'user'=>$user]);
    }
}
?>
