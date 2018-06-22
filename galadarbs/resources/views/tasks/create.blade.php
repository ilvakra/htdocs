@extends('layout/default')

@section('content')

<form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
	@csrf
	<br>	<br>
	<input type="text" name="name">	<br>	<br>
	<input type="number" name="hours">		<br>	<br>
	<textarea name="description"></textarea>	<br>	<br>

	<input type="file"
               id="picture" name="picture"
               accept="image/png, image/jpeg" />


	<button class="btn btn-primary">Saglabāt</button>

</form>


@endsection