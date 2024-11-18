<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table= 'tareas';
    protected $fillable=['titulo', 'descripcion', 'fecha_limite', 'trabajador_id']; //para poder usar el Tarea::create($request->all());

    public function trabajador(){ //si llamamos de tarea los trabajadores nos muestra la lista
        return $this->belongsTo(Trabajador::class);
    }
    //Un trabajador puede tener varias tareas pero una tarea solo puede estar asignada aun trabajador
}
