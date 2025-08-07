<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


//crear una ruta para http://127.0.0.1:8000/hola
Route::get('hola', function () {
    return 'hola mundo';
})->name('practica1');

//rutas y paso de parametros http://127.0.0.1:8000/persona/Carlos/15
Route::get('persona/{nombre}/{edad}', function ($nombre, $edad) {
    return 'hola ' . $nombre . ' usted tiene ' . $edad . ' años';
})->name('practica2');

// paso de parametros con valores por defecto http://127.0.0.1:8000/estudiante/Megan o ttp://http://127.0.0.1:8000/estudiante
Route::get('estudiante/{nombre?}', function ($nombre = 'Sin nombre') {
    return 'Nombre de estudiante: ' . $nombre;
})->name('practica3');

//rutas validacion de parametros 
//http://127.0.0.1:8000/usuario/12 (aceptado)
//http://127.0.0.1:8000/usuario/abc (no aceptado)

Route::get('usuario/{id}', function ($id) {
    return 'Id de Usuario: ' . $id;
})->where('id', '[0-9]+')->name('practica4');

//rutas validacion de parametros 
//http://127.0.0.1:8000/categoria/administrador (aceptado)
//http://127.0.0.1:8000/categoria/nuevo-admin (aceptado)
//c3 (no aceptado)
Route::get('categoria/{slug}', function ($slug) {
    return 'Categoria: ' . $slug;
})->where('slug', '[A-Za-z\-]+')->name('practica5');  //solo acepta letras y guiones



//Rutas para APIs(JSON)
//http://127.0.0.1:8000/posts
Route::get('/posts', function () {
    return response()->json([
        ['id' => 1, 'title' => 'post 1'],
        ['id' => 2, 'title' => 'post 2']
    ]);
})->name('practica6');

//Rutas, grupos
//http://127.0.0.1:8000/saludo/dia
//http://127.0.0.1:8000/saludo/tarde
//http://127.0.0.1:8000/saludo/noche
Route::group(['prefix' => 'saludo'], function () {
    Route::get('dia', function () {
        return 'Buenos Dias';
    })->name('saludo.dia');

    Route::get('tarde', function () {
        return 'Buenas Tardes';
    })->name('saludo.tarde');

    Route::get('noche', function () {
        return 'Buenas Noches';
    })->name('saludo.noches');
});


//realiza un mensaje desde controlllers en la funcion index
//http://127.0.0.1:8000/prueba
Route::get('prueba',[PruebaController::class,'index']);

//realiza un mensaje desde controller en la funcion mostrarDatos
//http://127.0.0.1:8000/prueba/empleados/datos/Pedro/5000
Route::get('prueba/empleado/datos',[PruebaController::class,'mostrarDatos'])->name('prueba.empleado');

//utilizando Blade para las vistas
//http://127.0.0.1:8000/prueba/controlador
Route::get('prueba/controlador',[PruebaController::class,'holaBlade'])->name('prueba.controlador');


Route::get('prueba/persona',[PruebaController::class,'datosPersona'])->name('prueba.persona');


Route::get('prueba/empleado',[PruebaController::class,'datosEmpleado'])->name('prueba.emp');

Route::get('prueba/componentes',[PruebaController::class,'componentesBlade'])->name('prueba.componentes');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/home',[HomeController::class,'index'])->name('admin.home');

});