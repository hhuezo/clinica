<?php

namespace App\catalogo;

use Illuminate\Database\Eloquent\Model;

class PerfilProfesional extends Model
{
    protected $table = 'perfil_profesional';

    protected $primaryKey = 'Id';

    public $timestamps = false;


    protected $fillable = [
        'Doctor',
        'Descripcion',
        'Activo'
    ];

    protected $guarded = [];


    public function dotores()
    {
        return $this->hasMany('App\catalogo\Doctor', 'Especialidad');
    }
}
