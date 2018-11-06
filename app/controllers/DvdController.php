<?php

class DvdController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dvd
	 *
	 * @return Response
	 */
	public function index()
	{
		//$dvds = Dvds::all();
		//return View::make('pages.dvds.dvds')->with('dvds', $dvds);

		$anos = Dvds::with('Anos')->get();
		$data = array(
		    'anos' => $anos
		);
		return View::make('pages.dvds.dvds')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dvd/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dvd
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /dvd/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $slug = null)
	{
		$dvds = Dvds::with('DvdsExtras')->with('Videos')->where('id', '=', $id)->orWhere('slug', '=', $slug)->get();
		$data = array(
		    'dvds' => $dvds
		);
		return View::make('pages.dvds.detalhe')->with('dvds', $dvds);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dvd/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dvd/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dvd/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}