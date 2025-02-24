<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Timesheet extends Model
{
    protected $fillable = [
        'user_id',
        'calendar_id',
        'hours',
        'day_in',
        'day_out',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function calendar(): BelongsTo
    {
        return $this->belongsTo(Calendar::class);
    }
}
