<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predictivo extends Model
{
        /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = 'comments';
 
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'phones';

    //Etc...
}
