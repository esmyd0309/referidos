<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacificardatos extends Model
{ 

    protected $connection = 'logpredictivo';
    protected $table = 'bd_actualizacion';
}
