<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'cita';

    protected $primaryKey = 'Id';

    public $timestamps = false;


    protected $fillable = [
        'Horario',
        'Fecha',
        'Hora',
        'Paciente',
        'Espacialidad',
        'Doctor',
        'Observacion',
        'Activo'
    ];

    protected $guarded = [];

    public function horario()
    {
        return $this->belongsTo('App\catalogo\Horario', 'Horario', 'Id');
    }


    public function espacialidad()
    {
        return $this->belongsTo('App\catalogo\Especialidad', 'Especialidad', 'Id');
    }

    public function doctor()
    {
        return $this->belongsTo('App\catalogo\Doctor', 'Doctor', 'Id');
    }

    public function paciente()
    {
        return $this->belongsTo('App\User', 'Paciente', 'id');
    }
}
