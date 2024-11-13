<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Trabajador;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index(){
        $tareas=Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    public function create(){
        $trabajadores=Trabajador::all();
        return view('tareas.create', compact('trabajadores'));
    }

    public function store(Request $request){ //para coger los datos del for,ulario
        $tarea=new Tarea();
        $tarea->titulo=$request->titulo;
        $tarea->descripcion=$request->descripcion;
        $tarea->fecha_limite=$request->fecha_limite;
        $tarea->trabajador_id=$request->trabajador_id;
        $tarea->save();
        
        return redirect('/tareas/index');
        //Tarea::create($request->all()); en vez de hacer todo lo de arriba,hace el save automatico pero en el model hay que poner otra cosa

    }

    public function edit($id){
        $tareas = Tarea::find($id);
        $trabajadores=Trabajador::all();
        return view('tareas.edit', compact('tareas', 'trabajadores'));
    }
    
    public function update(Request $request, $id){
        
        $tarea = Tarea::find($id);
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha_limite = $request->fecha_limite;
        $tarea->trabajador_id = $request->trabajador_id;
        $tarea->save();

        return redirect('/tareas/index'); 
    }

    public function delete($id){
        
        $tarea = Tarea::find($id);
        $tarea->delete();
        
        return redirect('/tareas/index');
    }
  

    
}

