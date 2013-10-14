@extends('layouts.master')

@section('content')
	<h1>All Tasks</h1>
	@foreach($tasks as $task)
		<li>{{ link_to("tasks/$task->id",$task->title) }}</li>
	@endforeach
@stop