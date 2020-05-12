<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cv_contactos extends Model
{
    //
    protected $fillable = [
        'CONTACTO_NOMBRE', 'CONTACTO_EMAIL','CONTACTO_TELEFONO',
        'CONTACTO_MENSAJE', 'CONTACTO_HORA'
    ];
}
