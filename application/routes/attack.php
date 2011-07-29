<?php

return array(
	
	'GET /' => array('name' => 'attack', 'do' => function()
	{
		
	}),
	
	'GET /attack/new/([A-Za-z0-9]+), /attack/new' => array('name' => 'attack_new', 'do' => function($name)
	{
		echo $name;
	}),
	
);
