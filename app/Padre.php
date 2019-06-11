<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Padre  extends Authenticatable
{
    protected $table='padre';
    protected $primaryKey = 'idpadre';
    public $timestamps = false;
    public function alumnos()
    {
        return $this->belongsToMany('App\Alumno', 'padre_alumno', 'idpadre', 'idalumno');
    }
}
