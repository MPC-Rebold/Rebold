<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assessment extends Model
{
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}