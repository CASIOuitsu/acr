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
}
