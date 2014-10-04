<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| MCAds Home Controller
	|--------------------------------------------------------------------------
	|
	|	Route::get('/', 'HomeController@display_page');
	* 	@scope MCads
	* 	@author Chaoyi Zha
	|
	*/
	public function build_entry ()
	{
		// Build HTML of ad entry
		/*
		 * Types of ads:
		 * 	- Scoreboard
		 * 	- Bossbar
		 * 	- Chat
		 * 	- Hologram
		 */
		$base_template = "
		<tr id=\"scoreboard\">
			<td>Scoreboard</td>
			<td>Random ad</td>
			<td>$21</td>
			<td>$25</td>
			<td class=\"input-group-sm\">
				<input class=\"form-control\" type=\"text\" onclick=\"this.select();\" value=\"http://google.com\" readonly>
			</td>
			<td><a href=\"/info/generated_id_here\">More info</a>
			</td>
		</tr>"; // Do we really need Threshold?
		
	}
	public function display_page()
	{
		View::share('test', "Testing, does this work?");
		Session::put('username', "cydrobolt");
		return View::make('index');
	}

}
