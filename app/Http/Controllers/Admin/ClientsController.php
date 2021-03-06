<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Clients;
use App\Http\Requests\CreateClientsRequest;
use App\Http\Requests\UpdateClientsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class ClientsController extends Controller {

	/**
	 * Display a listing of clients
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $clients = Clients::all();

		return view('admin.clients.index', compact('clients'));
	}

	/**
	 * Show the form for creating a new clients
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.clients.create');
	}

	/**
	 * Store a newly created clients in storage.
	 *
     * @param CreateClientsRequest|Request $request
	 */
	public function store(CreateClientsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Clients::create($request->all());

		return redirect()->route(config('quickadmin.route').'.clients.index');
	}

	/**
	 * Show the form for editing the specified clients.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$clients = Clients::find($id);
	    
	    
		return view('admin.clients.edit', compact('clients'));
	}

	/**
	 * Update the specified clients in storage.
     * @param UpdateClientsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateClientsRequest $request)
	{
		$clients = Clients::findOrFail($id);

        $request = $this->saveFiles($request);

		$clients->update($request->all());

		return redirect()->route(config('quickadmin.route').'.clients.index');
	}

	/**
	 * Remove the specified clients from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Clients::destroy($id);

		return redirect()->route(config('quickadmin.route').'.clients.index');
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
            Clients::destroy($toDelete);
        } else {
            Clients::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.clients.index');
    }

}
