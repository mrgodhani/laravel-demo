<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',['as' => 'home', 'uses' => 'TasksController@index']);

Route::get('tasks/{id}','TasksController@show')->where('id','\d+');

Route::get('{username}/tasks', function($username)
{
	//find user by their usrename from the users table
	$user = User::whereUsername($username)->first();

	//get all tasks associated with that user
	return  $user->tasks;

	// and return them

	//return Task::find(2)->user;
});

Route::get('{username}/tasks/{id}', function($username,$id)
{

	//find the Task by its id
	$user = User::whereUsername($username)->first();
	$task = $user->tasks()->findOrFail($id);

	//and load a view to display it
	return View::make('tasks.show',compact('task'));
});
