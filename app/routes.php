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
Route::get('/register', 'RegistrationController@displayPage');
Route::get('/logout', 'LoginController@logout');
Route::post('/register-proc', 'RegistrationController@registerUser');
Route::post('/post-ad-proc', array('before' => 'auth', 'uses' => 'AdController@postAd'));
Route::get('/post', array('before' => 'auth', 'uses' => 'AdController@displayPage'));
