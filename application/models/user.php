<?php
class User extends Eloquent
{
	public function stats()
	{
		return $this->has_one('Stats');
	}
	
	static public function validate($input)
	{
		$rules = array(
			'username' => array('required', 'between:3,20', 'unique:users', 'alpha_num'),
			'password' => array('required', 'confirmed', 'alpha_num', 'between:6,20'),
			'email' => array('required', 'email', 'unique:users'),
			'security_question' => array('required'),
			'security_answer' => array('required'),
			'class' => array('required', 'in:Archer,Dark Knight,Mage'),
			//'csrf_token' => 
		);
		
		$validator = Validator::make($input, $rules);
		
		if($validator->valid()) {
			return array();
		} else {
			return $validator->errors;
		}
		
		return true;
	}
}
