<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookingRequest;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Repositories\BookingRepository;
use App\Repositories\CustomerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;
use CustomerController;

class BookingController extends AppBaseController
{
    /** @var  BookingRepository */
    private $bookingRepository;
    private $customerRepository;

    public function __construct(BookingRepository $bookingRepo, CustomerRepository $customerRepo)
    {
        $this->bookingRepository = $bookingRepo;
        $this->customerRepository = $customerRepo;
    }

    /**
     * Display a listing of the Booking.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bookingRepository->pushCriteria(new RequestCriteria($request));
        $bookings = $this->bookingRepository->all();

        return view('bookings.index')
            ->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new Booking for
     * an existing customer.
     *
     * @return Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Show the form for creating a new Booking for 
     * a new customer.
     *
     * @return Response
     */
    public function new()
    {
        return view('bookings.new');
    }

    /**
     * Store a newly created Booking in storage.
     *
     * @param CreateBookingRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerRequest $request1, CreateBookingRequest $request2)
    {
        $input1 = $request1->all();
        $input2 = $request2->all();

        //add new customer first
        $customer = $this->customerRepository->create($input1);

        //get customer and user id;
        $input2['customer_id']=$customer->id;
        $input2['user_id'] = Auth::user()->id;

        //add booking for the new customer
        $booking = $this->bookingRepository->create($input2);

        Flash::success('Booking saved successfully.');

        return redirect(route('bookings.show', compact('booking')));
    }

    /**
     * Display the specified Booking.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $booking = $this->bookingRepository->findWithoutFail($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        return view('bookings.show')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified Booking.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $booking = $this->bookingRepository->findWithoutFail($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        return view('bookings.edit')->with('booking', $booking);
    }

    /**
     * Update the specified Booking in storage.
     *
     * @param  int              $id
     * @param UpdateBookingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookingRequest $request)
    {
        $booking = $this->bookingRepository->findWithoutFail($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        $booking = $this->bookingRepository->update($request->all(), $id);

        Flash::success('Booking updated successfully.');

        return redirect(route('bookings.show',compact('booking')));
    }

    /**
     * Remove the specified Booking from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $booking = $this->bookingRepository->findWithoutFail($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        $this->bookingRepository->delete($id);

        Flash::success('Booking deleted successfully.');

        return redirect(route('bookings.index'));
    }
}
