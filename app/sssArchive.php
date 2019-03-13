<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Archive
 * @package App\Models
 * @version February 11, 2019, 9:36 pm UTC
 *
 * @property string user
 * @property string file_title
 * @property string file_name
 * @property string image_path
 */
class Archive extends Model
{
    use SoftDeletes;

    public $table = 'archives';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user',
        'file_title',
        'file_name',
        'image_path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user' => 'string',
        'file_title' => 'string',
        'file_name' => 'string',
        'image_path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
