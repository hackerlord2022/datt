<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Semester extends Model
{
    use HasFactory;

    protected $table ='semester';
     public function academices(){
        return $this->hasMany('App\Models\Academices','semester_code','id');
    }
}
