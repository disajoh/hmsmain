<?php

namespace App\Repositories;

use App\Models\Booking_refund;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Booking_refundRepository
 * @package App\Repositories
 * @version December 18, 2018, 2:18 pm UTC
 *
 * @method Booking_refund findWithoutFail($id, $columns = ['*'])
 * @method Booking_refund find($id, $columns = ['*'])
 * @method Booking_refund first($columns = ['*'])
*/
class Booking_refundRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'booking_id',
        'amount_refunded'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Booking_refund::class;
    }
}
