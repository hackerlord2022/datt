<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_Lop extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $fillable = [
        'class_code',
        'class_name',
        'subject_code',
        'teacher_code',
        
    ];
}
