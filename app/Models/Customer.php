<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Booking;
/**
 * Class Customer
 * @package App\Models
 * @version November 27, 2018, 3:42 pm UTC
 *
 * @property string first_name
 * @property string surname
 * @property string other_name
 * @property integer phone
 * @property string email
 * @property string occupation
 * @property string nationality
 * @property string address
 * @property string passport_number
 * @property date date_issued
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'first_name',
        'surname',
        'other_name',
        'phone',
        'email',
        'occupation',
        'nationality',
        'address',
        'passport_number',
        'date_issued'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'surname' => 'string',
        'other_name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'occupation' => 'string',
        'nationality' => 'string',
        'address' => 'string',
        'passport_number' => 'string',
        'date_issued' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
        'first_name' => ['required', 'regex:/^[A-Za-z]+$/', 'max:50', 'alpha_dash'],
        'surname' => ['required', 'string', 'max:50', 'regex:/^[A-Za-z ,.\'-]+$/',],
        'other_name' => ['nullable', 'regex:/^[A-Za-z ,.\'-]+$/', 'max:50',],
        'phone' => ['required', 'digits_between:11,14',  'unique:users'],
        'email' => ['nullable','string', 'email', 'max:50', 'unique:customers'],
        'nationality' => ['required',],
        'occupation' => ['required',],
        'address' => ['required', 'regex:/^[A-Za-z0-9 ,.\'-]+$/',],
    ];

    public  function booking(){
        
        $this->hasMany('App\Models\Booking');
    }
    
}
