<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExpense_typeRequest;
use App\Http\Requests\UpdateExpense_typeRequest;
use App\Repositories\Expense_typeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Expense_typeController extends AppBaseController
{
    /** @var  Expense_typeRepository */
    private $expenseTypeRepository;

    public function __construct(Expense_typeRepository $expenseTypeRepo)
    {
        $this->expenseTypeRepository = $expenseTypeRepo;
    }

    /**
     * Display a listing of the Expense_type.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->expenseTypeRepository->pushCriteria(new RequestCriteria($request));
        $expenseTypes = $this->expenseTypeRepository->all();

        return view('expense_types.index')
            ->with('expenseTypes', $expenseTypes);
    }

    /**
     * Show the form for creating a new Expense_type.
     *
     * @return Response
     */
    public function create()
    {
        return view('expense_types.create');
    }

    /**
     * Store a newly created Expense_type in storage.
     *
     * @param CreateExpense_typeRequest $request
     *
     * @return Response
     */
    public function store(CreateExpense_typeRequest $request)
    {
        $input = $request->all();

        $expenseType = $this->expenseTypeRepository->create($input);

        Flash::success('Expense Type saved successfully.');

        return redirect(route('expenseTypes.show', compact('expenseType')));
    }

    /**
     * Display the specified Expense_type.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $expenseType = $this->expenseTypeRepository->findWithoutFail($id);

        if (empty($expenseType)) {
            Flash::error('Expense Type not found');

            return redirect(route('expenseTypes.index'));
        }

        return view('expense_types.show')->with('expenseType', $expenseType);
    }

    /**
     * Show the form for editing the specified Expense_type.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $expenseType = $this->expenseTypeRepository->findWithoutFail($id);

        if (empty($expenseType)) {
            Flash::error('Expense Type not found');

            return redirect(route('expenseTypes.index'));
        }

        return view('expense_types.edit')->with('expenseType', $expenseType);
    }

    /**
     * Update the specified Expense_type in storage.
     *
     * @param  int              $id
     * @param UpdateExpense_typeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpense_typeRequest $request)
    {
        $expenseType = $this->expenseTypeRepository->findWithoutFail($id);

        if (empty($expenseType)) {
            Flash::error('Expense Type not found');

            return redirect(route('expenseTypes.index'));
        }

        $expenseType = $this->expenseTypeRepository->update($request->all(), $id);

        Flash::success('Expense Type updated successfully.');

        return redirect(route('expenseTypes.show', compact('expenseType')));
    }

    /**
     * Remove the specified Expense_type from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $expenseType = $this->expenseTypeRepository->findWithoutFail($id);

        if (empty($expenseType)) {
            Flash::error('Expense Type not found');

            return redirect(route('expenseTypes.index'));
        }

        $this->expenseTypeRepository->delete($id);

        Flash::success('Expense Type deleted successfully.');

        return redirect(route('expenseTypes.index'));
    }
}
