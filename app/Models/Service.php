<?php

namespace App\Models;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    //
    protected  $guarded = [];
    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
}
