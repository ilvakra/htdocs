@extends('layout/default')

@section('content')

<a href="{{ route('tasks.create') }}" class="btn btn-primary">Create new</a>

		<form method="post" action="{{ route('tasks.search') }}" id="myTaskForm">
	 		@csrf
	 		<input type="text" name="name">

	 		<button type="submit" class="btn btn-primary">Meklēt</button>
	 		<button type="button" class="btn btn-success" id="jsSearch">Meklēt ar js/jquery</button>
	 	</form>

<ul>
@foreach($tasks as $task)
	 <li><a href="{{ route('tasks.show', $task) }}">{{ $task->name }}</a>

	 	<form method="post" action="{{ route('tasks.destroy', $task) }}">
	 		@csrf
			@method('DELETE')

	 		<button type="submit" class="btn btn-danger">x</button>
	 	</form>

	 </li>
@endforeach
</ul>

@endsection