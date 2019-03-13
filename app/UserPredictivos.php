<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPredictivos extends Model
{
    public $timestamps = false;
    public $connection = 'asterisk';
    public $table = 'vicidial_users';
    protected $primaryKey = 'user_id';


    protected $fillable = [
        'user_id','phone_login','user',
    ];

    public function scopeAgente($query, $agente)
    {
        if($agente)
        return $query->where('user', 'LIKE', "%$agente%"); 
    }
    
    public function scopePhone($query, $phone)
    {
        if($phone)
        return $query->where('phone_login', 'LIKE', "%$phone%"); 
    }
}
