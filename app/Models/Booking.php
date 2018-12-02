<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Customer;
use App\Models\User;
use App\Models\Booking;
/**
 * Class Booking
 * @package App\Models
 * @version November 27, 2018, 3:40 pm UTC
 *
 * @property integer user_id
 * @property integer room_id
 * @property integer customer_id
 * @property date arrival_date
 * @property date departure_date
 * @property string purpose
 * @property string next_destination
 * @property string transport_means
 * @property string where_from
 * @property string vehicle_number
 * @property string reserved_by
 * @property float amount_paid
 * @property float discount
 */
class Booking extends Model
{
    use SoftDeletes;

    public $table = 'bookings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'room_id',
        'customer_id',
        'arrival_date',
        'departure_date',
        'purpose',
        'next_destination',
        'transport_means',
        'where_from',
        'vehicle_number',
        'reserved_by',
        'amount_paid',
        'discount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'room_id' => 'integer',
        'customer_id' => 'integer',
        'arrival_date' => 'date',
        'departure_date' => 'date',
        'purpose' => 'string',
        'next_destination' => 'string',
        'transport_means' => 'string',
        'where_from' => 'string',
        'vehicle_number' => 'string',
        'reserved_by' => 'string',
        'amount_paid' => 'float',
        'discount' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public  function customer(){
        
        return $this->belongsTo(Customer::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }
    
    public  function user(){
        
        return $this->belongsTo(User::class);
    }

    public  function payment(){
        
        return $this->hasMany(Payment::class);
    }
}
