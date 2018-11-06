<?php


use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;


// use Zizaco\Entrust\ConfideUser;
// use Zizaco\Entrust\ConfideUserInterface;
// use Zizaco\Entrust\HasRole;

// class User extends Eloquent implements UserInterface, RemindableInterface {

class User extends Eloquent implements UserInterface, RemindableInterface {

	//use ConfideUser;
	//use HasRole;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	//add to the 'fillable' array
	
	protected $fillable = array('email', 'password', 'name');
	public $timestamps = false;




	public function articles(){
	   return $this->hasMany('Articles');
	}

	public function address(){
	   return $this->hasOne('Address');
	}

	public function roles(){
	   return $this->belongsToMany('Role', 'role_use');
	}



	public function postLogin() {
		Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')));
		return Redirect::route('add_new_post');
	}

	public function getLogout() {
		Auth::logout();
		return Redirect::route('pages.adm.index');
	}
		










		




	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}


}
