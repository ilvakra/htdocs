@extends('layout/default')

@section('content')

<form method="post" action="{{ route('tasks.update', $task) }}">
	@csrf
	@method('PUT')
	<br>	<br>
	<input type="text" name="name" value="{{ $task->name }}">	<br>	<br>
	<input type="number" name="hours" value="{{ $task->hours }}">		<br>	<br>
	<textarea name="description">{{ $task->description }}</textarea>	<br>	<br>
	<button class="btn btn-primary">Saglabāt</button>

</form>

@endsection