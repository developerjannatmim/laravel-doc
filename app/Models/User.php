<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'password',
        'age',
        'city'
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'created_at' => 'datetime:d-m-Y',
    ];

    // public function getRouteKey(): mixed
    // {
    //     return $this->slug;
    // }

    public function hasRole()
    {
      return $this->is_admin; // this looks for an is_admin column in your users table
    }

    // public function toSearchableArray()
    // {
    //     return [
    //         'name' => $this->name,
    //         'email' => $this->email
    //     ];
    // }

    //public $timestamps = false;

    //accessor
    public function getNameEmailAttribute()
    {
        return $this->name . '-' . $this->email; // name_email // nameemail
    }

    //mutetor
    // public function getNameAttribute($value)
    // {
    //     return $this->attributes['name']=ucfirst($value);
    // }

    // public function getCityAttribute($value)
    // {
    //     return $this->attributes['city']=ucfirst($value);
    // }

}
