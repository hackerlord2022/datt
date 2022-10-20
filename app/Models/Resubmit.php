<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resubmit extends Model
{
    use HasFactory;

    protected $table ='resubmit';
    public function resubmit(){
        return $this->belongsTo('App\Models\Resubmit','id');
    }
  
}
