<?php

if(!function_exists('page_title')){
	function page_title($title){

		$baseTitle = config('app.name') .'- list of artisans';

		return empty($title) ? $baseTitle : sprintf('%s | %s',$title,$baseTitle);
	}
}

if(!function_exists('set_active_route')){
	function set_active_route($route){

		return Route::is($route) ? 'active' : '';
		
	}
}

?>