<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Expenditure
 * @package App\Models
 * @version November 27, 2018, 3:38 pm UTC
 *
 * @property integer user_id
 * @property integer expence_type_id
 * @property string description
 * @property float amount
 * @property string payment_method
 * @property date expense_date
 */
class Expenditure extends Model
{
    use SoftDeletes;

    public $table = 'expenditures';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'expence_type_id',
        'description',
        'amount',
        'payment_method',
        'expense_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'expence_type_id' => 'integer',
        'description' => 'string',
        'amount' => 'float',
        'payment_method' => 'string',
        'expense_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
