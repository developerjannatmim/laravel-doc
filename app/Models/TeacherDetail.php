<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
