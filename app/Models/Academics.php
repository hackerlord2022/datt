<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academics extends Model
{
    use HasFactory;

    protected $table ='academics';
    public function semester(){
        return $this->belongsTo('App\Models\Semester','SemesterCode','id');
    }
    public function class(){
        return $this->hasMany('App\Models\Classes','AcademicsCode','id');
    }
}
