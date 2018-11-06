<?php

class ParticipacoesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$anos = Anos::with('Participacoes')->orderBy('id', 'desc')->paginate(10);
		$data = array(
		    'anos' => $anos
		);
		return View::make('pages.participacoes.participacoes')->with($data);

	}

public function ajaxcontroller() {
	$anos = Participacoes::with('anos')->paginate(10);
	return View::make('pages.participacoes.ajax.participacoes')->with($anos)->render();
}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		        $participacoes = Participacoes::where('id', '=', $id)->get();
		        //$participacoes_extras = ParticipacoesExtras::where('participacoes_id', '=', $id)->get();

		          // $participacoes = Participacoes::with(array('ParticipacoesExtras'=> function($query) {
		          //     $query->where('id', '=', $id)->get();
		          // }));
		        $data = array(
		            'participacoes' => $participacoes
		        );
		        return View::make('pages.participacoes.detalhe')->with($data);
	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
