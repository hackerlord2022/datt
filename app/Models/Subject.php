<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table ='subject';
    protected $fillable = [
        'subject_code',
        'subject_name',
        'semester_code',
    ];
    
    public function semester(){
        return $this->belongsTo('App\Models\Semester','semester_code','id');
    }
    public function class(){
        return $this->hasMany('App\Models\Classes','subject_code','id');
    }
}
