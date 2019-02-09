<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRevenueRequest;
use App\Http\Requests\UpdateRevenueRequest;
use App\Repositories\RevenueRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Other_revenue_source;
use Auth;

class RevenueController extends AppBaseController
{
    /** @var  RevenueRepository */
    private $revenueRepository;

    public function __construct(RevenueRepository $revenueRepo)
    {
        $this->revenueRepository = $revenueRepo;
    }

    /**
     * Display a listing of the Revenue.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->revenueRepository->pushCriteria(new RequestCriteria($request));
        $revenues = $this->revenueRepository
        ->paginate(20);

        return view('revenues.index')
            ->with('revenues', $revenues);
    }

    /**
     * Show the form for creating a new Revenue.
     *
     * @return Response
     */
    public function create()
    {
        $revenueSources = Other_revenue_source::all();
        return view('revenues.create', compact('revenueSources'));
    }

    /**
     * Store a newly created Revenue in storage.
     *
     * @param CreateRevenueRequest $request
     *
     * @return Response
     */
    public function store(CreateRevenueRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        $revenue = $this->revenueRepository->create($input);

        Flash::success('Revenue saved successfully.');

        return redirect(route('revenues.show', compact('revenue')));
    }

    /**
     * Display the specified Revenue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $revenue = $this->revenueRepository->findWithoutFail($id);

        if (empty($revenue)) {
            Flash::error('Revenue not found');

            return redirect(route('revenues.index'));
        }

        return view('revenues.show')->with('revenue', $revenue);
    }

    /**
     * Show the form for editing the specified Revenue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $revenue = $this->revenueRepository->findWithoutFail($id);
        
        $revenueSources = Other_revenue_source::all();
        if (empty($revenue)) {
            Flash::error('Revenue not found');

            return redirect(route('revenues.index'));
        }

        return view('revenues.edit')
        ->with('revenue', $revenue)
        ->with('revenueSources', $revenueSources);
    }

    /**
     * Update the specified Revenue in storage.
     *
     * @param  int              $id
     * @param UpdateRevenueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRevenueRequest $request)
    {
        $revenue = $this->revenueRepository->findWithoutFail($id);

        if (empty($revenue)) {
            Flash::error('Revenue not found');

            return redirect(route('revenues.index'));
        }

        $revenue = $this->revenueRepository->update($request->all(), $id);

        Flash::success('Revenue updated successfully.');

        return redirect(route('revenues.show', compact('revenue')));
    }

    /**
     * Remove the specified Revenue from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $revenue = $this->revenueRepository->findWithoutFail($id);

        if (empty($revenue)) {
            Flash::error('Revenue not found');

            return redirect(route('revenues.index'));
        }

        $this->revenueRepository->delete($id);

        Flash::success('Revenue deleted successfully.');

        return redirect(route('revenues.index'));
    }
}
