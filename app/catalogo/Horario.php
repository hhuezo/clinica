<?php

namespace App\catalogo;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';

    protected $primaryKey = 'Id';

    public $timestamps = false;


    protected $fillable = [
        'Dia',
        'Hora',
        'Activo',
        'Doctor'
    ];

    protected $guarded = [];

    public function doctores()
    {
        return $this->belongsTo('App\catalogo\Doctor', 'Doctor', 'Id');
    }
}
