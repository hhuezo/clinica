<?php

namespace App\catalogo;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidad';

    protected $primaryKey = 'Id';

    public $timestamps = false;


    protected $fillable = [
        'Nombre',
        'Foto',
        'Activo'
    ];

    protected $guarded = [];


    public function dotores()
    {
        return $this->hasMany('App\catalogo\Doctor', 'Especialidad');
    }
}
