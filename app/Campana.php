<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campana extends Model
{
    protected $table = 'tbCampaña';
    public $timestamps = false;

    public function Incumplidos()
    {
        return $this->belongsToMany('App\Incumplidos','IdCampaña');
    }
}
