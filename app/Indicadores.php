<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicadores extends Model
{
    protected $connection = 'asterisk';
    protected $table = 'vicidial_log';
}
