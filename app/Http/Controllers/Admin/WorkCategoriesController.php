<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\WorkCategories;
use App\Http\Requests\CreateWorkCategoriesRequest;
use App\Http\Requests\UpdateWorkCategoriesRequest;
use Illuminate\Http\Request;



class WorkCategoriesController extends Controller {

	/**
	 * Display a listing of workcategories
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $workcategories = WorkCategories::all();

		return view('admin.workcategories.index', compact('workcategories'));
	}

	/**
	 * Show the form for creating a new workcategories
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.workcategories.create');
	}

	/**
	 * Store a newly created workcategories in storage.
	 *
     * @param CreateWorkCategoriesRequest|Request $request
	 */
	public function store(CreateWorkCategoriesRequest $request)
	{
	    
		WorkCategories::create($request->all());

		return redirect()->route(config('quickadmin.route').'.workcategories.index');
	}

	/**
	 * Show the form for editing the specified workcategories.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$workcategories = WorkCategories::find($id);
	    
	    
		return view('admin.workcategories.edit', compact('workcategories'));
	}

	/**
	 * Update the specified workcategories in storage.
     * @param UpdateWorkCategoriesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateWorkCategoriesRequest $request)
	{
		$workcategories = WorkCategories::findOrFail($id);

        

		$workcategories->update($request->all());

		return redirect()->route(config('quickadmin.route').'.workcategories.index');
	}

	/**
	 * Remove the specified workcategories from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		WorkCategories::destroy($id);

		return redirect()->route(config('quickadmin.route').'.workcategories.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            WorkCategories::destroy($toDelete);
        } else {
            WorkCategories::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.workcategories.index');
    }

}
