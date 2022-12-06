<?php

namespace App\catalogo;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';

    protected $primaryKey = 'Id';

    public $timestamps = false;


    protected $fillable = [
        'Pregunta',
        'Respuesta',
        'Activo'
    ];

    protected $guarded = [];

}
