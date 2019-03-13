<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $connection = 'mysql';
    protected $table = 'vicidial_log';
    protected $primaryKey = 'uniqueid';
}
