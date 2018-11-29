<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Revenue;

/**
 * Class Other_revenue_source
 * @package App\Models
 * @version November 27, 2018, 3:46 pm UTC
 *
 * @property string name
 * @property string description
 */
class Other_revenue_source extends Model
{
    use SoftDeletes;

    public $table = 'other_revenue_sources';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public  function revenue(){
        
       return $this->hasMany('App\Model\Revenue');
    }
    
}
