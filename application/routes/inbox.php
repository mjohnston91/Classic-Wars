<?php

return array(
	
	'GET /inbox' => function()
	{
		
	},
	
	'GET /inbox/compose/([A-Za-z0-9]+), /inbox/compose' => array('name' => 'compose', 'do' => function($username = '')
	{
		echo $username;
	})

);
