<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Repositories\PaymentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Booking;
use App\Models\Payment;

class PaymentController extends AppBaseController
{
    /** @var  PaymentRepository */
    private $paymentRepository;

    public function __construct(PaymentRepository $paymentRepo)
    {
        $this->paymentRepository = $paymentRepo;
    }

    /**
     * Display a listing of the Payment.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paymentRepository->pushCriteria(new RequestCriteria($request));
        $payments = $this->paymentRepository
        ->orderBy('updated_at', 'DESC')
        ->all();

        return view('payments.index')
            ->with('payments', $payments);
    }

    /**
     * Show the form for creating a new Payment.
     *
     * @return Response
     */
    public function create()
    {
        return view('payments.create');
    }
    public function new($id)
    {
        $booking= Booking::find($id);
        $editing= false;
        return view('payments.create')
        ->with('booking', $booking)
        ->with('editing', $editing);
    }

    public function printPreview($id)
    {
        $payment= Payment::find($id);
        return view('payments.print_reciept')->with('payment', $payment);
    }

    /**
     * Store a newly created Payment in storage.
     *
     * @param CreatePaymentRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentRequest $request)
    {
        $input = $request->all();

        $payment = $this->paymentRepository->create($input);

        Flash::success('Payment saved successfully.');

        return redirect(route('payments.index'));
    }

    /**
     * Display the specified Payment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        return view('payments.show')->with('payment', $payment);
    }

    /**
     * Show the form for editing the specified Payment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);
        $editing = true;

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        return view('payments.edit')
        ->with('payment', $payment)
        ->with('editing', $editing);
    }

    /**
     * Update the specified Payment in storage.
     *
     * @param  int              $id
     * @param UpdatePaymentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentRequest $request)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        $payment = $this->paymentRepository->update($request->all(), $id);

        Flash::success('Payment updated successfully.');

        return redirect(route('payments.index'));
    }

    /**
     * Remove the specified Payment from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        $this->paymentRepository->delete($id);

        Flash::success('Payment deleted successfully.');

        return redirect(route('payments.index'));
    }
}
