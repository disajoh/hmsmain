<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Booking_refund
 * @package App\Models
 * @version December 18, 2018, 2:18 pm UTC
 *
 * @property integer booking_id
 * @property float amount_refunded
 */
class Booking_refund extends Model
{
    use SoftDeletes;

    public $table = 'booking_refunds';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'booking_id',
        'amount_refunded'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'booking_id' => 'integer',
        'amount_refunded' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public  function booking(){
        
       return $this->belongsTo(Booking::class);
    }
    
}
