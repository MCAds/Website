<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
| @scope MCAds
|
*/
Route::get('/', 'HomeController@displayPage'); // route to HomeController
Route::get('/logout', function() {
	Auth::logout();
	return Redirect::to('/');
});
Route::post('/login-proc', 'LoginController@loginUser'); // Process login
Route::get('/login', 'LoginController@displayPage'); // Show login page
Route::get('/info/{id}', 'AdInfoController@displayPage');
