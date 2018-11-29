<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Room_category;
/**
 * Class Room
 * @package App\Models
 * @version November 27, 2018, 3:41 pm UTC
 *
 * @property string room_number
 * @property integer category_id
 * @property boolean available
 */
class Room extends Model
{
    use SoftDeletes;

    public $table = 'rooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'room_number',
        'category_id',
        'available'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'room_number' => 'string',
        'category_id' => 'integer',
        'available' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public  function room_category(){
         
         return $this->belongsTo(Room_category::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
