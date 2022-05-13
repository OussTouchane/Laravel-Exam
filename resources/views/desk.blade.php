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
			<div><a href="/task/{{ $task->id }}" class="card-footer-item">Voir Tâche </a></div>
		</div>
		@endforeach
	</div>
    <div class="card-content">
				<div class="content">
					<h3><a href="desk" >Voir toute les tâches </a></h3>
				</div>
			</div>
@endsection