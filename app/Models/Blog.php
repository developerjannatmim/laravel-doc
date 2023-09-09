<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    public function public(): BelongsTo
    {
        return $this->belongsTo(Publics::class, 'public_id', 'id');
    }

    protected $fillable = [
        'public_id',
        'title',
        'body'
    ];

}
