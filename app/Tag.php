<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function articles()
    {
        //creo nel model tag una relazione many to many con articles. Vuole come parametro da inserire dentro le parentesi del belongstomany il nome della classe del modello al quale si riferisce(in questo caso 'Article::class')
        return $this->belongsToMany(Article::class);
    }
}
