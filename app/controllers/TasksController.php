<?php

class TasksController extends BaseController
{
	public function __construct()
	{

	}

	public function index()
	{
		//fetch all tasks
		$tasks = Task::with('user')->get();
		$users = User::lists("username","id");

		//load a view to display them
		return View::make('tasks.index',compact('tasks','users'));
	}

	public function show($id)
	{
		$task = Task::findOrFail($id);

		return View::make('tasks.show',compact('task'));
	}

	public function store()
	{
		try
		{
			$this->taskCreator->make(Input::all());

		}
		catch(Acme\Services\ValidationException $e)
		{
			return Redirect::back()->withInput()->withError($e->getErrors());
		}

		return Redirect::home();
	}
}