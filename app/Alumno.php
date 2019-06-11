<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table='alumno';
    protected $primaryKey = 'id_alumno';
    public $timestamps = false;
    public function padres()
    {
        return $this->belongsToMany('App\Padre', 'padre_alumno', 'idalumno', 'idpadre');
    }
    public function paralelo()
    {
        return $this->belongsTo('App\GrupoMateria', 'idgrupomateria', 'id_grupomateria');
    }
    public function licencias()
    {
        return $this->hasMany('App\Licencia', 'idalumno', 'id_alumno');
    }
}
