<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GruposPredictivos extends Model
{
    public $timestamps = false;
    public $connection = 'asterisk';
    public $table = 'vicidial_user_groups';
   
    protected $fillable = [
        'user_group','group_name',
    ];
}
