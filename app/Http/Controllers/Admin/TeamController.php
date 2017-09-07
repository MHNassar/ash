<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Team;
use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class TeamController extends Controller {

	/**
	 * Display a listing of team
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $team = Team::all();

		return view('admin.team.index', compact('team'));
	}

	/**
	 * Show the form for creating a new team
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.team.create');
	}

	/**
	 * Store a newly created team in storage.
	 *
     * @param CreateTeamRequest|Request $request
	 */
	public function store(CreateTeamRequest $request)
	{
	    $request = $this->saveFiles($request);
		Team::create($request->all());

		return redirect()->route(config('quickadmin.route').'.team.index');
	}

	/**
	 * Show the form for editing the specified team.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$team = Team::find($id);
	    
	    
		return view('admin.team.edit', compact('team'));
	}

	/**
	 * Update the specified team in storage.
     * @param UpdateTeamRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTeamRequest $request)
	{
		$team = Team::findOrFail($id);

        $request = $this->saveFiles($request);

		$team->update($request->all());

		return redirect()->route(config('quickadmin.route').'.team.index');
	}

	/**
	 * Remove the specified team from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Team::destroy($id);

		return redirect()->route(config('quickadmin.route').'.team.index');
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
            Team::destroy($toDelete);
        } else {
            Team::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.team.index');
    }

}
