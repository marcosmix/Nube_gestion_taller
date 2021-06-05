<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgamadoresController extends Controller
{
    public function getDevelopers(){
        $programadores=array(['id'=>'1','name'=>'Marcos','apellido'=>'Caballero','puesto'=>'fullstack'],
		['id'=>'1','name'=>'Marcos','apellido'=>'Caballero','puesto'=>'fullstack'],
		['id'=>'1','name'=>'Marcos','apellido'=>'Caballero','puesto'=>'fullstack']
		);
        return view('developers.programadores',['programadores'=>$programadores, 'hola_mundo'=>'Hola Mundo!!']);
    }
}

