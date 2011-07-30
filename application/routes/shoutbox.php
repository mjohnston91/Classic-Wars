<?php

return array(

	'GET /shoutbox' => array('name' => 'new_shout', 'do' => function() 
	{
		return View::make('shoutbox/index');
	}),
	
);
