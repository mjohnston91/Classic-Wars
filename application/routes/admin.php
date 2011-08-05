<?php

/**
 * Very crude admin panel.
 */

return array(
	
	'GET /admin' => array('name' => 'admin', 'do' => function() {
		$user = User::find(Session::get('laravel_user_id'));
		
		if($user->username == 'Bartholomew') {
			return View::make('admin/index')->bind('user', $user);
		} else {
			return Redirect::to('/');
		}
	}),
	
	'POST /admin' => function() {
		
		$news = new News();
		
		$news->user_id = Session::get('laravel_user_id');
		$news->title = Input::get('title');
		$news->message = Input::get('message');
		$news->date_posted = date('Y-m-d H:i:s');
		
		$news->save();
		
		return Redirect::to_admin()->with('success', 'true');
		
	},
	
);
