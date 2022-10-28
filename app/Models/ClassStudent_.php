<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassStudent_ extends Model
{
    use HasFactory;
    protected $table ='class_students';
    protected $fillable = [
        'class_code',
        'user_code',
    
        
    ];


}

