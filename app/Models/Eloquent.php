<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Eloquent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'city',
        'marks'
    ];

    // protected $table = 'test';
    // protected $primaryKey = 'stu_id';
    // protected $keyType = 'string';
    // public $incrementing = false;
    // public $timestamps = false;
    // const CREATED_AT = 'created_date';
    // const UPDATED_AT = 'updated_date';

    //     public function boot(): void
    // {
    //     Model::preventSilentlyDiscardingAttributes($this->app->isLocal());
    // }


}
