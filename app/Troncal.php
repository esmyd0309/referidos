<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Troncal extends Model
{
    public $timestamps = false;
    public $connection = 'troncal1';
    public $table = 'cdr';
}
