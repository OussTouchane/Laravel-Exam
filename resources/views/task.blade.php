


@extends('layouts/layout')

@section('title', 'Tâche')

@section('main')

<h2>{{ $task->title }}</h2>
	<div class="task-content">
		<div class="card">
			<div class="card-content">
				<div class="content">
					<p>{{ $task->description }}</p>
					<p>  Creation Date : {{ $task->created_at->format('jS \\of F Y') }}</p>
					<div class="card-footer">
					<a href="/" class="card-footer-item">Revenir au Tâche </a>
					<button class="delete">
				<a href="/delete/{{ $task->id }}"class="card-footer-item"> Supprimer </a>
			</button> 
			</div>
			</div>
		</div>
	</div>
@endsection