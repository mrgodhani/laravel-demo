<?php namespace Acme\Validators;

abstract class Validator
{
	protected $errors;

	public function isValid(array $attributes)
	{
		$v = Validator::make($attributes,static::$rules);

		if ($v->failes())
		{
			$this->errors = $v->messages();
			return false;
		} 

		return true;
	}


	public function getErrors()
	{
		return $this->errors;
	}
}