<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'submission_code',
        'submission',
        'class_code',
        'user_code',
        'deadline',
        'resubmit',
    ];
}
