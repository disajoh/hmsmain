<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Expense_type;
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
        'cheque_number',
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
        'cheque_number' => 'string',
        'expense_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => ['exists:users,id',],
        'expence_type_id' => ['exists:expense_types,id',],
        'description' => ['nullable', 'regex:/^[A-Za-z0-9 ,.\'-]+$/',],
        'amount' => ['required', 'min:1', 'numeric',],
        'cheque_number' =>['required_if:payment_method,cheque', 'numeric',],
    ];

    public  function expense_type(){
        
        return $this->belongsTo(Expense_type::class, 'expence_type_id');
    }

    public  function user(){
        
        return $this->belongsTo(User::class);
    }
}
