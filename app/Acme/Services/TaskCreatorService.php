<?php namespace Acme\Services;

class TaskCreatorService
{
	protected $validator;

	public function __construct()
	{
		$this->validator = $validator;

	}


	public function make(array $attributes)
	{
		if($this->validator->isValid($attributes))
		{
			Task::create([
				'title' => $input['title'],
				'body' => $input['body'],
				'user_id' => $input['assign']
				]);

			return true;
		}

		throw new Acme\Validators\ValidationException('Task validation failed',$this->validator->getErrors());


	}
}