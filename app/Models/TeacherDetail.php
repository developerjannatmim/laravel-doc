<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'alternate_phone',
        'city',
        'address'
    ];

    protected $table = 'teacher_details';
}
