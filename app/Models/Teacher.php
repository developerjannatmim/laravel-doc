<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];

    public function teacherDetail(): HasOne
    {
        return $this->hasOne(TeacherDetail::class, 'teacher_id', 'id');
    }
}
