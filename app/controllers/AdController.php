<?php

class AdController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| MCAds Ad Controller
	|--------------------------------------------------------------------------
	|
	* 	@scope MCads
	* 	@author Chaoyi Zha
	|
	*/
	public function postAd()
	{
		// Process POST ad request
		$link = Input::get('link', "undefined");
		$title = Input::get('title', "undefined");
		$pptc = Input::get('pptc', "undefined");
		$type = Input::get('type', "undefined");
		$username = Auth::user()->username;
		$validator = Validator::make(
			array(
				'link' => $link,
				'title' => $title,
				'pptc' => $pptc,
				'type' => $type
			),
			array(
				'link' => 'required|max:250',
				'title' => 'required|max:30',
				'pptc' => 'required|email|unique:users|num',
				'type' => 'required|max:10|alphanum'
			)
		);
		if ($validator->fails())
		{
			return Redirect::to('/register')->with('error', "Invalid inputs or user/email in use. User<65 & AlphaNum, PW<200.");
		}
		
	}
	public function displayPage()
	{
		return View::make('adv-post', array('https' => (Request::server('HTTP_X_FORWARDED_PROTO') == 'https')));
	}

}
