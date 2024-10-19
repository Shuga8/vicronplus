<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Searchable, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'username',
        'email',
        'password',
    ];

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
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeBanned($query)
    {
        return $query->where('status', 0);
    }

    public function deposits(): HasMany
    {
        return $this->hasMany(Deposit::class, 'user_id', 'id');
    }

    public function withdraws(): HasMany
    {
        return $this->hasMany(Withdraw::class, 'user_id', 'id');
    }

    public function logins(): HasMany
    {
        return $this->hasMany(UserLogin::class, 'user_id', 'id');
    }

    public function activeInvestments(): HasMany
    {
        return $this->hasMany(ActiveInvestment::class, 'user_id', 'id');
    }
}
