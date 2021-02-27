<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','body','author','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //creo nel model tag una relazione many to many con Tag. Vuole come parametro da inserire dentro le parentesi del belongstomany il nome della classe del modello al quale si riferisce(in questo caso 'Tag::class')
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
