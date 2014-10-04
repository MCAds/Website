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
	public function login_user ()
	{
		// Route: "/login-proc" & processes login requests
		if (!Input::has('username') || !Input::has('password')) {
			// If missing inputs
			return Redirect::to('/login')->with('error', 'Login Failed');
		
		$username = Input::get('username', "undefined");
		$password = Input::get('password', "undefined");
		
		
	}
	public function display_page ()
	{
		// Route: "/login" & displays login page
		View::share('test', "Testing, does this work?");
		Session::put('username', "cydrobolt");
		return View::make('index');
	}

}
