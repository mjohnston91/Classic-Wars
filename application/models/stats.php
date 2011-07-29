<?php
class Stats extends Eloquent
{
	public static $table = 'users_stats';
	
	public function users()
	{
		return $this->belongs_to('User');
	}
}
