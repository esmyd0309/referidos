<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vicidial_list_TMP extends Model
{
    public $timestamps = false;
    protected $connection = 'logpredictivo';
    protected $table = 'vicidial_list_TMP';
}
