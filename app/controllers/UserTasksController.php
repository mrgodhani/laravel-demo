<?php

class UserTasksController extends BaseController
{

	public function index($username)
	{
		$tasks = User::whereUsername($username)->first()->tasks;

		return View::make('tasks.index',compact('tasks'));
	}
}