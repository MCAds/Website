<?php

class AdInfoController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| MCAds Ad Info Controller
	|--------------------------------------------------------------------------
	|
	|	Route::get('/', 'AdInfoController@display_page');
	* 	@scope MCads
	* 	@author Chaoyi Zha
	|
	*/
	public function displayPage($id)
	{
		// Process information based on id...check if exists, etc
		View::share('id', $id);
		return View::make('ad_info');
	}

}
