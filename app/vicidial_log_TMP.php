<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vicidial_log_TMP extends Model
{
    public $timestamps = false;
    protected $connection = 'logpredictivo';
    protected $table = 'vicidial_log_TMP';
}
