<?php 

namespace App\Http\Controllers;

use App\Http\Requests\NameRequest;

class FormController extends Controller 
{
    public function showForm()
    {
        return view('form');
    }

    public function postForm(NameRequest $request) 
    {
        // echo 'your name is <b>' .  \Input::get('name') . '</b>';

        echo 'your name is <b>' .  $request->name . '</b>';
    }
}