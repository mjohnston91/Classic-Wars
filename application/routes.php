<?php
return array(

	'GET /' => array('name' => 'home', 'do' => function()
	{
		$user = User::find(Session::get('laravel_user_id'));
		$news = News::order_by('date_posted', 'desc')->take(10)->get();
		
		return View::make('home/index')->bind('news', $news)
									   ->partial('header', 'partials/header2col')
									   ->partial('footer', 'partials/footer2col', array('user' => $user));
	}),
	
);
