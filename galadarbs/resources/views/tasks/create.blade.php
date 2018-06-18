@extends('layout/default')

@section('content')

<form method="post" action="{{ route('tasks.store') }}">
	@csrf
	<br>	<br>
	<input type="text" name="name">	<br>	<br>
	<input type="number" name="hours">		<br>	<br>
	<textarea name="description"></textarea>	<br>	<br>
	<button class="btn btn-primary">Saglabāt</button>

</form>


@endsection