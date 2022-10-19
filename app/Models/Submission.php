<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $table ='submission';
    public function Class(){
        return $this->hasMany('App\Models\Classes','ClassCode','id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User','UserCode','id');
    }
}
