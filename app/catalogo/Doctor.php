<?php

namespace App\catalogo;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctor';

    protected $primaryKey = 'Id';

    public $timestamps = false;


    protected $fillable = [
        'Nombre',
        'Foto',
        'Titulo',
        'Especialidad',
        'Activo'
    ];

    protected $guarded = [];

    public function especialidad()
    {
        return $this->belongsTo('App\catalogo\Especialidad', 'Especialidad', 'Id');
    }



}
