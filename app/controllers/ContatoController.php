<?php 

class ContatoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //return View::make('pages.contato');

        return View::make('pages.contato.contato');
    }



}
