<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    //
     public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
