<?php
// namespace App\Controllers;

class UsersController extends Controller {

public function postLogin() 
{
    Auth::attempt(array(
        'email' => Input::get('email'), 
        'password'  => Input::get('password')));
    
    return Redirect::route('add_new_post');
}


public function getLogout() 
{
    Auth::logout();
    return Redirect::route('login');
}

}