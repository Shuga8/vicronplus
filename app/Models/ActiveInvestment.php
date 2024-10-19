<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActiveInvestment extends Model
{
    use HasFactory;

    public function scopeRunning($query)
    {
        return $query->where("status", 0);
    }

    public function scopeCompleted($query)
    {
        return $query->where("status", 1);
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Investment::class, 'plan_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
