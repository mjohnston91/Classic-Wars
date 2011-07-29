<?php

return array(

	'GET /' => function()
	{
		$user = User::find(Session::get('laravel_user_id'));
		
		return View::make('home/index')->partial('header', 'partials/header2col')
									   ->partial('footer', 'partials/footer2col');
	}
);
