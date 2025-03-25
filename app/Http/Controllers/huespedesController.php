<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\huespedes;


class huespedesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        print "huespedes".'<br />';;

        $huespedes = Huespedes::get();
        foreach ($huespedes as $huesped) {

            echo $huesped->nombre.'<br />';
            echo $huesped->telefono.'<br />';
            echo $huesped->email.'<br />';
            echo "<hr />";
        
        }
    
        print "<a href='./huespedes/create'>crear nuevo huesped</a>";
        return view('stayflow.01_paginas.listar_huespedes', [
            'title' => 'Huespedes',
            'data' => $huespedes
        ]);  
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stayflow.huespedes', ['title' => 'crear huspedes']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $huesped = new Huespedes;
        $huesped->nombre = $request->nombre;
        $huesped->email = $request->email;
        $huesped->telefono = $request->telefono;

        $huesped->save();
        return redirect('/huespedes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $huesped = Huespedes::where('id_huesped', $id)->first();
        return view('stayflow.01_paginas.mostrar_editar_huesped', [
            'title' => 'Huespedes',
            'data' => $huesped,
            'accion' => 'mostrar',
            'ruta' => 'huespedes/'.$id.'/show'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $huesped = Huespedes::where('id_huesped', $id)->first();
        print_r($huesped);
        return view('stayflow.01_paginas.mostrar_editar_huesped', [
            'title' => 'Huespedes',
            'data' => $huesped,
            'accion' => 'editar',
            'ruta' => '../'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->huesped()->fill($request->validated());
        $request->huesped()->save();

        
        return redirect('/huespedes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
