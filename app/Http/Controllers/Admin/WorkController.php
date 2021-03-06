<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Work;
use App\Http\Requests\CreateWorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class WorkController extends Controller {

	/**
	 * Display a listing of work
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $work = Work::all();

		return view('admin.work.index', compact('work'));
	}

	/**
	 * Show the form for creating a new work
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.work.create');
	}

	/**
	 * Store a newly created work in storage.
	 *
     * @param CreateWorkRequest|Request $request
	 */
	public function store(CreateWorkRequest $request)
	{
	    $request = $this->saveFiles($request);
		Work::create($request->all());

		return redirect()->route(config('quickadmin.route').'.work.index');
	}

	/**
	 * Show the form for editing the specified work.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$work = Work::find($id);
	    
	    
		return view('admin.work.edit', compact('work'));
	}

	/**
	 * Update the specified work in storage.
     * @param UpdateWorkRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateWorkRequest $request)
	{
		$work = Work::findOrFail($id);

        $request = $this->saveFiles($request);

		$work->update($request->all());

		return redirect()->route(config('quickadmin.route').'.work.index');
	}

	/**
	 * Remove the specified work from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Work::destroy($id);

		return redirect()->route(config('quickadmin.route').'.work.index');
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
            Work::destroy($toDelete);
        } else {
            Work::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.work.index');
    }

}
