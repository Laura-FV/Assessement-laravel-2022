@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')
	<div class="task-list">
		@foreach($tasks as $task)
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3>{{ $task->title }}</h3>
				</div>
			</div>
			<div class="card-footer">
				<a href="/task/{{ $task->id }}" class="card-footer-item">Show task ></a>
				<a href="/delete/{{ $task->id }}" class="card-footer-item">Delete task ></a>
			</div>
		</div>
		@endforeach
		<a href="/index2/" class="card-footer-item">Show task by alphabetical order ></a>
	</div>
@endsection
