<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='curso';
    protected $primaryKey = 'id_curso';
    public $timestamps = false;
    public function grupo_materia()
    {
        return $this->hasMany('App\GrupoMateria', 'id_curso', 'id_grupomateria');
    }
}
