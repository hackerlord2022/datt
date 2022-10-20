<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table ='subject';
    public function semester(){
        return $this->belongsTo('App\Models\Semester','semester_code','id');
    }
    public function class(){
        return $this->hasMany('App\Models\Classes','subject_code','id');
    }
}
