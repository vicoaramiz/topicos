<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoMateria extends Model
{
    protected $table='grupomateria';
    protected $primaryKey = 'id_grupomateria';
    public $timestamps = false;
    public function alumnos()
    {
        return $this->hasMany('App\Alumno', 'id_curso', 'id_alumno');
    }
    public function curso()
    {
        return $this->belongsTo('App\Curso', 'id_curso', 'id_curso');
    }
    public function profesor()
    {
        return $this->belongsTo('App\Profesor', 'idprofesor', 'idprofesor');
    }
}
