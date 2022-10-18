<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resubmit extends Model
{
    use HasFactory;

    protected $fillable = [
            'resubmit_code',
            'status',
            'content',
            'class_code',
            'user_code', 
        ];
}
