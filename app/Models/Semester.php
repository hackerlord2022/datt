<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Semester extends Model
{
    use HasFactory;

    protected $table ='semester';
     public function Subject(){
        return $this->hasMany('App\Models\Subject','semester_code','id');
    }
}
