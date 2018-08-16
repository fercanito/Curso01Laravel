<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['nombre','email','mensaje'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relacion normal
     */
    // public function note()
    // {
    //     return $this->hasOne(Note::class); 
    //     //hasOne -> regresa un objetos
    //     //hasMany -> una coleccion de objetos
    // }

    /**
     * Relacion polimorfica
     */
    public function note()
    {
        return $this->morphOne(Note::class,'notable'); //se agrega el prefijo de la migracion
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }

}

