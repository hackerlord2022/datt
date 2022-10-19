<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassStudent extends Model
{
    use HasFactory;

    protected $table ='classstudents';
    public function classstudents(){
        return $this->belongsTo('App\Models\ClassStudent','id');
    }
    public function binhluan(){
        return $this->hasMany('App\Models\binhluan','idTin','id');
    }
}
