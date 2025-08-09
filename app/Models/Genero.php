<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    //indicar el nombre de la tabla 
    protected $table='generos';
    // indicar el nombre del PK
    protected $primaryKey = 'id';
    //indicar campos gestionados
    protected $fillable=['genero'];
    //indicar que laravel va a gestionar los campos created_at y updated_at
    public $timestamps=true;
}
