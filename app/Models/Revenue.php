<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Other_revenue_source;
use App\Models\User;
/**
 * Class Revenue
 * @package App\Models
 * @version November 27, 2018, 3:44 pm UTC
 *
 * @property integer other_revenue_source_id
 * @property integer user_id
 * @property float amount
 * @property integer transaction_date
 */
class Revenue extends Model
{
    use SoftDeletes;

    public $table = 'revenues';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'other_revenue_source_id',
        'user_id',
        'amount',
        'transaction_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'other_revenue_source_id' => 'integer',
        'user_id' => 'integer',
        'amount' => 'float',
        'transaction_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public  function other_revenue_source(){
        
       return $this->belongsTo('App\Models\Other_revenue_source');
    }

    public  function user(){
        
       return $this->belongsTo(User::class);
    }
}
