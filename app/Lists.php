<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    protected $connection = 'asterisk';
    protected $table = 'vicidial_lists';
    protected $primaryKey = 'lead_id';
}
