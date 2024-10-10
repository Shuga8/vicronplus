<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deposit extends Model
{
    use HasFactory, Searchable;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopePending($query)
    {
        return $query->where("status", "pending");
    }

    public function scopeApproved($query)
    {
        return $query->where("status", "approved");
    }

    public function scopeRejected($query)
    {
        return $query->where("status", "rejected");
    }
}
