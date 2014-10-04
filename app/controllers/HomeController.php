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
	public function buildEntry ($type, $title, $pptc, $threshold, $ad_id)
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
		<tr id=\"{$type}\">
			<td>{$type}</td>
			<td>{$title}</td>
			<td>{$pptc}</td>
			<td>{$threshold}</td>
			<td class=\"input-group-sm\">
				<input class=\"form-control\" type=\"text\" onclick=\"this.select();\" value=\"http://google.com\" readonly>
			</td>
			<td><a href=\"/info/{$ad_id}\">More info</a>
			</td>
		</tr>"; // Do we really need Threshold?
		
	}
	public function displayPage()
	{
		return View::make('index');
	}

}
