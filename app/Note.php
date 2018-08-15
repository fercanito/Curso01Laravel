<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['body'];

    /**
     * Relacion normal
     */
    // public function message()
    // {
    //     return $this->belongsTo(Message::class);
    // }
    /**
     * Relacion polimorfica
     */
    
    public function notable()
    {
        return $this->morphTo(); //Relacion "Una nota pertenece a un Modelo (ejemplo: Message)"
    }


}
