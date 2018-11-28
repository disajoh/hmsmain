<?php

namespace App\Repositories;

use App\Models\Expenditure;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExpenditureRepository
 * @package App\Repositories
 * @version November 27, 2018, 3:38 pm UTC
 *
 * @method Expenditure findWithoutFail($id, $columns = ['*'])
 * @method Expenditure find($id, $columns = ['*'])
 * @method Expenditure first($columns = ['*'])
*/
class ExpenditureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'expence_type_id',
        'description',
        'amount',
        'payment_method',
        'expense_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Expenditure::class;
    }
}
