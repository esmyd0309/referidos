<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    //protected $connection = 'asterisk';
    protected $table = 'vicidial_list';
    protected $primaryKey = 'lead_id';
}
