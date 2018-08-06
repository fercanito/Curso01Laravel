<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()
    {
        //return $this->hasOne(User::class); //Regresa un solo objeto
        return $this->hasMany(User::class); //Regresa todos los objetos


    }
}
