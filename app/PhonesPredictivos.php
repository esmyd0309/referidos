<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhonesPredictivos extends Model
{
    protected $connection = 'asterisk';
    protected $table = 'phones';

    public $timestamps = false;

    protected $primaryKey = 'extension';


    protected $fillable = [
        'extension','login',
    ];
}
