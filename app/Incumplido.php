<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incumplido extends Model
{
 
    public $timestamps = false;
    protected $table ='incumplidos';

      public function scopeAgente($query, $agente)
      {
          if($agente)
          return $query->where('UltimoAgente', 'LIKE', "%$agente%"); 
      }
      
  
      public function Campana()
      {
          return $this->belongsToMany('App\Campana','IdCampaña');
      }
}
