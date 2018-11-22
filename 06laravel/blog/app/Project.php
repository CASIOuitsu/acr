<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = []; # colocar campos com excepcoes (nao podem ser preenchidos),
    # pode ficar vazio se nao passarmos todos os campos no ctrl

    /* campos de preechimento permitido
    protected $fillable = [
        'title', 'description'
    ];
    */

    public function tasks()
    {
        return $this->hasMany(Task::class);
        /* examples:
        return $this->belongsTo;
        return $this->hasManyThrough;
        return $this->morphMany;
        */
    }


    public function addTask($task)
    {
        $this->tasks()->create($task);
        // adiciona o project_id automaticamente

    }
}

// $project->tasks; to get project tasks at controller