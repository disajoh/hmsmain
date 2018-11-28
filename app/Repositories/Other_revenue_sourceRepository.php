<?php

namespace App\Repositories;

use App\Models\Other_revenue_source;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Other_revenue_sourceRepository
 * @package App\Repositories
 * @version November 27, 2018, 3:46 pm UTC
 *
 * @method Other_revenue_source findWithoutFail($id, $columns = ['*'])
 * @method Other_revenue_source find($id, $columns = ['*'])
 * @method Other_revenue_source first($columns = ['*'])
*/
class Other_revenue_sourceRepository extends BaseRepository
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
        return Other_revenue_source::class;
    }
}
