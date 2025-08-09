<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table='directores';
    protected $primaryKey = 'id';
    protected $fillable=['nombre'];
    public $timestamps=true;
}
