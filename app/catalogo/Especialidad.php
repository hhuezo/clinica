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
        'Categoria',
        'Activo'
    ];

    protected $guarded = [];




    public function categoria()
    {
        return $this->belongsTo('App\catalogo\Categoria', 'Categoria', 'Id');
    }

}
