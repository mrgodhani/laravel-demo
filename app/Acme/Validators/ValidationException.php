<?php namespace Acme\Validators;

class ValidationException extends Exception {

	protected $errors;

	public function __construct($message,$errors,$code =0, Exception $pervious = null)
	{
		$this->errors = $errors;

		parent::__construct($message,$code,$previous);

	}

	public function getErrors()
	{
		return $this->errors;
	}
}