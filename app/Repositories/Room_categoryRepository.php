<?php

namespace App\Repositories;

use App\Models\Room_category;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Room_categoryRepository
 * @package App\Repositories
 * @version November 27, 2018, 3:39 pm UTC
 *
 * @method Room_category findWithoutFail($id, $columns = ['*'])
 * @method Room_category find($id, $columns = ['*'])
 * @method Room_category first($columns = ['*'])
*/
class Room_categoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'building_id',
        'name',
        'price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Room_category::class;
    }
}
