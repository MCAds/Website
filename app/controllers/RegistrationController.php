<?php

class RegistrationController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| MCAds Registration Controller
	|--------------------------------------------------------------------------
	|
	* 	@scope MCads
	* 	@author Chaoyi Zha
	|
	*/
	/*class User extends Eloquent {

		protected $table = 'users';

	}*/
	
	public function registerUser ()
	{
		// Forms directly routed to controller
		
		$username = Input::get('username', "undefined");
		$email = Input::get('email', "undefined");
		$password = Input::get('password', "undefined");
		
		$validator = Validator::make(
			array(
				'username' => $username,
				'password' => $password,
				'email' => $email
			),
			array(
				'username' => 'required|max:65|alha_num|unique:users',
				'password' => 'required|max:200',
				'email' => 'required|email|unique:users'
			)
		);
		if ($validator->fails())
		{
			return Redirect::to('/register')->with('error', "Invalid inputs or user/email in use. User<65 & AlphaNum, PW<200.");
		}
		
		$password = Hash::make($password); // Validate with Hash::check($input, $hashedPassword)
		
		$newUser = new User;
		$newUser->username = $username;
		$newUser->email = $email;
		$newUser->password = $password;
		$newUser->active = 1;
		$newUser->save();
		return Redirect::to('/login')->with('error', "Registered! You can now login");
	}
	public function displayPage ()
	{
		return View::make('register');
	}

}
