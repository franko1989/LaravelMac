<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    //indicar el nombre de la tabla 
    protected $table='imagenes';
    // indicar el nombre del PK
    protected $primaryKey = 'id';
    //indicar campos gestionados
    protected $fillable=['nombre',
                         'pelicula_id'];
    //indicar que laravel va a gestionar los campos created_at y updated_at
    public $timestamps=true;
}
