<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo(Project::class);
        /* examples:
        return $this->hasManyThrough;
        return $this->morphMany;
        */
    }
}
