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

/*Event::listen('illuminate.query', function($query)
{
	//var_dump($query);

});*/

Route::get('/',['as' => 'home', 'uses' => 'TasksController@index']);
Route::post('/tasks','TasksController@store');

Route::get('tasks/{id}','TasksController@show')->where('id','\d+');

Route::get('{username}/tasks','UserTasksController@index');

Route::get('{username}/tasks/{id}',['as' => 'user.tasks.show','uses' => 'UserTasksController@show']);


/*Route::get('{username}/tasks', function($username)
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
	$user = User::with('tasks')->whereUsername($username)->first();
	$task = $user->tasks;

	//and load a view to display it
	return View::make('tasks.show',compact('task'));
});*/
