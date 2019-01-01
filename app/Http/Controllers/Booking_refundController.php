<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBooking_refundRequest;
use App\Http\Requests\UpdateBooking_refundRequest;
use App\Repositories\Booking_refundRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Booking;

class Booking_refundController extends AppBaseController
{
    /** @var  Booking_refundRepository */
    private $bookingRefundRepository;

    public function __construct(Booking_refundRepository $bookingRefundRepo)
    {
        $this->bookingRefundRepository = $bookingRefundRepo;
    }

    /**
     * Display a listing of the Booking_refund.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bookingRefundRepository->pushCriteria(new RequestCriteria($request));

        $bookingRefunds = $this->bookingRefundRepository
        ->orderBy('updated_at', 'DESC')->all();

        return view('booking_refunds.index')
            ->with('bookingRefunds', $bookingRefunds);
    }

    /**
     * Show the form for creating a new Booking_refund.
     *
     * @return Response
     */
    public function create()
    {
        return view('booking_refunds.create');
    }

    public function new($id)
    {
        $booking= Booking::find($id);
        return view('booking_refunds.create')->with('booking', $booking);
    }

    /**
     * Store a newly created Booking_refund in storage.
     *
     * @param CreateBooking_refundRequest $request
     *
     * @return Response
     */
    public function store(CreateBooking_refundRequest $request)
    {
        $input = $request->all();

        $bookingRefund = $this->bookingRefundRepository->create($input);


        Flash::success('Booking Refund saved successfully.');

        return redirect(route('bookings.index'));
    }

    /**
     * Display the specified Booking_refund.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bookingRefund = $this->bookingRefundRepository->findWithoutFail($id);

        if (empty($bookingRefund)) {
            Flash::error('Booking Refund not found');

            return redirect(route('bookingRefunds.index'));
        }

        return view('booking_refunds.show')->with('bookingRefund', $bookingRefund);
    }

    /**
     * Show the form for editing the specified Booking_refund.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bookingRefund = $this->bookingRefundRepository->findWithoutFail($id);

        if (empty($bookingRefund)) {
            Flash::error('Booking Refund not found');

            return redirect(route('bookingRefunds.index'));
        }

        return view('booking_refunds.edit')->with('bookingRefund', $bookingRefund);
    }

    /**
     * Update the specified Booking_refund in storage.
     *
     * @param  int              $id
     * @param UpdateBooking_refundRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBooking_refundRequest $request)
    {
        $bookingRefund = $this->bookingRefundRepository->findWithoutFail($id);

        if (empty($bookingRefund)) {
            Flash::error('Booking Refund not found');

            return redirect(route('bookingRefunds.index'));
        }

        $bookingRefund = $this->bookingRefundRepository->update($request->all(), $id);

        Flash::success('Booking Refund updated successfully.');

        return redirect(route('bookingRefunds.index'));
    }

    /**
     * Remove the specified Booking_refund from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bookingRefund = $this->bookingRefundRepository->findWithoutFail($id);

        if (empty($bookingRefund)) {
            Flash::error('Booking Refund not found');

            return redirect(route('bookingRefunds.index'));
        }

        $this->bookingRefundRepository->delete($id);

        Flash::success('Booking Refund deleted successfully.');

        return redirect(route('bookingRefunds.index'));
    }
}
