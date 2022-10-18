<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archives extends Model
{
    use HasFactory;

    protected $fillable = [
        'archives_code',
        'archives_name',
        'deadline',
        'class_code',
    ];
}
