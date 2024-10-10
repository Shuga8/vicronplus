<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
