<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Investment extends Model
{
    use HasFactory;

    public function activeInvesments(): HasMany
    {
        return $this->hasMany(ActiveInvestment::class, 'plan_id', 'id');
    }
}
