<?php

return array(

	'GET /register' => array('name' => 'register', 'do' => function()
	{
		/*
		 * Setup our array of security questions
		 */
		$securityQuestions = array(
			'' => 'Select a question',
			'What is your mothers maiden name?' => 'What is your mothers maiden name?',
			'Who is your favorite super hero?' => 'Who is your favorite super hero?',
			'What is your fathers middle name?' => 'What is your fathers middle name?',
			'What was your first job?' => 'What was your first job?',
			'What is your favorite food?' => 'What is your favorite food?',
			'What is your pets name?' => 'What is your pets name?'
		);
		
		$user = User::find(Session::get('laravel_user_id'));
		
		return View::make('user/register')->bind('securityQuestions', $securityQuestions)
										  ->partial('header', 'partials/header1col')
										  ->partial('footer', 'partials/footer1col');
	}),
	
	'POST /register' => function()
	{		
		$errors = User::validate(Input::get());
		/*
		 * If there are errors with the registration
		 * redirect to the GET user/register view
		 */
		if(count($errors) > 0) {
			return Redirect::to_register()->with('errors', $errors);
		} else {			
			//New user object one-to-one relationship with Stats
			$user = new User();
			
			//Put in the data for the player
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->security_question = Input::get('security_question');
			$user->security_answer = Crypt::encrypt(Input::get('security_answer'));
			$user->date_registered = date('Y-m-d H:i:s');
			$user->emails = Input::get('emails');
			
			$user->save();
			
			//New stats object one-to-one relationship with Users
			$stats = new Stats();
			
			//The ID of the newly registered player. It's a one-to-one relationship
			$stats->user_id = $user->id;
			//Default player data follows....
			$stats->class = Input::get('class');
			$stats->base_hp = 10;
			$stats->base_damage = 3;
			$stats->exp = 0;
			$stats->rage = 1000;
			//Using a ternary if statement, Archer = 0.05 Dark Knight = 0.00 Mage = 0.10
			$stats->hp_modifier = (Input::get('class') != 'Archer') ? 
									(Input::get('class') == 'Dark Knight') ? 0.00 : 0.10 
								  : 0.05;
			//Using a ternary if statement, Archer = 0.05 Dark Knight = 0.10 Mage = 0.00
			$stats->damage_modifier = (Input::get('class') != 'Archer') ? 
										(Input::get('class') == 'Dark Knight') ? 0.10 : 0.00 
								  : 0.05;
			//Exp modifier for Special EXP days. :)
			$stats->exp_modifier = 0.00; 
			$stats->save();
			
			return Redirect::to_register()->with('success', true);
		}
	}
);
