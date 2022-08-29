<?php

namespace App\catalogo;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    protected $primaryKey = 'Id';

    public $timestamps = false;


    protected $fillable = [
        'Nombre',
        'Activo'
    ];

    protected $guarded = [];


    public function espacialidades()
    {
        return $this->hasMany('App\catalogo\Especialidad', 'Categoria');
    }
}
