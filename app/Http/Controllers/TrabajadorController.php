<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;

class TrabajadorController extends Controller
{
    public function index(){
        $trabajadores=Trabajador::all(); //devulve una lista de todos los trabajadores que hay en la base de datos
        return view('trabajadores.index', compact('trabajadores'));  //en la vista trabajadores.index quiero usar una variable que se va a llamar trabajadores con los datos de la bd, save que es el mismo nombre para todo
        //return view('trabajadores.index', ['trabajadores' => $trabajadores]); //lo mismo que el compact
    }                                       //el nombre que va a tener la variable   //el mismo nombre del all $

    public function create(){
        return view('trabajadores.create');
    }

    public function store(Request $request){
       
        $validated=$request->validate([ //para validar
            'nombre'=>'required',
            'apellido'=>'required',
            'dni'=> 'required|unique:trabajadores', //poner la tabla importante
        ]);
 
        //$messages= [ //si queremos poner nuestros propios mensajes de error
        //    'nombre.required'=> 'El campo nombre es obligatorio'
        //];
        
        $trabajador=new Trabajador();
        $trabajador->nombre=$request->nombre;
        $trabajador->apellido=$request->apellido;
        $trabajador->dni=$request->dni;
        $trabajador->save();

        

        return redirect('/trabajadores/index');
        //return view('trabajadores.index');

    }
}
