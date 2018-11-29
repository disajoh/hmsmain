<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoom_categoryRequest;
use App\Http\Requests\UpdateRoom_categoryRequest;
use App\Repositories\Room_categoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Room_categoryController extends AppBaseController
{
    /** @var  Room_categoryRepository */
    private $roomCategoryRepository;

    public function __construct(Room_categoryRepository $roomCategoryRepo)
    {
        $this->roomCategoryRepository = $roomCategoryRepo;
    }

    /**
     * Display a listing of the Room_category.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->roomCategoryRepository->pushCriteria(new RequestCriteria($request));
        $roomCategories = $this->roomCategoryRepository->all();

        return view('room_categories.index')
            ->with('roomCategories', $roomCategories);
    }

    /**
     * Show the form for creating a new Room_category.
     *
     * @return Response
     */
    public function create()
    {
        return view('room_categories.create');
    }

    /**
     * Store a newly created Room_category in storage.
     *
     * @param CreateRoom_categoryRequest $request
     *
     * @return Response
     */
    public function store(CreateRoom_categoryRequest $request)
    {
        $input = $request->all();

        $roomCategory = $this->roomCategoryRepository->create($input);

        Flash::success('Room Category saved successfully.');

        return redirect(route('roomCategories.show', compact('roomCategory')));
    }

    /**
     * Display the specified Room_category.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roomCategory = $this->roomCategoryRepository->findWithoutFail($id);

        if (empty($roomCategory)) {
            Flash::error('Room Category not found');

            return redirect(route('roomCategories.index'));
        }

        return view('room_categories.show')->with('roomCategory', $roomCategory);
    }

    /**
     * Show the form for editing the specified Room_category.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roomCategory = $this->roomCategoryRepository->findWithoutFail($id);

        if (empty($roomCategory)) {
            Flash::error('Room Category not found');

            return redirect(route('roomCategories.index'));
        }

        return view('room_categories.edit')->with('roomCategory', $roomCategory);
    }

    /**
     * Update the specified Room_category in storage.
     *
     * @param  int              $id
     * @param UpdateRoom_categoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoom_categoryRequest $request)
    {
        $roomCategory = $this->roomCategoryRepository->findWithoutFail($id);

        if (empty($roomCategory)) {
            Flash::error('Room Category not found');

            return redirect(route('roomCategories.index'));
        }

        $roomCategory = $this->roomCategoryRepository->update($request->all(), $id);

        Flash::success('Room Category updated successfully.');

        return redirect(route('roomCategories.show', compact('roomCategory')));
    }

    /**
     * Remove the specified Room_category from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roomCategory = $this->roomCategoryRepository->findWithoutFail($id);

        if (empty($roomCategory)) {
            Flash::error('Room Category not found');

            return redirect(route('roomCategories.index'));
        }

        $this->roomCategoryRepository->delete($id);

        Flash::success('Room Category deleted successfully.');

        return redirect(route('roomCategories.index'));
    }
}
