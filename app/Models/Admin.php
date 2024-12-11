<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{

    use Notifiable;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $fillable = [
        'username',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeBanned($query)
    {
        return $query->where('status', 0);
    }
}
