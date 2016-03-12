<?php

namespace Antonifs\Validation;

use Violin\Violin;
use Antonifs\User\User;

/**
* 
*/
class Validator extends Violin
{
	
	protected $user;
	public function __construct (User $user) 
	{
		$this->user = $user;

		$this->addFieldMessages([
			'email' => [
				'uniqueEmail' => 'This email is in used!'
			],

			'username' => [
				'uniqueUsername' => 'This username is in used!'
			],
		]);
	}

	public function validate_uniqueEmail($value, $input, $args)
	{
		return ! (bool) $this->user->where("email", $value)->count();
	}


	public function validate_uniqueUsername($value, $input, $args)
	{
		return ! (bool) $this->user->where("username", $value)->count();
	}

}