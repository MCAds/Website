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
		return Redirect::to('/')->with('error', "This would log you in");
	}
	public function displayPage ()
	{
		// Route: "/login" & displays login page
		return View::make('login');
	}

}
