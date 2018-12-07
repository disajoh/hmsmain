<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Expenditure;
use App\Models\Role;
use App\Models\Booking;
use App\Models\Revenue;
/**
 * Class User
 * @package App\Models
 * @version November 27, 2018, 3:37 pm UTC
 *
 * @property integer role_id
 * @property string first_name
 * @property string surname
 * @property string other_name
 * @property string phone
 * @property string email
 * @property string address
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'first_name',
        'surname',
        'other_name',
        'phone',
        'email',
        'address',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'role_id' => 'integer',
        'first_name' => 'string',
        'surname' => 'string',
        'other_name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'address' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'role_id'=> ['nullable', 'numeric', 'min:1', ''],
        'first_name' => ['required', 'regex:/^[A-Za-z]+$/', 'max:50', 'alpha_dash'],
        'surname' => ['required', 'string', 'max:50', 'regex:/^[A-Za-z]+$/','alpha_dash'],
        'other_name' => ['nullable', 'regex:/^[A-Za-z-]+$/', 'max:50', 'alpha_dash'],
        'phone' => ['required', 'digits_between:11,14',  'unique:users'],
        'address' => ['required','string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
    ];

    public  function role(){
        
        return $this->belongsTo(Role::class);
    }

    public  function booking(){
        
        return $this->hasMany(Booking::class);
    }

    public  function expenditure(){
        
        return $this->hasMany('App\Models\Expenditure');
    }

    public  function revenue(){
        
        return $this->hasMany(Revenue::class);
    }
}
