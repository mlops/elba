<?php
class AgendaController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /agenda
	 *
	 * @return Response
	 */
	public function index()
	{
		 $agenda = Agenda::all()->orderBy('startdate', 'asc')->get();


		
		    $data = array(
		        'agenda' => $agenda
		   );
		    
		    return View::make('pages.agenda.agenda')->with($data);

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /agenda/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /agenda
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /agenda/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /agenda/{id}/edit
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
	 * PUT /agenda/{id}
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
	 * DELETE /agenda/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}