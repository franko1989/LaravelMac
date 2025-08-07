<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index()
    {
        return 'hola desde PruebaController';
    }

    public function mostrarDatos($nombre = 'Ana', $sueldo = 1200)
    {
        return 'Nombre: ' . $nombre . '<br>Sueldo: ' . $sueldo;
    }

    //ejemplo con blade
    public function holaBlade()
    {
        return view('prueba.hola'); //desde resources/views/prueba/hola.blade.php

    }



    //primera forma de mostrar datos mediante whith
    public function datosPersona()
    {
        $nombre = 'Juan';
        $edad = 34;
        return view('prueba.datos')
            ->with('nombre', $nombre)
            ->with('edad', $edad);
    }


    //enviar datos a la vista mediante el array asociativa
    public function datosEmpleado()
    {
        $nombre = 'Carla';
        $sueldo = 1200;
        dd($nombre, $sueldo);

        //$data['nombre']=$nombre;
        //$data['sueldo']=$sueldo;
        //return view ('prueba.empleado',$data);

        //con compact
        return view('prueba.empleado', compact('nombre', 'sueldo'));
    }
    public function componentesBlade() {
        return view('prueba.componentes');
    }
}
