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
	public function buildEntry ($type, $title, $pptc, $threshold, $ad_id, $url)
	{
		// Build HTML of ad entry
		/*
		 * Types of ads:
		 * 	- Scoreboard
		 * 	- Bossbar
		 * 	- Chat
		 * 	- Hologram
		 */
		 $title = strip_tags($title);
		 $url = strip_tags($url);
		 $pptc = strip_tags($pptc);
		$typeid = strtolower($type);
		$base_template = "
		<tr id=\"{$typeid}\">
			<td>{$type}</td>
			<td>{$title}</td>
			<td>{$pptc}</td>
			<td>{$threshold}</td>
			<td class=\"input-group-sm\">
				<input class=\"form-control\" type=\"text\" onclick=\"this.select();\" value=\"{$url}\" readonly>
			</td>
			<td><a href=\"/info/{$ad_id}\">More info</a>
			</td>
		</tr>"; // Do we really need Threshold?
		return $base_template;
		
	}
	public function displayPage()
	{
		$ads = Ad::paginate(20);
		$html = "";
		foreach ($ads as $ad) {
			$html .= $this->buildEntry($ad->type, $ad->title, $ad->pay, $ad->threshold, $ad->id, $ad->url);
		}
		// TODO: Make sure to filter all titles, thresholds, types, etc for tags & such
		// TODO: When posting ads, make sure to limit title length :)
		View::share('adhtml', $html);
		View::share('ads', $ads);
		return View::make('index');
	}

}
