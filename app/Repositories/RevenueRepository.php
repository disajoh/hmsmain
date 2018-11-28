<?php

namespace App\Repositories;

use App\Models\Revenue;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RevenueRepository
 * @package App\Repositories
 * @version November 27, 2018, 3:44 pm UTC
 *
 * @method Revenue findWithoutFail($id, $columns = ['*'])
 * @method Revenue find($id, $columns = ['*'])
 * @method Revenue first($columns = ['*'])
*/
class RevenueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'other_revenue_source_id',
        'user_id',
        'amount',
        'transaction_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Revenue::class;
    }
}
