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
        'Activo',
        'Especialidad'
    ];

    protected $guarded = [];

    public function especialidades()
    {
        return $this->belongsTo('App\catalogo\Especialidad', 'Especialidad', 'Id');
    }

}
