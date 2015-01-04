<?php

class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| MCAds Login Controller
	|--------------------------------------------------------------------------
	|
	* 	@scope MCads
	* 	@author Chaoyi Zha
	|
	*/
	public function loginUser ()
	{
		// Route: "/login-proc" & processes login requests
		if (!Input::has('username') || !Input::has('password')) {
			// If missing inputs
			return Redirect::to('/login')->with('error', 'Login Failed: You must fill in all fields. ');
		}
		$username = Input::get('username', "undefined");
		$password = Input::get('password', "undefined");
		if (Auth::attempt(array('username' => $username, 'password' => $password, 'active' => 1)))
		{
			return Redirect::to('/')->with('error', "You are now logged in as ".$username);
		}
		else 
		{
			return Redirect::to('/login')->with('error', "Invalid Username/Password");
		}
	}
	public function displayPage ()
	{
		// Route: "/login" & displays login page
		return View::make('login', array('https' => (Request::server('HTTP_X_FORWARDED_PROTO') == 'https')));
	}
	public function logout ()
	{
		Auth::logout();
		return Redirect::to('/')->with('error', "Successfully logged out!");
	}

}
