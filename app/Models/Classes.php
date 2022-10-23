<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table ='class';
    public function submission(){
        return $this->belongsTo('App\Models\Submission','class_code','id');
    }
    public function subject(){
        return $this->belongsTo('App\Models\Subject','subject_code','id');
    }
}
