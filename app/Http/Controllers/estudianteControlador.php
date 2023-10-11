<?php

namespace App\Http\Controllers;

use App\Models\estudiante;

use Illuminate\Http\Request;

use App\routes\web;

class estudianteControlador extends Controller
{
    public function vista(){
        return view('index');

    }

    public function create(Request $request){
    
        $estudiante= new estudiante();
        
        $estudiante->DNI=$request->DNI;
        $estudiante->Nombre=$request->Nombre;
        $estudiante->Apellido=$request->Apellido;
        $estudiante->save();
        return redirect('/create');

    }
    
}
