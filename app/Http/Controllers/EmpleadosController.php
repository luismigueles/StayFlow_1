<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        print "empleados".'<br />';;

        $empleados = Empleados::get();
        foreach ($empleados as $empleado) {

            echo $empleado->nombre.'<br />';
            echo $empleado->telefono.'<br />';
            echo $empleado->email.'<br />';
            //echo $empleado->id_tipo_empleado.'<br />';  falta clave foranea
            echo "<hr />";
        
        }
    
        print "<a href='./empleados/create'>crear nuevo empleado</a>";
        return view('stayflow.01_paginas.listar_empleados', [
            'title' => 'Empleados',
            'data' => $empleados
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stayflow.01_paginas.crear_empleados', ['title' => 'crear empleados']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado = new Empleados;
        $empleado->nombre = $request->nombre;
        $empleado->apellidos = $request->apellidos;
        $empleado->password = $request->password;
        //$empleado->id_tipo_empleado = $request->id_tipo_empleado; Clave foranea 

        $empleado->save();
        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleados $empleados)
    {
        $empleado = Empleados::where('id_empleado', $id)->first();
        return view('stayflow.01_paginas.mostrar_editar_empleado', [
            'title' => 'Empleados',
            'data' => $empleado,
            'accion' => 'mostrar',
            'ruta' => 'huespedes/'.$id.'/show'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleados $empleados)
    {
        $empleado = Empleados::find($id);
        //print_r($huesped);
        return view('stayflow.01_paginas.mostrar_editar_empleado', [
            'title' => 'Empleado',
            'data' => $empleado,
            'accion' => 'editar',
            'ruta' => '../'.$id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleados $empleados)
    {
        $empleado = Empleados::find($id);
        $empleado->nombre = $request->nombre;
        $empleado->apellidos = $request->apellidos;
        $empleado->password = $request->password;
        //$empleado->id_tipo_empleado = $request->d_tipo_empleado; Clave foranea
        $empleado->save();        
        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleados $empleados)
    {
        $empleado = Empleados::find($id);
        $empleado->delete();

        return redirect('/empleados');
    }
}
