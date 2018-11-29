<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOther_revenue_sourceRequest;
use App\Http\Requests\UpdateOther_revenue_sourceRequest;
use App\Repositories\Other_revenue_sourceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Other_revenue_sourceController extends AppBaseController
{
    /** @var  Other_revenue_sourceRepository */
    private $otherRevenueSourceRepository;

    public function __construct(Other_revenue_sourceRepository $otherRevenueSourceRepo)
    {
        $this->otherRevenueSourceRepository = $otherRevenueSourceRepo;
    }

    /**
     * Display a listing of the Other_revenue_source.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->otherRevenueSourceRepository->pushCriteria(new RequestCriteria($request));
        $otherRevenueSources = $this->otherRevenueSourceRepository->all();

        return view('other_revenue_sources.index')
            ->with('otherRevenueSources', $otherRevenueSources);
    }

    /**
     * Show the form for creating a new Other_revenue_source.
     *
     * @return Response
     */
    public function create()
    {
        return view('other_revenue_sources.create');
    }

    /**
     * Store a newly created Other_revenue_source in storage.
     *
     * @param CreateOther_revenue_sourceRequest $request
     *
     * @return Response
     */
    public function store(CreateOther_revenue_sourceRequest $request)
    {
        $input = $request->all();

        $otherRevenueSource = $this->otherRevenueSourceRepository->create($input);

        Flash::success('Other Revenue Source saved successfully.');

        return redirect(route('otherRevenueSources.show', compact('otherRevenueSource')));
    }

    /**
     * Display the specified Other_revenue_source.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $otherRevenueSource = $this->otherRevenueSourceRepository->findWithoutFail($id);

        if (empty($otherRevenueSource)) {
            Flash::error('Other Revenue Source not found');

            return redirect(route('otherRevenueSources.index'));
        }

        return view('other_revenue_sources.show')->with('otherRevenueSource', $otherRevenueSource);
    }

    /**
     * Show the form for editing the specified Other_revenue_source.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $otherRevenueSource = $this->otherRevenueSourceRepository->findWithoutFail($id);

        if (empty($otherRevenueSource)) {
            Flash::error('Other Revenue Source not found');

            return redirect(route('otherRevenueSources.index'));
        }

        return view('other_revenue_sources.edit')->with('otherRevenueSource', $otherRevenueSource);
    }

    /**
     * Update the specified Other_revenue_source in storage.
     *
     * @param  int              $id
     * @param UpdateOther_revenue_sourceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOther_revenue_sourceRequest $request)
    {
        $otherRevenueSource = $this->otherRevenueSourceRepository->findWithoutFail($id);

        if (empty($otherRevenueSource)) {
            Flash::error('Other Revenue Source not found');

            return redirect(route('otherRevenueSources.index'));
        }

        $otherRevenueSource = $this->otherRevenueSourceRepository->update($request->all(), $id);

        Flash::success('Other Revenue Source updated successfully.');

        return redirect(route('otherRevenueSources.show', compact('otherRevenueSource')));
    }

    /**
     * Remove the specified Other_revenue_source from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $otherRevenueSource = $this->otherRevenueSourceRepository->findWithoutFail($id);

        if (empty($otherRevenueSource)) {
            Flash::error('Other Revenue Source not found');

            return redirect(route('otherRevenueSources.index'));
        }

        $this->otherRevenueSourceRepository->delete($id);

        Flash::success('Other Revenue Source deleted successfully.');

        return redirect(route('otherRevenueSources.index'));
    }
}
