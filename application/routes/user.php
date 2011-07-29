<?php

return array(

	'POST /user/login' => function()
	{
		if(Auth::login(Input::get('username'), Input::get('password')))
			return Redirect::to('/')->with('success', 'true');
		
		return Redirect::to('/');
	},
	
	'GET /user/profile/(:any)' => array('name' => 'profile', 'do' => function($username)
	{
		$userProfile = User::where('username', '=', $username)->first();
		$user = User::find(Session::get('laravel_user_id'));
		
		return View::make('user/profile')->bind('profile', $userProfile)
										 ->partial('header', 'partials/header1col')
										 ->partial('footer', 'partials/footer1col', array('user' => $user));
										 
	})
);
