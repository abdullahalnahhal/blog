<?php
	function current_page_parameters()
	{
		return \Request::route()->parameters;
	}
	function current_page()
	{
		return \Request::route()->getName();
	}
	function cLang()
	{
		$lang = explode("_", App::getLocale());
		$lang = $lang[0];
		return $lang;
	}
	function direction()
	{
		$locale = cLang();
		if ($locale == 'en') {
			return 'ltr';
		}else{
			return 'rtl';
		}
	}
	function revDir()
	{
		$locale = cLang();
		if ($locale == 'en') {
			return 'rtl';
		}else{
			return 'ltr';
		}
	}
	function dirFull()
	{
		$locale = cLang();
		if ($locale == 'en') {
			return 'left';
		}else{
			return 'right';
		}
	}
	function revFull()
	{
		$locale = cLang();
		if ($locale == 'en') {
			return 'right';
		}else{
			return 'left';
		}
	}
	//
	// function apiClient()
	// {
	//
	// 	return auth('api')->user();
	// }
	//
	// function currentClient()
	// {
	// 	return auth('api')->user()??null;
	// }
	//
	// function currentClientID()
	// {
	// 	return currentClient()->company->company_id;
	// }
	//
	function currentUser()
	{
		return auth('web')->user();
	}

	function lRoute($route, $variables = [])
	{
		if (!isset($variables['locale'])) {
			$variables['locale'] = clang();
		}
		return route($route, $variables);
	}

	function active($active, $page)
	{
		if ($active == $page) {
			return 'active';
		}
		return '';
	}

	function langName()
	{
		return "name_".cLang();
	}

	function langStatus()
	{
		return "status_".cLang();
	}

	function langCause()
	{
		return "cause_".cLang();
	}

	function langPermission()
	{
		return "permission_".cLang();
	}


	function status($status)
	{
		if ($status) {
			return 'active';
		}
		return 'not Active';
	}

	function makeRandomToken()
	{
			return uniqid('NiceOne_C_', true);
	}

	function makeRandomRunsheet()
	{
			return uniqid('sheet-', true);
	}
	function makeRandomDeposit()
	{
			return uniqid('NiceOne-', true);
	}
	function makeAWD()
	{
			return time().rand(10, 100);
	}

	function message ($status = true, $data = [], $message = '')
	{
		return response()->json([
			'status'=>$status,
			'data'=>$data??[],
			'message'=>$message,
		]);
	}

	function error_message ($message)
	{
			return array_values($message->messages())[0][0];
	}
	function colors()
	{
		  $colors = [
				  'primary', 'warning', 'danger', 'info', 'success', 'dark', 'secondary'
			];
			return $colors;
	}

	function isThereParams($array){
			unset($array["_token"]);
			$array = array_filter($array);
			if (empty($array)) {
					return false;
			}
			return true;
	}
	function prepare_time($time)
	{
		$time = explode(" ", $time);
		$real_time = $time[0];

		$hours = explode(":", $real_time)[0];
		$minutes = explode(":", $real_time)[1];
		if ($time[1] == "PM") {
			if ($hours != 12) {
				$hours = 12 + $hours;
			}
		}elseif($time[1] == "AM") {
			if ($hours == 12) {
				$hours = 0;
			}
		}
		return $hours.":".$minutes;
	}
	function prepareYoutube($link)
	{
		$link = explode('watch?v=', $link);
		$link = $link[0].'/embed/'.$link[1];
		return $link;
	}
?>
