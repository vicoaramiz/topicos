<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    protected $table='licencia';
    protected $primaryKey = 'id_licencia';
    public $timestamps = false;
    public function alumno()
    {
        return $this->belongsTo('App\Alumno', 'idalumno', 'id_alumno');
    }
}
