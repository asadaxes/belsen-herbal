<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Carbon;

class User extends Authenticatable
{    
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'joined_date'
    ];

    public $timestamps = false;
    
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->joined_date = Carbon::now('Asia/Dhaka');
        });
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}