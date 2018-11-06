<?php

class SinglesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$singlesData = Single::all();

		return View::make('pages.singles.singles')->with('singles', $singlesData);
	}

}