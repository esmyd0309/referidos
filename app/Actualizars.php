<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualizars extends Model
{
    protected $table ='actualizars';


    public function scopeAgente($query, $agente)
    {
        if($agente)
        return $query->where('name', 'LIKE', "%$agente%"); 
    }

}
