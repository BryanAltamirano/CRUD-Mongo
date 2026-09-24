<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Nombre extends Model
{
    //vamos a decirle mediante un atributo que trabaje con nombres
    protected $connection = 'mongodb';
    protected $table = 'nombres';
    }
 