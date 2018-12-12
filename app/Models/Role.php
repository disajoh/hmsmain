<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
/**
 * Class Role
 * @package App\Models
 * @version November 27, 2018, 3:43 pm UTC
 *
 * @property string name
 */
class Role extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
        'name' => ['required', 'regex:/^[A-Za-z0-9 ,.\'-]+$/',]
    ];

    public  function user(){
        
        return $this->hasMany(User::class);
    }
}
