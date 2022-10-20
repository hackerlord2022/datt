<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $table ='submission';
    public function Class(){
        return $this->hasMany('App\Models\Classes','class_code','id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User','user_code','id');
    }
}
