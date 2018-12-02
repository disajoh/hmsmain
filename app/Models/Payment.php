<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 * @package App\Models
 * @version December 2, 2018, 2:07 pm UTC
 *
 * @property integer booking_id
 * @property float amount_paid
 * @property float discount
 * @property date date_received
 */
class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'booking_id',
        'amount_paid',
        'discount',
        'date_received'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'booking_id' => 'integer',
        'amount_paid' => 'float',
        'discount' => 'float',
        'date_received' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public  function booking(){
        
       return $this->belongsTo('App\Models\Booking');
    }
    
}
