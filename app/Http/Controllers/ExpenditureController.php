<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExpenditureRequest;
use App\Http\Requests\UpdateExpenditureRequest;
use App\Repositories\ExpenditureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Expense_type;
use Auth;

class ExpenditureController extends AppBaseController
{
    /** @var  ExpenditureRepository */
    private $expenditureRepository;

    public function __construct(ExpenditureRepository $expenditureRepo)
    {
        $this->expenditureRepository = $expenditureRepo;
    }

    /**
     * Display a listing of the Expenditure.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->expenditureRepository->pushCriteria(new RequestCriteria($request));
        $expenditures = $this->expenditureRepository->all();

        return view('expenditures.index')
            ->with('expenditures', $expenditures);
    }

    /**
     * Show the form for creating a new Expenditure.
     *
     * @return Response
     */
    public function create()
    {
        $expenseTypes = Expense_type::all();
        return view('expenditures.create', compact('expenseTypes'));
    }

    /**
     * Store a newly created Expenditure in storage.
     *
     * @param CreateExpenditureRequest $request
     *
     * @return Response
     */
    public function store(CreateExpenditureRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        $expenditure = $this->expenditureRepository->create($input);

        Flash::success('Expenditure saved successfully.');

        return redirect(route('expenditures.show', compact('expenditure')));
    }

    /**
     * Display the specified Expenditure.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $expenditure = $this->expenditureRepository->findWithoutFail($id);

        if (empty($expenditure)) {
            Flash::error('Expenditure not found');

            return redirect(route('expenditures.index'));
        }

        return view('expenditures.show')->with('expenditure', $expenditure);
    }

    /**
     * Show the form for editing the specified Expenditure.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $expenditure = $this->expenditureRepository->findWithoutFail($id);
        $expenseTypes = Expense_type::all();

        if (empty($expenditure)) {
            Flash::error('Expenditure not found');

            return redirect(route('expenditures.index'));
        }
        
        return view('expenditures.edit')
            ->with('expenditure', $expenditure)
            ->with('expenseTypes', $expenseTypes);
    }

    /**
     * Update the specified Expenditure in storage.
     *
     * @param  int              $id
     * @param UpdateExpenditureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpenditureRequest $request)
    {
        $expenditure = $this->expenditureRepository->findWithoutFail($id);

        if (empty($expenditure)) {
            Flash::error('Expenditure not found');

            return redirect(route('expenditures.index'));
        }

        $expenditure = $this->expenditureRepository->update($request->all(), $id);

        Flash::success('Expenditure updated successfully.');

        return redirect(route('expenditures.show', compact('expenditure')));
    }

    /**
     * Remove the specified Expenditure from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $expenditure = $this->expenditureRepository->findWithoutFail($id);

        if (empty($expenditure)) {
            Flash::error('Expenditure not found');

            return redirect(route('expenditures.index'));
        }

        $this->expenditureRepository->delete($id);

        Flash::success('Expenditure deleted successfully.');

        return redirect(route('expenditures.index'));
    }
}
