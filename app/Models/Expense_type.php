<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Expenditure;
/**
 * Class Expense_type
 * @package App\Models
 * @version November 27, 2018, 3:45 pm UTC
 *
 * @property string name
 * @property string description
 */
class Expense_type extends Model
{
    use SoftDeletes;

    public $table = 'expense_types';
    
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
        'name' => ['required', 'regex:/^[A-Za-z0-9 ,.\'-]+$/',],
        'description' => ['required', 'regex:/^[A-Za-z0-9 ,.\'-]+$/',],
    ];

    public  function expenditure(){
        
       return $this->hasMany('App\Models\Expenditure');
    }
}
