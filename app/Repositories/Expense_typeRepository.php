<?php

namespace App\Repositories;

use App\Models\Expense_type;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Expense_typeRepository
 * @package App\Repositories
 * @version November 27, 2018, 3:45 pm UTC
 *
 * @method Expense_type findWithoutFail($id, $columns = ['*'])
 * @method Expense_type find($id, $columns = ['*'])
 * @method Expense_type first($columns = ['*'])
*/
class Expense_typeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Expense_type::class;
    }
}
