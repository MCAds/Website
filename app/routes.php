<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
| @scope MCAds
|
*/
Route::get('/', 'HomeController@display_page'); // route to HomeController
Route::get('/logout', function() {
	Auth::logout();
	return Redirect::to('/');
});
Route::get('/login-proc', 'LoginController@login_user'); // Process login
Route::get('/login', 'LoginController@display_page'); // Show login page
